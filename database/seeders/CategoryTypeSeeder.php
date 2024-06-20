<?php

namespace Database\Seeders;

use App\Models\CategoryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Origen del Café',
            'Tipo Tueste',
            'Método de Preparación',
            'Variedad de Café',
            'Tipo de Procesamiento',
            'Especialidades',
            'Usos Específicos',
            'Empaques y Presentaciones',
            'Artículos Relacionados',
        ];

        foreach ($types as $type) {
            CategoryType::create([
                'type' => $type,
            ]);
        }
    }
}
