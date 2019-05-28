@extends('layouts.master')
@section('title','Jual Pages')

@section('content')
<form action="{{route('cart.store')}}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="no_faktur" class="control-form-label">No. Faktur</label>
                    <input type="text" name="no_faktur" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="qty" class="control-form-label">Qty</label>
                    <input type="number" name="qty" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Opsi</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td><div class="form-group col-md-6">
                        <select class="form-control" name="kd_brg">
                            <option selected>Kode Barang</option>
                            @foreach ($barang as $barangs)
                            <option value="{!! $barangs->kd_brg !!}">{!! $barangs->kd_brg !!}</option>
                            @endforeach
                        </select>
                    </div></td>
                    <td><div class="form-group col-md-6">
                        @if ($barangs->kd_brg == 8993539106003)
                            $barangs->nama_brg = 'Ron 88'
                            $barangs->harga = 2500;
                        @endif
                        <input type="text" name="nama_brg" value="{!!$barqangs->nama_brg!!}"
                    </div></td>
                    <td></td>
                    <td class="d-flex">
                        <button type="submit">Add To Cart</button>
                    </td>
                </tr>
            </tbody>
    </table>
</form>
@endsection
