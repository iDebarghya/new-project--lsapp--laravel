<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function hello(){
        return view('pages.hello');
    }
    public function about(){
        return view('pages.about');
    }
    /*public function services(){
        $data = array(
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }*/
    public function services(){
        return view('pages.services');
    }
}
