<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SangPham extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hinh_arr = [
            'https://cdn.gumac.vn//image/01/onpage5/28/cach-phoi-mau-quan-ao-nu-dep091120191533581728.jpg',
            'https://btsneaker.vn/wp-content/uploads/2021/09/huong-dan-cach-phoi-hop-voi-nhung-bo-do-dep-cho-nu.jpg',
            'https://dongphuccati.com/upload_images/images/thang%208/do%20bo%20di%20choi/short%205.jpg',
            'https://cdn.pancake.vn/2/s900x1100/fwebp/2022/8/8/8ddbcfc601b5d23ddb2fc0f3aadbe462a5a2baf7.jpg',
            'https://chiaki.vn/upload/product/2022/01/set-bo-ao-quan-ni-sweater-smile-thu-dong-cho-nu-61d2976787a2d-03012022132751.jpg',
            'https://file.hstatic.net/1000388805/file/bo-quan-ao-vest-nam-dep-3_bf69c0b5891a4796938a194eb93aef36_grande.jpg',
            'https://file.hstatic.net/1000388805/file/bo-quan-ao-vest-nam-dep-2_0cd8f3e3213142c0bfed0a6cef46897c_grande.jpg',
            'https://file.hstatic.net/1000388805/file/bo-quan-ao-vest-nam-dep-5_c87acafdad4f4723a4c5e035f81a21a7_grande.jpg',
            'https://juanstailor.com.vn/uploaded/san-pham/Suit/suit-ghi-8.jpg',
            'https://salt.tikicdn.com/cache/w1200/ts/product/f5/09/03/1c0c75e8ec3deb233d45eb6a779e45e5.png',
        ];
        $hình_arr_aokhoac = [
            'https://www.armybox.vn/wp-content/uploads/2019/12/Ao-khoac-nam-3-lop-chong-tham-3-768x768.jpg',
            'https://aothudong.com/upload/product/atd-206/ao-khoac-gio-nam-dep-cao-cap.jpg',
            'https://th.bing.com/th/id/R.65707361376609a87a7d45f00eb2e9d6?rik=e8sZWASk5ta4TA&pid=ImgRaw&r=0'
        ];
        $hình_arr_vay = [
            'https://tonywedding.vn/wp-content/uploads/2022/09/307166648_2415509755269050_7258907053540192962_n.jpeg',
            'https://anhvienmimosa.com/wp-content/uploads/2020/12/vay-cuoi-cong-chua-28-1.jpg',
            'https://anhvienmimosa.com/wp-content/uploads/2020/12/vay-cuoi-cong-chua-28-1.jpg',
        ];
        $tenSPquanAo_arr = [
            "Áo sơ mi trắng", "Quần jeans xanh", "Áo thun đen", "Quần short kaki",
            "Áo len màu hồng", "Quần tây đen", "Áo polo trắc", "Quần jogger xám",
            "Áo sơ mi kẻ caro", "Quần jeans rách", "Áo thun in hình", "Quần short jean",
            "Áo len dệt kim", "Quần tây xanh navy", "Áo polo sọc", "Quần jogger thể thao",
            "Áo sơ mi denim", "Quần jeans ống đứng", "Áo thun cổ tròn", "Quần short thể thao",
            "Áo len cổ lọ", "Quần tây ống côn", "Áo polo màu pastel", "Quần jogger nỉ",
        ];

        $arr_vay = [
            "Váy dự tiệc", "Váy maxi", "Váy midi", "Váy mini",
            "Váy chữ A", "Váy suông", "Váy bodycon", "Váy xòe",
            "Váy ngắn", "Váy dài"
        ];


        $arr_ao_khoac = [
            "Áo khoác dạ", "Áo khoác da", "Áo khoác jeans", "Áo khoác kaki",
            "Áo khoác bomber", "Áo khoác blazer", "Áo khoác hoodie", "Áo khoác windbreaker",
            "Áo khoác parka", "Áo khoác trench coat"
        ];
        $arr_mo_ta = [
            "chất liệu cotton, kiểu dáng slim fit",
            "chất liệu denim, kiểu dáng ống đứng",
            "chất liệu cotton, in hình logo",
            "chất liệu kaki, màu be",
            "chất liệu len mềm mại, kiểu dáng dáng dài",
            "chất liệu vải tây, kiểu dáng ống côn",
            "chất liệu cotton, có logo thêu trên ngực",
            "chất liệu nỉ, kiểu dáng thoải mái",
            "chất liệu cotton, kiểu dáng regular fit",
            "chất liệu denim, kiểu dáng ống rộng",
            "chất liệu lụa, in hoa văn tinh tế",
            "chất liệu lanh, kiểu dáng casual",
            "chất liệu sợi tre, thân thiện với môi trường",
            "chất liệu da tổng hợp, kiểu dáng biker",
            "chất liệu len cashmere, cảm giác ấm áp",
            "chất liệu vải thun, co giãn tốt",
            "chất liệu polyester, chống thấm nước",
            "chất liệu satin, bóng mượt và sang trọng",
            "chất liệu len alpaca, cực kỳ mềm mại",
            "chất liệu ren, kiểu dáng nữ tính",
            "chất liệu vải dù, chịu lực tốt",
            "chất liệu viscose, thoáng mát và dễ chịu",
            "chất liệu modal, mềm mại như tơ",
            "chất liệu tencel, bền vững và thân thiện với da",
            "chất liệu nylon, nhẹ và bền",
            "chất liệu spandex, ôm sát cơ thể",
            "chất liệu cotton organic, an toàn cho da",
            "chất liệu len Merino, giữ nhiệt tốt",
            "chất liệu vải jersey, thoải mái khi mặc",
            "chất liệu lông cừu, cảm giác ấm áp",
            "chất liệu vải bố, bền và chắc chắn",
            "chất liệu vải lưới, thoáng khí và nhẹ",
            "chất liệu vải linen, mát mẻ và thoải mái",
            "chất liệu cotton pha poly, dễ chăm sóc",
            "chất liệu len lông thỏ, mềm mại và ấm áp",
            "chất liệu lông vũ, nhẹ và giữ nhiệt tốt",
            "chất liệu vải canvas, cứng cáp và bền",
            "chất liệu vải tweed, mang phong cách cổ điển",
            "chất liệu vải terry, thoải mái và hút ẩm tốt",
            "chất liệu vải twill, bền và chống nhăn",
            "chất liệu vải crepe, mềm mại và rũ",
            "chất liệu lông cừu Sherpa, cực kỳ ấm áp",
            "chất liệu vải chambray, nhẹ và thoáng mát",
            "chất liệu vải poplin, mỏng nhẹ và thoáng",
            "chất liệu vải taffeta, bóng mượt và sang trọng",
            "chất liệu vải bông hồng, mềm mại và dễ chịu",
            "chất liệu vải jacquard, hoa văn tinh tế",
            "chất liệu vải seersucker, mát mẻ và thoải mái",
            "chất liệu lông cừu lông xù, cực kỳ mềm mại và ấm áp",
            "chất liệu vải organdy, mỏng nhẹ và trong suốt"
        ];

        $total_vay = 100;
        $total_quanao = 700;
        $total_aokhoac = 100;
        $inserted_vay = 0;
        $inserted_quanao = 0;
        $inserted_aokhoac = 0;

        $total = $total_vay + $total_quanao + $total_aokhoac;

        for($i = 0; $i < $total; $i++){
            $type = mt_rand(1, 3);

            if ($type == 1 && $inserted_vay < $total_vay) {
                $gia = mt_rand(500, 10000) * 1000;
                $giaKM = mt_rand(100, 300) * 1000;
                DB::table('SanPham')->insert([
                    'TenSP' => Arr::random($arr_vay),
                    'Gia' => $gia,
                    'SoLuong' => mt_rand(1, 500),
                    'MoTa' => Arr::random($arr_mo_ta),
                    'GiaKM' => $giaKM,
                    'Anh' => Arr::random($hình_arr_vay),
                    'Hot' => mt_rand(0, 1),
                    'MaDM' => 7,
                    'MaTH' => mt_rand(1, 10)
                ]);
                $inserted_vay++;
            } elseif ($type == 2 && $inserted_quanao < $total_quanao) {
                $gia = mt_rand(500, 10000) * 1000;
                $giaKM = mt_rand(100, 300) * 1000;
                DB::table('SanPham')->insert([
                    'TenSP' => Arr::random($tenSPquanAo_arr),
                    'Gia' => $gia,
                    'SoLuong' => mt_rand(1, 500),
                    'MoTa' => Arr::random($arr_mo_ta),
                    'GiaKM' => $giaKM,
                    'Anh' => Arr::random($hinh_arr),
                    'Hot' => mt_rand(0, 1),
                    'MaDM' => mt_rand(1, 5),
                    'MaTH' => mt_rand(1, 10)
                ]);
                $inserted_quanao++;
            } elseif ($type == 3 && $inserted_aokhoac < $total_aokhoac) {
                $gia = mt_rand(500, 10000) * 1000;
                $giaKM = mt_rand(100, 300) * 1000;
                DB::table('SanPham')->insert([
                    'TenSP' => Arr::random($arr_ao_khoac),
                    'Gia' => $gia,
                    'SoLuong' => mt_rand(1, 500),
                    'MoTa' => Arr::random($arr_mo_ta),
                    'GiaKM' => $giaKM,
                    'Anh' => Arr::random($hình_arr_aokhoac),
                    'Hot' => mt_rand(0, 1),
                    'MaDM' => 6,
                    'MaTH' => mt_rand(1, 10)
                ]);
                $inserted_aokhoac++;
            } else {
                // Nếu loại sản phẩm đã đạt đủ số lượng, giảm chỉ số vòng lặp để thử lại
                $i--;
            }
        }

    }
}
