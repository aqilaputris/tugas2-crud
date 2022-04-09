<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function portofolio(){

        $data = Portofolio::all();
        return view('task2.portofolio',compact('data'));
    }

    public function portofoliotambah(){
        return view('task2.portofoliotambah');
    }

    public function portofolioinsert(Request $request){
       
        Portofolio::create($request->all());
        return redirect()->route('portofolio')->with('success','Data Berhasil Ditambahkan!');
    }

    public function portofoliotampil($id){
        $data = Portofolio::find($id);
        return view('/task2/portofoliotampil',compact('data'));
    }

    public function portofolioupdate(Request $request, $id){
         $data = Portofolio::find($id);
         $data->update($request->all());
         return redirect()->route('portofolio')->with('success','Data Berhasil Diupdate!');
    }

    public function portofoliodelete($id){
        $data = Portofolio::find($id);
        $data->delete();
        return redirect()->route('portofolio')->with('success','Data Berhasil Dihapus!');
    }
}
