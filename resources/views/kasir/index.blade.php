@extends('layouts.master')
@section('title','Kasir Pages')

@section('content')
    <h2>Hallo {!! Auth::user()->name !!}
@endsection
