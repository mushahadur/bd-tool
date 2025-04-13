<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BkashController extends Controller
{
    public function index()
    {
        return view('user.pages.bkash.index');
    }

    public function nagadInfo()
    {
        return view('user.pages.bkash.nagad-info');
    }

    public function bkashStatment()
    {
        return view('user.pages.bkash.bkash-statement');
    }
    public function nagadStatment()
    {
        return view('user.pages.bkash.nagad-statement');
    }
}
