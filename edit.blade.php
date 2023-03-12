@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Edit Data Barang</h2>
    <form action="/editing/{{$barang->id}}/" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <label for="exampleInputEmail1" class="form-label">Id Barang</label>
                    <input name="IdBarang" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$barang->id}}">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input name="NamaBarang" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$barang->NamaBarang}}">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi Barang</label>
                    <input name="DeskripsiBarang" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$barang->DeskripsiBarang}}">
                    <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                    <input name="Harga" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$barang->Harga}}">
                </div>
            </div>
            <input type="submit" name="submit" value="simpan" class="btn btn-primary mt-2 ">
    </form>
</div>
@endsection
