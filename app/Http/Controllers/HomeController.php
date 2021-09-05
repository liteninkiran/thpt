<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class HomeController extends Controller
{
    public function home() {
        $listings = Listing::orderBy('date_posted', 'desc')->take(3)->get();
        return view('home', compact('listings'));
    }
}
