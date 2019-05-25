@extends('layouts.master')
@section('title','List Kategori')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Option</th>
            </tr>
        </thead>
        @foreach ($barang as $barangs)
            <tbody>
                <tr>
                    <td>{!! $barangs->kd_brg !!}</td>
                    <td>{!! $barangs->nama_brg !!}</td>
                    <td>{!! $barangs->nama_kategori !!}</td>
                    <td>{!! $barangs->harga !!}</td>
                    <td>{!! $barangs->stok !!}</td>
                    <td class="d-flex">
                    <form action="{{route('kategori.destroy',$barangs->id)}}" method="POST">
                        {{csrf_field()}} {{method_field('DELETE')}}
                        <button class="btn btn-raised">Hapus</button>
                    </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
