<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.pages.dashboard.index');
    }
    public function recharge()
    {
        return view('user.pages.recharge.index');
    }

    public function profile()
    {
        return view('user.pages.profile.index');
    }

}
