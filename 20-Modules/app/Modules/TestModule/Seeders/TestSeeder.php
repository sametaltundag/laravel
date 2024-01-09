<?php
// php artisan db:seed --class=App\Modules\TestModule\Seeders\TestSeeder

namespace App\Modules\TestModule\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Model eklenmesi
use App\Modules\TestModule\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'product name 1',
                'description' => 'product description 1'
            ],
            [
                'name' => 'product name 2',
                'description' => 'product description 2'
            ],
            [
                'name' => 'product name 3',
                'description' => 'product description 3'
            ]

        ];

        foreach ($data as $item) {
            Test::create($item);
        }
    }
}
