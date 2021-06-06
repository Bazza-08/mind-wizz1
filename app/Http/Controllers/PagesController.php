<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Create a function called the method

    public function index() {
        $title = 'Welcome To Mind-Wizz!';
        return view('pages/index', compact('title'));
        // return view('pages.index')->with('title', $title);
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
