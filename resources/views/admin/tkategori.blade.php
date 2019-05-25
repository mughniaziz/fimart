@extends('layouts.master')
@section('title','Add Categories')

@section('content')
    <form action="{{route('kategori.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <div class="col">
            <a href="{{route('showkat')}}" class="btn btn-raised btn-info">Lihat Kategori</a>
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <label for="Kode kategori" class="control-form-label">Kode kategori</label>
            </div>
            <div class="col">
                <input type="text" name="kd_kategori" id="kd_kategori" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <label for="Nama kategori" class="control-form-label">Nama kategori</label>
            </div>
            <div class="col">
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col">
                <button type="submit" class="btn btn-raised btn-primary">Tambah Kategori</button>
            </div>
        </div>
    </form>
@endsection
