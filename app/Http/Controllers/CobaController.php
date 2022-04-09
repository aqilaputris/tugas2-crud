<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preferences;
use App\Models\Portofolio;
use App\Models\Contact;


class CobaController extends Controller
{
    // public function getIndex()
    // {
    //     dd(Preferences::finBy('name', 'banner_title'));
    //     return view('public.asset.index', [
    //         "portofolio" => Prefrences::all(),
    //         "banner_title" => Preferences::findBy('name', 'banner_title')
    //     ]);
    // }

    public function index(){

        return view('task2.template.coba', [
            "portofolio1" => Preferences::all(),
            "banner_image" => Preferences::findBy('name', 'banner_image'),
            "portofolio2" => Preferences::all(),
            "banner_title" => Preferences::findBy('name', 'banner_title'),
            "portofolio3" => Preferences::all(),
            "banner_text" => Preferences::findBy('name', 'banner_text'),
            // "portofolio4" => Preferences::all(),
            // "about_" => Preferences::findBy('name', 'banner_title'),
            // "portofolio2" => Preferences::all(),
            // "banner_title" => Preferences::findBy('name', 'banner_title'),
            "about" => Portofolio::all(),
            "image" => Portofolio::findBy('desc', 'image'),
            "contact" => Contact::all(),
            "name" => Contact::findBy('name', 'email', 'phone', 'massage'),
          
            // "portofolio" => Preferences::all(),
            // "banner_title" => Preferences::findBy('name', 'banner_title'),
            // "contact" => Contact::all(),
            // "name" => Contact::findBy('name')
        ]);
    }
}
