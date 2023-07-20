<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserBioUpdateRequest;
use App\Http\Requests\UserPictureUpdateRequest;
use App\Models\Biodata;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserManagementController extends Controller
{
    public function index()
    {
        return view('dashboard.layout.content.users-management.index', [
            'title'     => 'Safoto | User List',
            'users'     => User::select(['username', 'email', 'isAdmin'])->withCount('pictures')->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.layout.content.users-management.create');
    }

    public function store(Request $request)
    {
        $request['username'] = Str::replace(' ', '', $request->username);
        $request['username'] = strtolower($request->username);
        $validateNewUser = $request->validate(
            [
                'username'      => 'required|alpha_dash|min:5|max:30|lowercase|unique:users',
                'email'         => 'required|email:dns,rfc|unique:users',
                'password'      => 'required|min:8|max:255',
            ]
        );
        $request['username'] = $request->username;
        $validateNewUser['password'] = Hash::make($validateNewUser['password']);
        User::create($validateNewUser);
        return to_route('usersmanagement.index')->with('success', 'Succes, New user has been added!');
    }

    public function bioStore(Request $request)
    {
        // dd($request->userId);
        Biodata::create([
            'user_id' => $request->userId,
        ]);

        return back();
    }

    public function show(User $user)
    {
        // dd($user->id);
        return view('dashboard.layout.content.users-management.show', [
            'title' => 'Safoto | User Detail',
            'user'  => $user,
            'biodata' => Biodata::where('user_id', $user->id)->get(),
        ]);
    }

    public function edit(User $user)
    {
        // dd($user->id);
        return view('dashboard.layout.content.users-management.edit', [
            'title' => 'Safoto | Update Profile',
            'userBio'  => $user->biodata,
            'userInfo' => $user,
        ]);
    }

    // profile picture update
    public function pictureUpdate(UserPictureUpdateRequest $request): RedirectResponse
    {
        if ($request->file('profile')) {
            if ($request->oldProfile) {
                Storage::delete($request->oldProfile);
            }
            // Custom Name File Store
            $file = $request->file('profile');
            $orginalExtension = $file->getClientOriginalExtension();
        }
        User::where('id', $request->id)->update([
            // Result of Custom Name File
            'profile' => $file->storeAs('image/user-profile', 'photo-by' . '-' . $request->username . '-' . mt_rand(0, 9999999999) . '.' . $orginalExtension),
        ]);
        return back()->with('pictureSuccess', 'Saved!');
    }

    // profile info update
    public function infoUpdate(Request $request): RedirectResponse
    {
        // dd($request->id);
        $request->validate(
            [
                'username'      => ['string', 'max:255', 'unique:users,username,' . $request->id],
                'email'         => ['string', 'max:255', 'unique:users,email,' . $request->id],
            ],
        );
        User::where('id', $request->id)->update([
            'username' => strtolower(str_replace(' ', '', $request->username)),
            'email' => $request->email,
        ]);
        return to_route('usersmanagement.edit', $request->username)->with('infoSuccess', 'Saved!');
    }

    public function bioUpdate(UserBioUpdateRequest $request): RedirectResponse
    {
        Biodata::where('user_id', $request->id)->update([
            'fullName' => ucwords(strtolower($request->fullName)),
            'birthDay' => $request->birthDay,
            'birthCity' => ucwords(strtolower($request->birthCity)),
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'tiktok' => $request->tiktok,
        ]);
        return back()->with('bioSuccess', 'Saved!');
    }

    public function destroy(User $user)
    {
        return match ($user->id) {
            Auth::user()->id    => to_route('usersmanagement.index')->with('error', 'Warning. You cant delete your own account!'),
            2, 3, 4             => to_route('usersmanagement.index')->with('error', 'Warning. You cant delete default account!'),
            default             => $user->profileCheck(),
        };
    }
}
