@extends('layout')
@section('title', 'trang chủ')

@section('SpHot')
    @include('home_productHot')
@endsection
@section('SpNew')
    @include('home_productNew')
@endsection
