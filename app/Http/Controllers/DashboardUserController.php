<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\UserBioUpdateRequest;
use App\Http\Requests\UserInfoUpdateRequest;
use App\Http\Requests\UserPictureUpdateRequest;
use App\Models\Biodata;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class DashboardUserController extends Controller
{
    public function index()
    {
        return view('dashboard.layout.content.users.index', [
            'title' => 'Safoto | Your Profile',
            'biodata' => Biodata::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function edit(User $user)
    {
        return view('dashboard.layout.content.users.edit', [
            'title' => 'Safoto | Edit Your Profile',
            'userBio' => $user->biodata,
            'userInfo' => $user,
        ]);
    }

    public function bioStore(Request $request)
    {
        // dd($request->userId);
        Biodata::create([
            'user_id' => Auth::user()->id,
        ]);

        return back();
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
        User::where('id', Auth::user()->id)->update([
            // Result of Custom Name File
            'profile' => $file->storeAs('image/user-profile', 'photo-by'.'-'.Auth::user()->username.'-'.mt_rand(0, 9999999999).'.'.$orginalExtension),
        ]);

        return back()->with('pictureSuccess', 'Saved!');
    }

    // profile info update
    public function infoUpdate(UserInfoUpdateRequest $request)
    {
        User::where('id', Auth::user()->id)->update([
            'username' => strtolower($request->username),
            'email' => $request->email,
        ]);

        return to_route('users.edit', $request->username)->with('infoSuccess', 'Saved!');
    }

    public function bioUpdate(UserBioUpdateRequest $request): RedirectResponse
    {
        Biodata::where('user_id', Auth::user()->id)->update([
            'fullName' => ucwords(strtolower($request->fullName)),
            'birthCity' => ucwords(strtolower($request->birthCity)),
            'birthDay' => $request->birthDay,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'tiktok' => $request->tiktok,
        ]);

        return back()->with('bioSuccess', 'Saved!');
    }

    public function passwordUpdate(PasswordUpdateRequest $request, $option, User $user)
    {
        if ($option == 'user') {
            if (Hash::check($request->current_password, Auth::user()->password)) {
                // code...
                auth()->user()->update(['password' => Hash::make($request->password)]);

                return back()->with('success', 'Success, Password has been updated!');
            } else {
                throw ValidationException::withMessages([
                    'current_password' => 'Your current password does not match to our record',
                ]);

                return to_route('users.edit', Auth::user())->with('error', 'Warning, Update password failed!');
            }
        } elseif ($option == 'managementusers') {
            if (Hash::check($request->current_password, $user->password)) {
                // code...
                User::where('id', $user->id)->update([
                    'password' => Hash::make($request->password),
                ]);

                return back()->with('success', 'Success, Password has been updated!');
            } else {
                throw ValidationException::withMessages([
                    'current_password' => 'Your current password does not match to our record',
                ]);

                return to_route('usersmanagement.edit', $user)->with('error', 'Warning, Update password failed!');
            }
        } else {
            throw ValidationException::withMessages([
                'current_password' => 'Update Password Failed',
            ]);
        }
    }
}
