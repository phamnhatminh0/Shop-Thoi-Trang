@extends('layoutCatalogDetails')
@section('title', $danhmuc->TenDM)
@section('SangPham')
    @include('catalogDetails_product')
@endsection
