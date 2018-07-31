<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Nhẫn',
                'description'=>'Nhẫn đa dạng mẫu mã, chất lượng',
                'images'=>'https://media3.scdn.vn/img2/2017/11_5/OnkpXk_simg_b5529c_250x250_maxb.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Mặt dây chuyền',
                'description'=>'Mặt dây chuyền đa dạng mẫu mã, chất lượng',
                'images'=>'https://www.pnj.com.vn/images/detailed/35/gmdrwa72548.500-mat-day-chuyen-kim-cuong-pnj-vang-trang-14k_ui43-23.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Bông tai',
                'description'=>'Bông tai đa dạng mẫu mã, chất lượng',
                'images'=>'https://image2.tin247.com/pictures/2013/12/08/bfj1386463171.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Dây chuyền',
                'description'=>'Dây chuyền đa dạng mẫu mã, chất lượng',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSenrLGZmD-jXjZEMT_xV1CWHMB95XiIKYPwqH6h6Rf6mZKDfi7'
            ],
            [
                'id'=>5,
                'name'=>'Lắc và vòng tay',
                'description'=>'Lắc và vòng tay đa dạng mẫu mã, chất lượng',
                'images'=>'http://i.a4vn.com/2016/12/12/lac-tay-nu-phoi-phu-kien-sang-trong-sid53134-4d7b4e.jpg'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
