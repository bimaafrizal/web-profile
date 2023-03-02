<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DetailAbout;
use App\Models\LandingPage;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $page = LandingPage::where('id', 1)->first();
        $details = DetailAbout::all();
        $services = Service::all();
        $clients = Client::all();
        return view('pages.landing-page.index', compact('page', 'details', 'services', 'clients'));
    }
}