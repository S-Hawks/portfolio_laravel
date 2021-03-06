<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;

class PagesController extends Controller
{
    public function index()
    {
        $main = Main::first();
        $services = Service::all();
        return view('pages.index', compact('main', 'services'));
    }

    public function dashboard()
    {
        return view('pages.dashboard');

    }

    public function main(){
        return view('pages.main');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
