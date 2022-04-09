<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){
        $data = Layout::all();
        return view('datalayout',compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Layout::create($request->all());
        return redirect()->route('tampilan')->with('success','Data CRUD berhasil ditambahkan');
    }

    public function tampilkandata($id){
        $data = Layout::find($id);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Layout::find($id);
        $data->update($request->all());
        return redirect()->route('tampilan')->with('success','Data CRUD berhasil diupdate');
    }

    public function delete($id){
        $data = Layout::find($id);
        $data->delete();
        return redirect()->route('tampilan')->with('success','Data CRUD berhasil dihapus');
    }
}
