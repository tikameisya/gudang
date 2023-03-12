<?php

namespace App\Http\Controllers;

use App\Models\barang;      
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::all();
        return['barang' => $barang,
    ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = barang::create([
            'NamaBarang' => $request->NamaBarang,
            'DeskripsiBarang' => $request->DeskripsiBarang,
            'Harga' => $request->Harga,
        ]);
        return response()->json([
            'barang' => $barang
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        return response()->json([
            'barang' => $barang
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $data,$id)
    {
        $data = barang::find($id);
        $data->update($request->all());
        return response()->json([
            'barang' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Costumer  $costumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang,$id)
    {
        $barang = barang::find($id);
        $barang->delete();
        return response()->json([
            'message' => 'data dihapus'
        ]);
    }
}
