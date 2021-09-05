<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class AdminController extends Controller
{
    public function home() {
        $listingCount = Listing::count();
        return view('dashboard', compact('listingCount'));
    }
}
