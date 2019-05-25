@extends('layouts.master')
@section('title','List Kategori')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
                <th>Option</th>
            </tr>
        </thead>
        @foreach ($kat as $kats)
            <tbody>
                <tr>
                    <td>{!! $kats->kd_kategori !!}</td>
                    <td>{!! $kats->nama_kategori !!}</td>
                    <td class="d-flex">
                    <form action="{{route('kategori.destroy',$kats->id)}}" method="POST">
                        {{csrf_field()}} {{method_field('DELETE')}}
                        <button class="btn btn-raised">Hapus</button>
                    </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
