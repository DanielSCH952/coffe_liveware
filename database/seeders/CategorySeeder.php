<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['categoria' => 'Café de Colombia', 'category_type_id' => 1],
            ['categoria' => 'Café de Etiopía', 'category_type_id' => 1],
            ['categoria' => 'Café de Brasil', 'category_type_id' => 1],
            ['categoria' => 'Café de Costa Rica', 'category_type_id' => 1],
            ['categoria' => 'Café de México', 'category_type_id' => 1],
            ['categoria' => 'Tueste Claro', 'category_type_id' => 2],
            ['categoria' => 'Tueste Medio', 'category_type_id' => 2],
            ['categoria' => 'Tueste Oscuro', 'category_type_id' => 2],
            ['categoria' => 'Café en Grano', 'category_type_id' => 3],
            ['categoria' => 'Café Molido', 'category_type_id' => 3],
            ['categoria' => 'Cápsulas de Café', 'category_type_id' => 3],
            ['categoria' => 'Café Instantáneo', 'category_type_id' => 3],
            ['categoria' => 'Arábica', 'category_type_id' => 4],
            ['categoria' => 'Robusta', 'category_type_id' => 4],
            ['categoria' => 'Mezcla de Arábica y Robusta', 'category_type_id' => 4],
            ['categoria' => 'Lavado', 'category_type_id' => 5],
            ['categoria' => 'Natural', 'category_type_id' => 5],
            ['categoria' => 'Honey', 'category_type_id' => 5],
            ['categoria' => 'Café Orgánico', 'category_type_id' => 6],
            ['categoria' => 'Café de comercio justo (Fair Trade)', 'category_type_id' => 6],
            ['categoria' => 'Café descafeinado', 'category_type_id' => 6],
            ['categoria' => 'Café gourmet', 'category_type_id' => 6],
            ['categoria' => 'Café Premium', 'category_type_id' => 6],
            ['categoria' => 'Espresso', 'category_type_id' => 7],
            ['categoria' => 'Café de filtro', 'category_type_id' => 7],
            ['categoria' => 'Cold Brew', 'category_type_id' => 7],
            ['categoria' => 'French Press', 'category_type_id' => 7],
            ['categoria' => 'AeroPress', 'category_type_id' => 7],
            ['categoria' => 'Bolsas de 250g', 'category_type_id' => 8],
            ['categoria' => 'Bolsas de 500g', 'category_type_id' => 8],
            ['categoria' => 'Bolsas de 1Kg', 'category_type_id' => 8],
            ['categoria' => 'Packs de degustación', 'category_type_id' => 8],
            ['categoria' => 'Molinillos de Café', 'category_type_id' => 9],
            ['categoria' => 'Cafeteras', 'category_type_id' => 9],
            ['categoria' => 'Tazas y Vasos', 'category_type_id' => 9],
            ['categoria' => 'Espumadores de leche', 'category_type_id' => 9],
        ];

        foreach ($categories as $category) {
            Category::create([
                'category' => $category['categoria'],
                'category_type_id' => $category['category_type_id'],
            ]);
        }
    }
}
