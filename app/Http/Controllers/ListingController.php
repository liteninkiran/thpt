<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::orderBy('date_posted', 'DESC')->paginate(10);
        $count = Listing::onlyTrashed()->count();

        return view('listings.index', compact('listings', 'count'));
    }

    /**
     * Display a listing of the soft deleted resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $listings = Listing::onlyTrashed()->orderBy('deleted_at', 'DESC')->paginate(10);
        $count = Listing::count();
        return view('listings.trashed', compact('listings', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->validate(Listing::$validationRules, Listing::$messages)) {

            $imageName = null;

            // Upload image
            if ($request->has('cover_image')) {
                $image = $request->cover_image;
                $path = 'storage/listings/';
                $imageName = $this->uploadImage($image, $path);
            }

            $newRequest = array_merge($request->all(), [
                'created_by' => auth()->user()->id,
                'updated_by' => auth()->user()->id,
            ]);

            $listing = Listing::create($newRequest);

            $listing->cover_image = $imageName;

            $listing->save();

            session()->flash('message', 'Listing created successfully');

            return redirect('admin/listings/index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        return view('listings.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        $imageName = $listing->cover_image;

        if ($request->validate(Listing::$validationRules, Listing::$messages)) {

            // Upload image
            if ($request->has('cover_image')) {
                $image = $request->cover_image;
                $path = 'storage/listings/';
                $imageName = $this->uploadImage($image, $path);
            }

            $newRequest = array_merge($request->all(), [
                'updated_by' => auth()->user()->id,
            ]);

            $listing->update($newRequest);
            $listing->cover_image = $imageName;

            $listing->save();

            session()->flash('message', 'Listing updated successfully');

            return redirect('admin/listings/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        session()->flash('message', 'Listing ' . $listing->title . ' trashed successfully');
        return redirect('admin/listings/index');
    }

    public function undelete($id) {
        $listing = Listing::onlyTrashed()->find($id);
        $listing->restore();
        session()->flash('message', 'Listing ' . $listing->title . ' restored successfully');
        return redirect()->route('admin.listings.trashed');
    }

    public function remove($id) {
        $listing = Listing::onlyTrashed()->find($id);
        $title = $listing->title;
        $listing->forceDelete();
        session()->flash('message', 'Listing ' . $title . ' deleted successfully');
        return redirect()->route('admin.listings.trashed');
    }
}
