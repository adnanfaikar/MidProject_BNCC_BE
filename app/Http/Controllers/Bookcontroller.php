<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Book;

class Bookcontroller extends Controller{
    public function create(){
        return view('CRUD.create');
    }
    public function showForm(BookRequest $request){
        Book::create([
            'nama' => $request->nama,
            'penulis'=>$request->penulis,
            'halaman'=>$request->halaman,
            'tahun_terbit'=>$request->tahun_terbit,
        ]);
        return redirect(route('home'));
    }

    public function Viewall(){
        $books= Book::all();
        return view('CRUD.view', ['datas' =>$books]);
        // return view('CRUD.view)->withBooks($books);
    }

    public function UpdateForm($id){
        $books = Book::find($id);
        return view('CRUD.update',['buku'=>$books]);
    }
    public function ShowUpdateForm(BookRequest $request, $id){
        $BookUpdate = Book::where('id','=',$id)->first();

        $BookUpdate->update([
            'nama' => $request->nama,
            'penulis'=>$request->penulis,
            'halaman'=>$request->halaman,
            'tahun_terbit'=>$request->tahun_terbit,
        ]);
        return redirect(route('home'));
    }

    public function DeleteBuku($id){
        $BookDelete = Book::find($id);
        $BookDelete -> delete();
        return redirect(route('Viewall'))->with('success','Buku Berhasil Dihapus');
    }
}