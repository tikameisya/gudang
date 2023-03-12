<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang(){
    	$barang = barang::all();
    	return view('barang.index',compact('barang'));
    }

    public function create(){
    	return view('barang.create');
    }

	public function creating(Request $request){
        barang::create($request->all());
        return redirect('/barang');
    }

    public function edit($id){
        $barang = barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    public function editing($id, Request $request){
        $barang = barang::find($id);
        $barang->update($request->all());
        return redirect('/barang');
    }

    public function delete($id){
        $barang = barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }

}
