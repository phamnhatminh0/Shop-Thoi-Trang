<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('DanhMuc', function (Blueprint $table) {
            $table->increments('MaDM'); // Sử dụng increments để tạo khóa chính tự động tăng
            $table->string('TenDM', 100);
            $table->timestamps();
        });

        Schema::create('thuongHieu', function (Blueprint $table) {
            $table->increments('MaTH'); // Sử dụng increments để tạo khóa chính tự động tăng
            $table->string('tenTH', 100);
            $table->timestamps();
        });

        Schema::create('SanPham', function (Blueprint $table) {
            $table->increments('MaSP');
            $table->string('TenSP', 255);
            $table->integer('Gia')->default(0);
            $table->integer('SoLuong');
            $table->text('MoTa')->nullable();
            $table->integer('GiaKM',)->nullable();
            $table->string('Anh')->nullable();
            $table->timestamp('NgayNhapHang')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('Hot')->default(0);
            $table->unsignedInteger('MaDM'); // Đảm bảo là unsignedInteger
            $table->unsignedInteger('MaTH'); // Đảm bảo là unsignedInteger
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('MaDM')->references('MaDM')->on('DanhMuc')->onDelete('cascade');
            $table->foreign('MaTH')->references('MaTH')->on('thuongHieu')->onDelete('cascade');
        });
        Schema::create('DonHang', function (Blueprint $table) {
            $table->integer('MaDH')->primary();
            $table->integer('MaSP')->unsigned();
            $table->integer('SoLuong');
            $table->timestamp('NgayMua')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();

            // Thêm cột MaUser
            $table->unsignedBigInteger('MaUser');

            // Thiết lập khóa ngoại
            $table->foreign('MaSP')->references('MaSP')->on('SanPham');
            $table->foreign('MaUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SanPham');
        Schema::dropIfExists('DanhMuc');
        Schema::dropIfExists('thuongHieu');
        Schema::dropIfExists('DonHang');
    }
};
