<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\User;

class AdminController extends Controller
{
    public function home() {
        $listingCount = Listing::count();
        $userCount = User::count();
        return view('dashboard', compact('listingCount', 'userCount'));
    }
}
