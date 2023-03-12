@extends('layouts.master')

@section('content')
<div class="container">
    <a class="btn btn-primary btn-tika" href="/create">Tambah Barang</a>
    <div class="col-12">
        <table class="table table-primary table-hover table-striped bg-tika">
            <tr>
                <td>Id Barang</td>
                <td>Nama Barang</td>
                <td>Deskripsi Barang</td>
                <td>Harga</td>
                <td>Aksi</td>
            </tr>
            @foreach($barang as $b)
            <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->NamaBarang}}</td>
                <td>{{$b->DeskripsiBarang}}</td>
                <td>{{$b->Harga}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/barang/{{$b->id}}/edit">Edit</a>
                        <form action="/barang/{{$b->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" name="" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
            </tr>
            @endforeach
        </table>
    </div>
</div>
