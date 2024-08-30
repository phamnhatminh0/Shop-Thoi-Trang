<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('DanhMuc')->insert([
            ['TenDM'=>'Quần áo sơ mi'],
            ['TenDM'=>'Quần áo jeans'],
            ['TenDM'=>'quần Áo thun'],
            ['TenDM'=>'quần áo Áo len'],
            ['TenDM'=>'Quần áo tây'],
            ['TenDM'=>'Áo khoác'],
            ['TenDM'=>'váy'],                
        ]);
        DB::table('thuongHieu')->insert([
            ['tenTH'=>'Gucci'],
            ['tenTH'=>'Zara'],
            ['tenTH'=>'Uniqlo'],
            ['tenTH'=>'H&M'],
            ['tenTH'=>'Levi’s'],
            ['tenTH'=>'Adidas'],
            ['tenTH'=>'Nike'],
            ['tenTH'=>'Tommy Hilfiger'],                
            ['tenTH'=>'Calvin Klein'],                
            ['tenTH'=>'Ralph Lauren'],                
        ]);
    }
}
