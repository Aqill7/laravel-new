<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin / Test User
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin Outdoor',
                'password' => Hash::make('12345678'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
            ]
        );

        // Categories
        $catTenda = Category::firstOrCreate(
            ['slug' => 'tenda-dan-shelter'],
            ['name' => 'Tenda & Shelter', 'image' => 'https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=600']
        );

        $catCarrier = Category::firstOrCreate(
            ['slug' => 'carrier-dan-tas'],
            ['name' => 'Carrier & Tas', 'image' => 'https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?w=600']
        );

        $catSleeping = Category::firstOrCreate(
            ['slug' => 'sleeping-gear'],
            ['name' => 'Sleeping Gear', 'image' => 'https://images.unsplash.com/photo-1526772662000-3f88f10405ff?w=600']
        );

        $catCooking = Category::firstOrCreate(
            ['slug' => 'cooking-set-dan-alat-masak'],
            ['name' => 'Cooking Set', 'image' => 'https://images.unsplash.com/photo-1510312305653-8ed496efae75?w=600']
        );

        $catAccessory = Category::firstOrCreate(
            ['slug' => 'accessories-dan-penerangan'],
            ['name' => 'Accessories & Penerangan', 'image' => 'https://images.unsplash.com/photo-1517824806704-9040b037703b?w=600']
        );

        // Products
        $products = [
            [
                'category_id' => $catTenda->id,
                'name' => 'Tenda Dome 4 Orang (Great Outdoor)',
                'slug' => 'tenda-dome-4-orang-great-outdoor',
                'description' => 'Tenda camping kapasitas 4-5 orang, double layer, tahan air dan angin kencang.',
                'price_per_day' => 45000,
                'stock' => 10,
                'image' => 'https://images.unsplash.com/photo-1470246973918-29a93221c455?w=600',
            ],
            [
                'category_id' => $catTenda->id,
                'name' => 'Tenda Ultralight 2 Orang Eiger',
                'slug' => 'tenda-ultralight-2-orang-eiger',
                'description' => 'Tenda ringan khusus pendakian minimalis, mudah dipasang dan kokoh.',
                'price_per_day' => 35000,
                'stock' => 8,
                'image' => 'https://images.unsplash.com/photo-1510312305653-8ed496efae75?w=600',
            ],
            [
                'category_id' => $catCarrier->id,
                'name' => 'Carrier 60L Consina / Eiger',
                'slug' => 'carrier-60l-consina-eiger',
                'description' => 'Tas carrier kapasitas 60 liter dengan backsystem nyaman untuk pendakian 3-4 hari.',
                'price_per_day' => 30000,
                'stock' => 15,
                'image' => 'https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?w=600',
            ],
            [
                'category_id' => $catCarrier->id,
                'name' => 'Daypack 30L',
                'slug' => 'daypack-30l',
                'description' => 'Tas punggung harian cocok untuk summit attack atau jalan-jalan ringan.',
                'price_per_day' => 15000,
                'stock' => 12,
                'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600',
            ],
            [
                'category_id' => $catSleeping->id,
                'name' => 'Sleeping Bag Polar Bulu',
                'slug' => 'sleeping-bag-polar-bulu',
                'description' => 'Kantong tidur hangat bahan polar lembut, nyaman untuk suhu dingin pegunungan.',
                'price_per_day' => 15000,
                'stock' => 20,
                'image' => 'https://images.unsplash.com/photo-1526772662000-3f88f10405ff?w=600',
            ],
            [
                'category_id' => $catSleeping->id,
                'name' => 'Matras Sponge / Matras Anggrek',
                'slug' => 'matras-sponge-matras-anggrek',
                'description' => 'Alas tidur ringan penahan dingin tanah saat bermalam di dalam tenda.',
                'price_per_day' => 5000,
                'stock' => 30,
                'image' => 'https://images.unsplash.com/photo-1508873696983-2df5c920aac9?w=600',
            ],
            [
                'category_id' => $catCooking->id,
                'name' => 'Cooking Set Nesting TNI / Portable',
                'slug' => 'cooking-set-nesting-tni-portable',
                'description' => 'Set alat masak nesting isi panci dan wajan mini praktis untuk camping.',
                'price_per_day' => 15000,
                'stock' => 15,
                'image' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600',
            ],
            [
                'category_id' => $catCooking->id,
                'name' => 'Kompor Portable Kotak / Windproof',
                'slug' => 'kompor-portable-kotak-windproof',
                'description' => 'Kompor gas portable mini menggunakan tabung hicook, dilengkapi pemantik.',
                'price_per_day' => 15000,
                'stock' => 15,
                'image' => 'https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=600',
            ],
            [
                'category_id' => $catAccessory->id,
                'name' => 'Headlamp LED Waterproof',
                'slug' => 'headlamp-led-waterproof',
                'description' => 'Lampu senter kepala sorot terang dengan baterai tahan lama dan tahan air.',
                'price_per_day' => 10000,
                'stock' => 25,
                'image' => 'https://images.unsplash.com/photo-1517824806704-9040b037703b?w=600',
            ],
            [
                'category_id' => $catAccessory->id,
                'name' => 'Trekking Pole Antishock',
                'slug' => 'trekking-pole-antishock',
                'description' => 'Tongkat pendakian bantu stabilkan langkah saat naik dan turun gunung.',
                'price_per_day' => 10000,
                'stock' => 20,
                'image' => 'https://images.unsplash.com/photo-1551632811-561732d1e306?w=600',
            ],
        ];

        foreach ($products as $prod) {
            Product::firstOrCreate(
                ['slug' => $prod['slug']],
                $prod
            );
        }
    }
}
