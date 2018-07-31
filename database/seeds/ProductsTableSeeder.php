<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Nhẫn kim cương',
                'price' => 12000000,
                'image' => 'https://res.cloudinary.com/glamira/image/upload/c_limit,c_fill,dpr_1.0,f_auto,fl_lossy,q_auto/media/product/set55/g100235-n/white_diamond_1.jpg',
                'description' => 'Nhẫn kim cương GLAMIRA ara ',
                'categoryId' => 1
            ],
            [
                'id' => 2,
                'name' => 'Nhẫn đá quý',
                'price' => 32000000,
                'image' => 'http://hoidap.vinhphucnet.vn/qt/hoidap/PublishingImages/50045AMda-quy.jpg',
                'description' => 'Nhẫn đá CZ ',
                'categoryId' => 1
            ],
            [
                'id' => 3,
                'name' => 'Nhẫn vàng',
                'price' => 8000000,
                'image' => 'http://htj.com.vn/images/2015/08/06/07%20v.jpg',
                'description' => 'Nhẫn vàng cao cấp ',
                'categoryId' => 1
            ],
            [
                'id' => 4,
                'name' => 'Nhẫn bạc',
                'price' => 4500000,
                'image' => 'http://htj.com.vn/images/2015/08/06/270.jpg',
                'description' => 'Nhẫn bạc ara ',
                'categoryId' => 1
            ],
            [
                'id' => 5,
                'name' => 'Mặt dây kim cương',
                'price' => 3000000,
                'image' => 'https://www.pnj.com.vn/images/detailed/35/mat-day-chuyen-kim-cuong-pnj-vang-trang-14k-70172_7x9e-i8_19v5-sq_eop9-7m_74ih-qr_uzat-b8_pups-5b_vovy-ff_7022-8s.jpg',
                'description' => 'Mặt kim cương PNJ vanng trắng ',
                'categoryId' => 2
            ],
            [
                'id' => 6,
                'name' => 'Mặt dây đá quý',
                'price' => 3000000,
                'image' => 'https://daquyvietnam.info/wp-content/uploads/2017/08/M%E1%BA%B7t-d%C3%A2y-chuy%E1%BB%81n-Ph%E1%BA%ADt-A-Di-%C4%90%C3%A0-%C4%91%C3%A1-c%E1%BA%A9m-th%E1%BA%A1ch.jpg',
                'description' => 'Mặt dây phật đá cẩm thạch ',
                'categoryId' => 2
            ],
            [
                'id' => 7,
                'name' => 'Mặt dây vàng',
                'price' => 3000000,
                'image' => 'http://trangsuclopa.com/uploads/products/mat-day-vang-nu/MD-G.jpg',
                'description' => 'Mặt dây vang cho nữ ',
                'categoryId' => 2
            ],
            [
                'id' => 8,
                'name' => 'Mặt dây bạc',
                'price' => 3000000,
                'image' => 'https://www.pnj.com.vn/images/detailed/34/smd2kn06437.400-mat-day-chuyen-bac-pnjsilver-dinh-da-mau-xanh.jpg',
                'description' => 'Mặt bạc đính đá ',
                'categoryId' => 2
            ],
            [
                'id' => 9,
                'name' => 'Bông tai kim cương',
                'price' => 33000000,
                'image' => 'http://www.nhannu.vn/Resources/Products/257/bong-tai-nu-da-kim-cuong-nhan-tao-bong002-6894-5445342-e4a0f5086e99451b709b8b4af27773d9zoom.jpg',
                'description' => 'Bông lim cương ara ',
                'categoryId' => 3
            ],
            [
                'id' => 10,
                'name' => 'Bông tai đá quý',
                'price' => 55000000,
                'image' => 'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/700x817/7b8fef0172c2eb72dd8fd366c999954c/4/_/bong_tai_nu_pha_le_swarovski_tu_usa_505d.jpg',
                'description' => 'Bông lim dá ruby ',
                'categoryId' => 3
            ],
            [
                'id' => 11,
                'name' => 'Bông tai vàng',
                'price' => 13000000,
                'image' => 'https://bizweb.dktcdn.net/100/224/858/products/4-be280993-3134-4646-b8f4-7766337d5445.jpg?v=1498894526790',
                'description' => 'Bông lim mạ vàng cao cấp  ',
                'categoryId' => 3
            ],
            [
                'id' => 12,
                'name' => 'Bông tai bạc',
                'price' => 7000000,
                'image' => 'http://img1.baza.vn/upload/products-var-T6b9Sua4/6ai8rTfUlarge.jpg?v=635526933919196138',
                'description' => 'Bông lim bạc CCS ',
                'categoryId' => 3
            ],
            [
                'id' => 13,
                'name' => 'Dây chuyền kim cương',
                'price' => 70000000,
                'image' => 'http://media.tinmoi.vn/2011/01/28/16_14_1296196822_21_ds25011132.jpg',
                'description' => 'Dây kim cương CRR ',
                'categoryId' => 4
            ],
            [
                'id' => 14,
                'name' => 'Dây chuyền đá quý',
                'price' => 170000000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9IMoVMx2jkkP7cfmxz5-K5elX-IP3JF8RanHr11m_ZomN6nGg',
                'description' => 'Dây đá ruby ',
                'categoryId' => 4
            ],
            [
                'id' => 15,
                'name' => 'Dây chuyền vàng',
                'price' => 12000000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSenrLGZmD-jXjZEMT_xV1CWHMB95XiIKYPwqH6h6Rf6mZKDfi7',
                'description' => 'Dây kim cương CRR ',
                'categoryId' => 4
            ],
            [
                'id' => 16,
                'name' => 'Dây chuyền bạc',
                'price' => 7000000,
                'image' => 'https://www.miraclediamond.vn/uploaded/images/products/mat-day-chuyen-kim-cuong-hoa-kim-cuong.jpg',
                'description' => 'Dây kim cương CRR ',
                'categoryId' => 4
            ],
            [
                'id' => 17,
                'name' => 'Lắc tay kim cương',
                'price' => 57000000,
                'image' => 'http://thegioikimcuong.vn/Files/news/445x325_2.jpg',
                'description' => 'Lắc tay chất lượng cao',
                'categoryId' => 5
            ],
            [
                'id' => 18,
                'name' => 'Lắc tay đá quý',
                'price' => 170000000,
                'image' => 'http://trangsuc.doji.vn/Uploads/Mediums/2015/8/20/201508201537246650_lac-tay-0415G2318NA0013.png',
                'description' => 'Lắc tay đá ruby ',
                'categoryId' => 5
            ],
            [
                'id' => 19,
                'name' => 'Lắc tay vàng',
                'price' => 12000000,
                'image' => 'https://ae01.alicdn.com/kf/HTB13yRpIXXXXXcsXVXXq6xXFXXXQ/Thi-t-K-LOGO-th-ng-hi-u-V-ng-Tay-L-c-Tay-SONA-Kim.jpg_640x640.jpg',
                'description' => 'Lắc tay vàng SAS ',
                'categoryId' => 5
            ],
            [
                'id' => 20,
                'name' => 'Lắc tay bạc',
                'price' => 7000000,
                'image' => 'http://diamond.phuquy.com.vn/sites/default/files/styles/detail_primary/public/product/vong_tay_kim_cuong.jpg?itok=IW27ZeVV',
                'description' => 'Lắc tay bạc cao cấp ',
                'categoryId' => 5
            ]
        ]);
    }
}
