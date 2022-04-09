<?php

namespace App\Http\Controllers;

use  App\Models\Crud;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

class CrudController extends Controller
{
    function getCrud(){
        //
        $dataparameter['pesan'] = "Data Crud";
        $dataparameter['data'] = ['Model','controller','View'];

        return view("crud", $dataparameter);
    }

    function getViewCrud(){
        $dataparameter['list_data'] = Crud::all();

        return view("crud",$dataparameter);
    }
    
    function getAddCrud(){
        return view('addcrud');
    }

}