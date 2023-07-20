<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Event;
use App\Models\Picture;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardPictureController extends Controller
{
    public function dashboardPage()
    {
        return view('dashboard.layout.content.dashboardPage', [
            'posts' => Picture::where('user_id',  Auth::user()->id)->withOut('event', 'year', 'user')->select(['imgName', 'slug', 'image'])->limit(5)->get(),
        ]);
    }

    public function index()
    {
        return view(
            'dashboard.layout.content.pictures.index',
            [
                'pictures' => Picture::where('user_id', auth()->user()->id)->withOut('user')->latest()->paginate(5),
            ]
        );
    }

    public function create()
    {
        return view(
            'dashboard.layout.content.pictures.create',
            [
                'events' => Event::all(),
                'years' => Year::all(),
            ]
        );
    }

    public function store(Request $request)
    {
        $request['imgName'] = Str::title($request->imgName);
        $request['alt_imgName'] = Str::title($request->imgName);
        $request['slug'] = Str::slug($request->imgName) . '-' . Auth::user()->username . '-' . mt_rand(0, 9999999999);

        $validatePictures = $request->validate(
            [
                'imgName'                   => 'required|string|max:255',
                'alt_imgName'               => 'required|string|max:255',
                'image'                     => 'required|image|mimes:jpg,jpeg,png|file|max:10240', // max 10mb
                'event_id'                  => 'required',
                'year_id'                   => 'required',
            ]
        );

        $validatePictures['slug'] = $request->slug;
        $validatePictures['imgName'] = $request->imgName;
        $validatePictures['alt_imgName'] = $request->alt_imgName;
        $validatePictures['user_id'] = auth()->user()->id;

        // Custom Name File Store
        $file = $request->file('image');
        $orginalExtension = $file->getClientOriginalExtension();
        // Result of Custom Name File
        $validatePictures['image'] = $file->storeAs('image/pictures', 'taken-by' . '-' . Auth::user()->username . '-' . mt_rand(0, 9999999999) . '.' . $orginalExtension);

        Picture::create($validatePictures);
        return to_route('pictures.index')->with('success', 'Success, Picture has been added!');
    }

    public function edit(Picture $picture)
    {
        // ddd($picture);
        return view(
            'dashboard.layout.content.pictures.edit',
            [
                'title' => 'Safoto | Edit Pictures',
                'picture' => $picture,
                'events' => Event::all(),
                'years' => Year::all(),
            ]
        );
    }

    public function update(Request $request, Picture $picture)
    {
        $rules = [
            'imgName'       => 'required|max:255',
            'image'         => 'image|mimes:jpg,jpeg,png|file|max:10240', // max 10mb
            'event_id'      => 'required',
            'year_id'       => 'required',
        ];

        $validatedPictures = $request->validate($rules);

        if ($request->file('image')) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            // Custom Name File Store
            $file = $request->file('image');
            $orginalExtension = $file->getClientOriginalExtension();
            // Result of Custom Name File
            $validatedPictures['image'] = $file->storeAs('img', 'taken-by' . '-' . Auth::user()->username . '-' . mt_rand(0, 9999999999) . '.' . $orginalExtension);
        }

        Picture::where('id', $picture->id)->update($validatedPictures);
        return to_route('pictures.index')->with('success', 'Success, Picture has been edited!');
    }

    public function destroy(Picture $picture)
    {
        if ($picture->image) {
            Storage::delete($picture->image);
        }

        Picture::destroy($picture->id);
        return to_route('pictures.index')->with('success', 'Success, Picture has been deleted!');
    }
}
