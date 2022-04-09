<?php

namespace App\Http\Controllers;

use App\Models\Buku;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

class BukuController extends Controller
{
    function getTampilBuku(){
        //
        $dataParameter['pesan'] = "halo selamat pagi!";
        $dataParameter['data'] = ['Model','Controller','View'];
        return view("tampil_buku",$dataParameter);
    }
    function getViewBuku(){
        $dataParameter['list_data'] = Buku::all();
        return view("buku",$dataParameter);
    }

    function getAddBuku(){
        return view('add_buku');
    }

    function postAddBuku(){
        $judul = Request::get('judul');
        $keterangan = Request::get('keterangan');

         $buku = new Buku;
         $buku->judul = $judul;
         $buku->keterangan = $keterangan;
         $buku->save();
       
         return redirect('buku');
    }

    function getViewEdit($id){

    }
}
