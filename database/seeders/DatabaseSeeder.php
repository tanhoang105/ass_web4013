<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $kh = [
            [
                'ma_kh' => 'ph17797',
                'ten_kh' => 'Hoàng Tân',
                'anh_kh' => 'anh.jpg',
                'email_kh' => 'hoangnhattan2k2@gmail.com',
                'sdt_kh' => '0868097361',
                'dia_chi_kh' => 'Hà Nội',
                'mo_ta_kh' => 'nam',
                'created_at' => date('Y-m-d H:i:s')

            ]
        ];

        $dat_ve = [
            [
                'ma_ve' => 'mv1',
                've_id' => 1,
                'kh_id' =>  1,
                'mo_ta_dat_ve' => 'vé cho người lớn',
                'created_at' => date('Y-m-d H:i:s')


            ]
        ];


        $chuyen_bay = [
            [
                'ma_cb' => 'cb1',
                'ngay_di' => date('Y-m-d h:i:s'),
                'sb_id' => 1,
                'gio_di' => date('Y-m-d h:i:s'),
                'gio_den' => date('Y-m-d h:i:s'),
                'mb_id' => 1,
                'mo_ta_cb' => 'đây là chuyến bay không lái',
                'created_at' => date('Y-m-d H:i:s')




            ]
        ];

        $san_bay = [
            [
                'ten_sb' => 'sân bay hà nội',
                'dia_chi_sb' => 'Hà Nội',
                'mo_ta_sb' => 'Đây là một trong những sân bay đón lượt khách nhiều nhất trong năm qua',
                'loai_sb' => 0,
                'created_at' => date('Y-m-d H:i:s')


            ]
        ];

        $may_bay = [
            [
                'so_hieu_mb' => 'MH370',
                'ma_loai_mb_id' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        $loai_mb  = [
            [
                'ma_loai_mb' => 'MLMB1',
                'ten_loai_mb' => 'vietnam Airline',
                'mo_ta_mb' => 'đây là một trong những loại máy bay tốt nhât của chúng tôi',
                'created_at' => date('Y-m-d H:i:s')


            ]
        ];

        $role = [
            [
                'ten_role' => 'user',
                'mo_ta_role' => 'role cho phép quyền truy cập của tài khoản',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        $silde = [
            [
                'ten_slide' => 'silde 1',
                'anh_slide' => 'anh-slide.jpg',
                'mo_ta_slide' => 'Chúng tôi luôn mong muốn mang lại những thứ tôt nhất cho khách hàng',
                'created_at' => date('Y-m-d H:i:s')

            ]
        ];

        $user = [
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@gmail.com',
                'password' => 123456,
                'role_id'  => 1,
                'created_at' => date('Y-m-d h:i:s'),
            ]
        ];

        $ve = [
            [
                'ma_ve' => 'V123' , 
                'cb_id' => 1 ,
                'gia_ve' => '12000000',
                'so_ghe' => 'G12',
                'khu_hoi' => 0,
                'loai_ve' => 'bình thường' , 
                'giam_gia' =>  '2000000',
                'mo_ta_ve' => 'vé đặt online - offline'
                
                
            ]
        ];


        // for ($i = 0; $i < 20; $i++) {
        //     $kh[] = [

        //         'ma_kh' => 'ph17797' . $i ,
        //         'ten_kh' => 'Hoàng Tân',
        //         'anh_kh' => 'anh.jpg',
        //         'email_kh' => 'hoangnhattan2k2@gmail.com',
        //         'sdt_kh' => '0868097361',
        //         'dia_chi_kh' => 'Hà Nội',
        //         'mo_ta_kh' => 'nam',
        //         'created_at' => date('Y-m-d H:i:s')


        //     ];

        //     $dat_ve[] = [

        //         'ma_ve' => 'mv1'  . $i,
        //         'kh_id' =>  1,
        //         'cb_id' => 1,
        //         'gia_ve' => 1200000,
        //         'so_ghe' => 'G123',
        //         'loai_ve' => 0,
        //         'giam_gia' =>  100000,
        //         'so_luong_ve' => 1,
        //         'mo_ta_ve' => 'vé cho người lớn',
        //         'khu_hoi' => 0,
        //         'created_at' => date('Y-m-d H:i:s')



        //     ];

        //     $chuyen_bay[] = [

        //         'ma_cb' => 'cb1'  . $i,
        //         'ngay_di' => date('Y-m-d h:i:s'),
        //         'sb_id' => 1,
        //         'gio_di' => date('Y-m-d h:i:s'),
        //         'gio_den' => date('Y-m-d h:i:s'),
        //         'mb_id' => 1,
        //         'mo_ta_cb' => 'đây là chuyến bay không lái',
        //         'created_at' => date('Y-m-d H:i:s')





        //     ];

        //     $san_bay[] = [

        //         'ten_sb' => 'sân bay hà nội'  . $i,
        //         'dia_chi_sb' => 'Hà Nội',
        //         'mo_ta_sb' => 'Đây là một trong những sân bay đón lượt khách nhiều nhất trong năm qua',
        //         'loai_sb' => 0,
        //         'created_at' => date('Y-m-d H:i:s')



        //     ];

        //     $may_bay[] = [

        //         'so_hieu_mb' => 'MH370'  . $i,
        //         'loai_mb_id' => 1,
        //         'created_at' => date('Y-m-d H:i:s')




        //     ];

        //     $loai_mb[] = [

        //         'ma_loai_mb' => 'MLMB1'  . $i,
        //         'ten_loai_mb' => 'vietnam Airline',
        //         'mo_ta_mb' => 'đây là một trong những loại máy bay tốt nhât của chúng tôi',
        //         'created_at' => date('Y-m-d H:i:s')



        //     ];

        //     $role[] = [

        //         'ten_role' => 'user'  ,
        //         'mo_ta_role' => 'role cho phép quyền truy cập của tài khoản',
        //         'created_at' => date('Y-m-d H:i:s')

        //     ];

        //     $silde[] = [

        //         'ten_slide' => 'silde 1'  . $i,
        //         'anh_slide' => 'anh-slide.jpg',
        //         'mo_ta_slide' => 'Chúng tôi luôn mong muốn mang lại những thứ tôt nhất cho khách hàng',
        //         'created_at' => date('Y-m-d H:i:s')


        //     ];


        //     // $user[] = [

        //     //     'name' => 'Nguyễn Văn A',
        //     //     'email' => 'nguyenvana'.$i.'@gmail.com' ,
        //     //     'password' => 123456,
        //     //     'role_id'  => 1,
        //     //     'created_at' => date('Y-m-d h:i:s'),

        //     // ];
        // }


        // DB::table('users')->insert($user);
        DB::table('slide')->insert($silde);
        DB::table('roles')->insert($role);
        DB::table('loai_mb')->insert($loai_mb);
        DB::table('san_bay')->insert($san_bay);
        DB::table('dat_ve')->insert($dat_ve);
        DB::table('chuyen_bay')->insert($chuyen_bay);
        DB::table('khach_hang')->insert($kh);
        DB::table('may_bay')->insert($may_bay);
        DB::table('ve')->insert($ve);
    }
}
