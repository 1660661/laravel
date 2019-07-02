<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BaiVietTableSeeder::class);
         $this->call(ChuyenMucTableSeeder::class);
         $this->call(ChuyenMucConTableSeeder::class);
         $this->call(TinhTrangTableSeeder::class);
         $this->call(LoaiTaiKhoanTableSeeder::class);
    }
}
class BaiVietTableSeeder extends Seeder {

    public function run()
    {
        for($i=0;$i<15;$i++)
        {
            DB::table('baiviets')->insert([
                'Anh'=>'\Public\\Images\\BongDa\\CupC1\\d7mlze0xyae9fum-660-1558607016-822-width660height441.jpg',
                'TieuDe'=>'Tottenham gây sốc đấu Liverpool Cúp C1: Người hùng hat-trick sắp phải dự bị',
                'Id_ChuyenMucCon'=>rand(1,24),
                'NgayDang'=>Carbon::now(),
                'Id_TinhTrang'=>'1',
                'NoiDungChiTiet'=>str_random(10),
                'NoiDungTomTat'=>str_random(10),                
                'NguoiDang'=>rand(0,5),
                'BiXoa'=>0
            ]);
        }
    }
}
class ChuyenMucTableSeeder extends Seeder {

    public function run()
    {        
        DB::table('chuyenmucs')->insert([
            ['TenChuyenMuc'=>'Bóng đá'],
            ['TenChuyenMuc'=>'Kinh doanh'],
            ['TenChuyenMuc'=>'Học đường'],
            ['TenChuyenMuc'=>'thế giới'],
            ['TenChuyenMuc'=>'Giải trí'],
            ['TenChuyenMuc'=>'Ẩm thực'],
        ]);        
    }
}
class ChuyenMucConTableSeeder extends Seeder {

    public function run()
    {        
        DB::table('chuyenmuccons')->insert([
            ['Id_ChuyenMuc'=>'1', 'TenChuyenMucCon'=>'Cup C1- Champions League'],
            ['Id_ChuyenMuc'=>'1', 'TenChuyenMucCon'=>'Bóng đá Việt Nam'],
            ['Id_ChuyenMuc'=>'1', 'TenChuyenMucCon'=>'Tin chuyển nhượng'],
            ['Id_ChuyenMuc'=>'1', 'TenChuyenMucCon'=>'Ngôi sao bóng đá'],
            ['Id_ChuyenMuc'=>'2', 'TenChuyenMucCon'=>'Khởi nghiệp'],
            ['Id_ChuyenMuc'=>'2', 'TenChuyenMucCon'=>'Doanh nhân'],
            ['Id_ChuyenMuc'=>'2', 'TenChuyenMucCon'=>'Tiền tiền tiền'],
            ['Id_ChuyenMuc'=>'2', 'TenChuyenMucCon'=>'Bất động sản'],
            ['Id_ChuyenMuc'=>'3', 'TenChuyenMucCon'=>'Tuyển sinh'],
            ['Id_ChuyenMuc'=>'3', 'TenChuyenMucCon'=>'Người Việt Trẻ'],
            ['Id_ChuyenMuc'=>'3', 'TenChuyenMucCon'=>'Du Học'],
            ['Id_ChuyenMuc'=>'3', 'TenChuyenMucCon'=>'BẢN TIN 46'],
            ['Id_ChuyenMuc'=>'4', 'TenChuyenMucCon'=>'Điểm nóng'],
            ['Id_ChuyenMuc'=>'4', 'TenChuyenMucCon'=>'Quân sự'],
            ['Id_ChuyenMuc'=>'4', 'TenChuyenMucCon'=>'Hồ sơ'],
            ['Id_ChuyenMuc'=>'4', 'TenChuyenMucCon'=>'Thế giới động vật'],
            ['Id_ChuyenMuc'=>'5', 'TenChuyenMucCon'=>'Phim'],
            ['Id_ChuyenMuc'=>'5', 'TenChuyenMucCon'=>'Ca nhạc-MTV'],
            ['Id_ChuyenMuc'=>'5', 'TenChuyenMucCon'=>'TV Show'],
            ['Id_ChuyenMuc'=>'5', 'TenChuyenMucCon'=>'Tin tức giải trí'],
            ['Id_ChuyenMuc'=>'6', 'TenChuyenMucCon'=>'Món ngon mỗi ngày'],
            ['Id_ChuyenMuc'=>'6', 'TenChuyenMucCon'=>'Món ngon mỗi ngày'],
            ['Id_ChuyenMuc'=>'6', 'TenChuyenMucCon'=>'Tin tức ẩm thực'],
            ['Id_ChuyenMuc'=>'6', 'TenChuyenMucCon'=>'Thực đơn hằng ngày']            
        ]);        
    }
}
class LoaiTaiKhoanTableSeeder extends Seeder {

    public function run()
    {        
        DB::table('loaitaikhoans')->insert([
            ['TenLoai'=>'Admin'],
            ['TenLoai'=>'Biên Tập Viên'],
            ['TenLoai'=>'Phóng Viên'],
            ['TenLoai'=>'Đọc Giả']
            ]);        
    }
}
class TinhTrangTableSeeder extends Seeder {

    public function run()
    {        
        DB::table('tinhtrangs')->insert([
            ['TinhTrang'=>'Đã Xuất Bản'],
            ['TinhTrang'=>'Đã duyệt và chờ xuất bản'],
            ['TinhTrang'=>'Bị từ chối'],
            ['TinhTrang'=>'Đợi duyệt']                    
        ]);        
    }
}