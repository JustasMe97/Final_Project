<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Sedanas',
                'slug' => 'sedanas',
                'description' => 'Kėbulo tipas - sedanas',
                'image' => '',
            ],
            [
                'name' => 'Hečbekas',
                'slug' => 'hečbekas',
                'description' => 'Kėbulo tipas - hečbekas',
                'image' => '',
            ],
            [
                'name' => 'Universalas',
                'slug' => 'universalas',
                'description' => 'Kėbulo tipas - universalas',
                'image' => '',
            ],
            [
                'name' => 'Visureigis',
                'slug' => 'visureigis',
                'description' => 'Kėbulo tipas - visureigis',
                'image' => '',
            ],
            [
                'name' => 'Kupė',
                'slug' => 'kupė',
                'description' => 'Kėbulo tipas - kupė',
                'image' => '',
            ],
            [
                'name' => 'Keleivinis mikroautobusas',
                'slug' => 'keleivinis-mikroautobusas',
                'description' => 'Kėbulo tipas - keleivinis mikroautobusas',
                'image' => '',
            ],
            [
                'name' => 'Krovininis mikroautobusas',
                'slug' => 'krovininis-mikroautobusas',
                'description' => 'Kėbulo tipas - krovininis mikroautobusas',
                'image' => '',
            ],
            [
                'name' => 'Kabrioletas',
                'slug' => 'kabrioletas',
                'description' => 'Kėbulo tipas - kabrioletas',
                'image' => '',
            ],
            [
                'name' => 'Pikapas',
                'slug' => 'pikapas',
                'description' => 'Kėbulo tipas - pikapas',
                'image' => '',
            ],
            [
                'name' => 'Kita',
                'slug' => 'kita',
                'description' => 'Kėbulo tipas - kita',
                'image' => '',
            ],
        ];

        foreach ($categories as $cat) {

            Category::updateOrCreate(
                [
                    'name' => $cat['name'],
                    'slug' => $cat['slug'],
                ],
                [
                    'description' => $cat['description'],
                    'image' => $cat['image'],
                    'parent_id' => null,
                ]
            );
        }
    }
}
