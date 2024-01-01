<?php

namespace Database\Seeders;

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
        DB::table('settings')->insert([
            'phone' => '+90 541 234 56 78',
            'email' => 'smtech@gmail.com',
            'address' => 'Şanlıurfa/Merkez',
            'mapcode' => 'https://www.google.com/maps/',
            'copyright' => 'Tüm hakları saklıdır. © 2023 SMT Yazılım ve Bilişim',
            'worktime' => 'Çalışma Saatleri 09.00-17.00',
            'facebook' => 'https://www.facebook.com',
            'instagram' => 'https://www.instagram.com',
            'twitter' => 'https://www.twitter.com',
        ]);

        DB::table('services')->insert([
            'title' => 'Hizmet başlık 1',
            'description' => 'Hizmet detayı açıklama 1'
        ]);
        DB::table('services')->insert([
            'title' => 'Hizmet başlık 2',
            'description' => 'Hizmet detayı açıklama 2'
        ]);
        DB::table('services')->insert([
            'title' => 'Hizmet başlık 3',
            'description' => 'Hizmet detayı açıklama 3'
        ]);
        DB::table('services')->insert([
            'title' => 'Hizmet başlık 4',
            'description' => 'Hizmet detayı açıklama 4'
        ]);
        DB::table('services')->insert([
            'title' => 'Hizmet başlık 5',
            'description' => 'Hizmet detayı açıklama 5'
        ]);

        DB::table('about')->insert([
           'title' => 'Hakkımızda',
           'description' => 'Hakkımızda detayı',
           'image' => 'about-image.jpg'
        ]);

        DB::table('slider')->insert([
            'title' => 'Slider title 1',
            'subtitle' => 'Slider subtitle 1',
            'description' => 'You are allowed to use this template for your company websites. You are NOT allowed to re-distribute this template ZIP file on any template download website. Please contact TemplateMo for more detail.',
            'image' => 'slide_01.jpg',
            'button_text' => 'Bize ulaş',
            'button_url' => 'contact'
         ]);

         DB::table('slider')->insert([
            'title' => 'Slider title 2',
            'subtitle' => 'Slider subtitle 2',
            'description' => 'You are allowed to use this template for your company websites. You are NOT allowed to re-distribute this template ZIP file on any template download website. Please contact TemplateMo for more detail.',
            'image' => 'slide_02.jpg',
            'button_text' => 'Hizmetlerimiz',
            'button_url' => 'services'
         ]);

         DB::table('slider')->insert([
            'title' => 'Slider title 3',
            'subtitle' => 'Slider subtitle 3',
            'description' => 'You are allowed to use this template for your company websites. You are NOT allowed to re-distribute this template ZIP file on any template download website. Please contact TemplateMo for more detail.',
            'image' => 'slide_03.jpg',
            'button_text' => 'Hakkımızda',
            'button_url' => 'about'
         ]);
    }
}
