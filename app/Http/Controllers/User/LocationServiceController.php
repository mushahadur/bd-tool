<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationServiceController extends Controller
{
    public function numberToLocationHistory()
    {
        return view('user.pages.location-service.number-to-location-history');
    }
    public function numberToLocation()
    {
        return view('user.pages.location-service.number-to-location');
    }
    public function fbToLocation()
    {
        return view('user.pages.location-service.fb-to-location');
    }
    public function fbIdRecover()
    {
        return view('user.pages.location-service.fb-id-recover');
    }

    public function imeiToLocation()
    {
        return view('user.pages.location-service.imei-to-location');
    }


}
