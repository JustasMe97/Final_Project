<?php

namespace Database\Seeders;

use App\Models\FuelType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelTypesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fuelTypes = [
            [
                'name' => 'Dyzelinas',
            ],
            [
                'name' => 'Benzinas',
            ],
            [
                'name' => 'Benzinas / dujos',
            ],
            [
                'name' => 'Benzinas / elektra',
            ],
            [
                'name' => 'Elektra',
            ],
            [
                'name' => 'Dyzelinas / elektra',
            ],
            [
                'name' => 'Bioetanolis (E85)',
            ],
            [
                'name' => 'Benzinas / elektra / dujos',
            ],
            [
                'name' => 'Kita',
            ],
        ];

        foreach ($fuelTypes as $fT) {
            FuelType::create(
                [
                    'name' => $fT['name'],
                ]
            );
        }
    }
}
