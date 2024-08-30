@extends('layoutProductDetail')
@section('title', $sangpham->TenSP)

@section('chitietSP')
    @include('ProductDetail_product')
@endsection
@section('cungthuonghieu')
    @include('ProductDetail_cungthuonghieu')
@endsection
