@extends('layouts.master')
@section('title','Tambah Data Barang')

@section('content')
<form action="{{route('barang.store')}}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col">
            <a href="{{route('showbrg')}}" class="btn btn-raised btn-info">Lihat Data Barang</a>
        </div>
    </div>
    <div class="form-group">
        <div class="col">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="kd_brg" class="control-form-label">Kode Barang</label>
                    <input type="text" name="kd_brg" id="kd_brg" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="nama barang" class="control-form-label">Nama Barang</label>
                    <input type="text" name="nama_brg" id="nama_brg" class="form-control">
                </div>
                <div class="form-group col-md-1">
                    <label for="stok" class="control-form-label">Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="Kategori" class="control-form-label">Kategori</label>
                        <select class="form-control" name="kategori">
                            <option selected>Kategori</option>
                            @foreach ($dkat as $kats)
                            <option value="{!! $kats->nama_kategori !!}">{!! $kats->nama_kategori !!}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="harga" class="control-form-label">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col">
                    <button class="btn btn-raised btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
@endsection
