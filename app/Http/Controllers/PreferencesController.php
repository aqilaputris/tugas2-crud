<?php

namespace App\Http\Controllers;

use App\Models\Preferences;
use Illuminate\Http\Request;

class PreferencesController extends Controller
{
    public function preferences(){
        $data = Preferences::all();
        return view('task2.preferences', compact('data'));
    }

    public function preferencestambah(){
        return view('/task2/preferencestambah');
    }

    public function preferencesinsert(Request $request){
        Preferences::create($request->all());
        return redirect()->route('preferences')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function preferencestampil($id){

        $data = Preferences::find($id);
        return view('/task2/preferencestampil', compact('data'));
    }

    public function preferencesupdate(Request $request, $id){
        $data = Preferences::find($id);
        $data->update($request->all());

        return redirect()->route('preferences')->with('success', 'Data Berhasil Diupdate!');
    }

    public function preferencesdelete($id){
        $data = Preferences::find($id);
        $data->delete();
        return redirect()->route('preferences')->with('success', 'Data Berhasil Dihapus!');
    }
}
