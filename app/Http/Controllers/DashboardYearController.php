<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardYearController extends Controller
{
    public function index()
    {
        return view(
            'dashboard.layout.content.years.index',
            [
                'title' => 'Safoto | All Years',
                'years' => Year::select(['yearName', 'slug'])->withCount('pictures')->latest()->paginate(5),
            ]
        );
    }

    public function create()
    {
        return view(
            'dashboard.layout.content.years.create',
            [
                'title' => 'Safoto | Add New Year',
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['slug'] = Str::slug($request->yearName);
        $validateYears = $request->validate(
            [
                'yearName' => 'required|max:255|unique:years',
                'slug' => '',
            ],
            [
                'yearName.required' => 'Year City is required',
                'yearName.unique' => 'Year has already been taken.',
            ],
        );
        Year::create($validateYears);

        return to_route('years.index')->with('success', 'Success, Year has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Year $year)
    {
        return view(
            'dashboard.layout.content.years.edit',
            [
                'title' => 'Safoto | Edit Years',
                'year' => $year,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Year $year)
    {
        $rules = [];

        if ($request->yearName != $year->yearName) {
            // code...
            $rules['yearName'] = 'required|max:255|unique:years';
        }
        if ($request->slug != $year->slug) {
            // code...
            $rules['slug'] = 'required|max:255|unique:years';
        }
        $validateYears = $request->validate($rules);

        Year::where('id', $year->id)->update($validateYears);

        return to_route('years.index')->with('success', 'Success, Year has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Year $year)
    {
        if ($year->pictures()->count() > 0) {
            return to_route('years.index')->with('error', 'Error, This year has a picture, you cant delete it!');
        } else {
            Year::destroy($year->id);

            return to_route('years.index')->with('success', 'Success, Year has been deleted!');
        }
    }
}
