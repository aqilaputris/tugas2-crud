<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){

        $data = Contact::all();
        return view('task2.contact',compact('data'));
    }

    public function contacttambah(){
        return view('/task2/contacttambah');
    }

    public function contactinsert(Request $request){
        Contact::create($request->all());
        return redirect()->route('contact')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function contacttampil($id){
        $data = Contact::find($id);
        return view('task2.contacttampil',compact('data'));
    }

    public function contactupdate(Request $request, $id){
        $data = Contact::find($id);
        $data->update($request->all());
        return redirect()->route('contact')->with('success', 'Data Berhasil Diupdate!');
    }

    public function contactdelete($id){
        $data = Contact::find($id);
        $data->delete();
        return redirect()->route('contact')->with('success', 'Data Berhasil Dihapus!');

    }

}
