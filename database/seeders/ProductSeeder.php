<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'VIVO Y22',
                'price' => '15000',
                'description' => 'Awesome Phone with Led Panel, 4G , 4GB Ram , 64 GB Storage, 50MP Camera',
                'category' => 'Mobile',
                'gallery' => 'https://5.imimg.com/data5/SELLER/Default/2023/7/322696313/YT/LA/KI/188924882/vivo-mobile-phone-500x500.jpg'
            ],
            [
                'name' => 'One Plus 9',
                'price' => '50000',
                'description' => 'Phone with 128GB Storage, 8GB Ram, 108 MP Camera, Dolby Atmos Speakers',
                'category' => 'Mobile',
                'gallery' => 'https://5.imimg.com/data5/SELLER/Default/2021/4/XM/RR/NM/122175801/oneplus9-1-500x500.jpg'
            ],

            [
                'name' => 'LG Double Door',
                'price' => '100000',
                'description' => 'Smart Refrigerator with 5 star energy saving, smart convertable, Wi-Fi enabled',
                'category' => 'Refrigerator',
                'gallery' => 'https://www.lg.com/in/images/refrigerators/md07547068/gallery/GL-T422VPZX-Refrigerators-Back-View-D01.jpg'
            ],

            [
                'name' => 'SAMSUNG OLED',
                'price' => '150000',
                'description' => 'An Innovative OLED Panel with HDR10+, Dolby Vision, Dolby Atmos, Quantum Processor',
                'category' => 'TV',
                'gallery' => 'https://images.samsung.com/is/image/samsung/assets/us/tvs/oled-tvs/02032023/01-KV-video-thumbnail-M.jpg?$720_N_JPG$'
            ],

            [
                'name' => 'IPhone 15',
                'price' => '150000',
                'description' => 'You Know what is it',
                'category' => 'Mobile',
                'gallery' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-card-40-iphone15prohero-202309_FMT_WHH?wid=508&hei=472&fmt=p-jpg&qlt=95&.v=1693086369818'
            ],



        ]);
    }
}
