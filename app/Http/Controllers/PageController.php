<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\TeamMember;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::orderBy('sort_order')->get();

        return view('pages.home', compact('services'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function whatWeDo()
    {
        return view('pages.what-we-do');
    }

    public function visionMission()
    {
        return view('pages.vision-mission');
    }

    public function directors()
    {
        $people = TeamMember::where('group', 'board')->orderBy('sort_order')->get();

        return view('pages.directors', compact('people'));
    }

    public function management()
    {
        $people = TeamMember::where('group', 'management')->orderBy('sort_order')->get();

        return view('pages.management', compact('people'));
    }

    public function proposal()
    {
        $services = Service::orderBy('sort_order')->get();

        return view('pages.proposal', compact('services'));
    }

    public function claims()
    {
        return view('pages.claims');
    }
}
