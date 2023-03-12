@extends('layouts.master')

@section('content')
<div class="container">
    <h2 class="ya">Tambah Data Barang</h2>
    <form action="/creating" method="post">
        @csrf   
        <div class="col-lg-12">
            <label for="exampleInputEmail1" class="form-label">Id Barang</label>
                <input name="IdBarang" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Id Barang">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input name="NamaBarang" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Nama Barang">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi Barang</label>
                <input name="DeskripsiBarang" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Deskripsi Barang">
                    <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                <input name="Harga" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Harga">
        </div>
            <input type="submit" name="submit" value="simpan" class="butt">
        </div>
    </form>
</div>
