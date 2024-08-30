<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DanhMuc::class,
            SangPham::class,
        ]);
        DB::table('users')->insert([
            'name' => 'Vui Từng Phút Giây', 'email' => 'vuiqua@gmail.com',
            'password' => bcrypt('hehe'),
        ]);
    }
}
