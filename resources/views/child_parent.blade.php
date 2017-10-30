@extends('layouts.index')
@section('title') {{$title}} @endsection
@section('content')
@include('main_navbar')
@include('main_welcome')
@include('main_pulsa')
@include('produk_popular')
@include('produk_fisik')
@include('produk_digital')
@endsection
