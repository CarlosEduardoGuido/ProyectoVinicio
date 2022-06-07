<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Cepillo Interdental',
            'slug' => 'Oral-B Cepillo Interdental',
            'details' => '+ Oral-B Repuestos Cónicos para Cepillo Interdental 6 Unidades',
            'price' => 0.1,
            'shipping_cost' => 0.1,
            'description' => 'Oral-B Cepillo Interdental',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'Cepillo Interdental.jpg'
        ]);

        Product::create([
            'name' => 'GUM Flossers Angulado ',
            'slug' => 'Menta 75',
            'details' => 'Color Verde',
            'price' => 0.1,
            'shipping_cost' => 0.1,
            'description' => 'Material:Plástico
            Dimensiones del artículo 17 x 8 x 12 cm
            Peso:	0.23 Gramos
            Sabor:	Menta',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'GUM Flossers Angulado.png'
        ]);

        Product::create([
            'name' => 'Hilo Dental Super Floss',
            'slug' => 'Color Azul',
            'details' => '50 Piezas',
            'price' => 0.1,
            'shipping_cost' => 0.1,
            'description' => 'Oral-B Hilo Dental Super Floss, Color Azul, 50 Piezas',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'Hilo Dental Super Floss.jpg'
        ]);

        Product::create([
            'name' => 'Enjuague Bucal',
            'slug' => 'Colgate Sensitive Pro-Alivio',
            'details' => 'Repara areas sensibles, alivio eficaz y duradero, aliento fresco y mayor higiene bucal , 250 ml',
            'price' => 0.1,
            'shipping_cost' => 0.1,
            'description' => 'Repara areas sensibles, alivio eficaz y duradero, aliento fresco y mayor higiene bucal , 250 ml',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'Enjuague Bucal.jpg'
        ]);

        Product::create([
            'name' => 'Cepillo Dental',
            'slug' => 'Colgate Cepillo Dental Triple Acción Mediano',
            'details' => '24 Piezas, colores aleatorios',
            'price' => 0.1,
            'shipping_cost' => 0.1,
            'description' => 'Repara areas sensibles, alivio eficaz y duradero, aliento fresco y mayor higiene bucal , 250 ml',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'Cepillo Dental.jpg'
        ]);

        Product::create([
            'name' => 'Pasta Dental',
            'slug' => 'Colgate Total Salud Visible Multibeneficios 150 ML',
            'details' => 'Multibeneficios 150 ML',
            'price' => 0.1,
            'shipping_cost' => 0.1,
            'description' => 'Pasta Dental Colgate Total Salud Visible Multibeneficios 150 ML',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'Pasta Dental.jpg'
        ]);

    }
}
