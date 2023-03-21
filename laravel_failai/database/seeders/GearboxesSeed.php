<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gearbox;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GearboxesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gearboxes = [
            [
                'name' => 'Automatinė',
            ],
            [
                'name' => 'Mechaninė',
            ],
        ];

        foreach ($gearboxes as $grbx) {
            Gearbox::create(
                [
                    'name' => $grbx['name'],
                ]
            );
        }
    }
}
