<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listings
    public function index()
    {

        return view('listings.index', [
            "headings" => "Latest Listings",
            "posts" => Listing::latest()->filter(request(['tag', 'search']))->simplepaginate(6)
        ]);
    }

    //show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //create form
    public function create()
    {
        return view('listings.create');
    }

    //store list
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with("success", "Post created successfully!");
    }

    // edit list
    public function edit(Listing $listing)
    {

        return view('listings.edit', ['listing' => $listing]);
    }

    //update list
    public function update(Request $request, Listing $listing)
    {

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required',],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with("success", "Post created successfully!");
    }

    //delete list
    public function delete(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->with('success', 'Listing deleted successfully.');
    }
}
