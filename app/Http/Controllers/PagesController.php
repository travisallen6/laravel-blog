<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      $title = 'Laravel is Awesome';
      // return view('pages.index', compact('title'));
      return view('pages.index')->with('title', $title);
    }

    public function about() {
      $title = 'About this App';
      return view('pages.about')->with('title', $title);
    }

    public function services() {
      $data = array(
        'title' => 'Services',
        'subtitle' => 'Stuff We Do',
        'services' => ['Web Development', 'Debugging', 'Consultation']
      );
      return view('pages.services')->with($data);
    }
}
