<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function index()
    {
        return view('index', [
            'title_to_hero' => 'Curated, high quality style inspiration.',
            'text_to_hero' => 'New looks every week.',
            'link_to_hero' => '/explore',
            'label_to_hero' => 'Explore now',
            'img' => 'img/homepage.png'
        ]);
    }

    function about()
    {
        return view('about', [
            'title' => 'About',
            'title_to_hero' => 'Curated, high quality style inspiration.',
            'subtitle_to_hero' => 'New looks every week.',
            'link_to_hero' => '/explore',
            'label_to_hero' => 'Explore now'
        ]);
    }

    function explore()
    {
        return view('explore', [
            'title' => 'Explore',
            'title_to_hero' => 'Curated, high quality style inspiration.',
            'subtitle_to_hero' => 'New looks every week.',
            'link_to_hero' => '/explore',
            'label_to_hero' => 'Explore now'
        ]);
    }
}
