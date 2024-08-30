<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SangPham extends Controller
{
    public function __construct(){
        $danhmuc_arr = DB::table('DanhMuc')
            ->select('MaDM', 'TenDM')
            ->get();
        $data = ['danhmuc_arr' => $danhmuc_arr];
        view()->share($data);
    }

    function index(){
        $productHot = DB ::table('SanPham')
        ->join('thuongHieu', 'SanPham.MaTH', '=', 'thuongHieu.MaTH')
        ->select('SanPham.*', 'thuongHieu.tenTH')
        ->where('Hot', 1)
        ->inRandomOrder()
        ->limit(8)
        ->get();
        $iddanhmuc=DB ::table('SanPham');
        $productNew= DB ::table('SanPham')
        ->join('thuongHieu', 'SanPham.MaTH', '=', 'thuongHieu.MaTH')
        ->select('SanPham.*', 'thuongHieu.tenTH')
        ->orderBy('SanPham.MaSP', 'asc')
        ->limit(8)
        ->get();
    $data = ['productHot' => $productHot,'productNew'=>$productNew];
        return view('home', $data);
    }
    function sangphamdanhmuc($id = 0){
        $danhmuc = DB::table('DanhMuc')
            ->where('MaDM',$id)
            ->first();

        $sangpham = DB::table('SanPham')
            ->join('thuongHieu', 'SanPham.MaTH', '=', 'thuongHieu.MaTH')
            ->join('DanhMuc', 'SanPham.MaDM', '=', 'DanhMuc.MaDM')
            ->select('SanPham.*', 'thuongHieu.tenTH', 'DanhMuc.TenDM')
            ->where('SanPham.MaDM', $id)
            ->paginate(12);

        $data = ['danhmuc' => $danhmuc, 'sangpham' => $sangpham];
        return view('catalogDetails', $data);
    }
    function chitietsangpham($id=0){
        $sangpham= DB::table('SanPham')
        ->join('thuongHieu', 'SanPham.MaTH', '=', 'thuongHieu.MaTH')
        ->join('DanhMuc', 'SanPham.MaDM', '=', 'DanhMuc.MaDM')
        ->select('SanPham.*', 'thuongHieu.tenTH', 'DanhMuc.TenDM')
        ->where('SanPham.MaSP', $id)
        ->first();
        $sangphamCungthuonghieu = DB::table('SanPham')
        ->join('thuongHieu', 'SanPham.MaTH', '=', 'thuongHieu.MaTH')
        ->join('DanhMuc', 'SanPham.MaDM', '=', 'DanhMuc.MaDM')
        ->select('SanPham.*', 'thuongHieu.tenTH', 'DanhMuc.TenDM')
        ->where('thuongHieu.MaTH', $sangpham->MaTH)
        ->where('SanPham.MaSP', '!=', $id)
        ->inRandomOrder()
        ->limit(4)
        ->get();
        $data=['sangpham'=>$sangpham,'sangphamCungthuonghieu'=>$sangphamCungthuonghieu];
        return view('ProductDetail',$data);
    }
}
