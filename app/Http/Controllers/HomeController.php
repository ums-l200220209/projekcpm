<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use App\Models\BestSeller;
use App\Models\Client;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        $data = [
            'about' => About::first(),
            'service' => Service::limit(4)->get(),
            'bestseller' => BestSeller::limit(4)->get(),
            'client' => Client::get(),
            'banner' => Banner::get(),
            'content' => 'home/home/index'
        ];
        return view("home.layouts.wrapper", $data);
    }
}
