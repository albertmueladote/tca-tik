<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id_product');
            $table->string('name');
            $table->double('price', 10, 2);
            $table->text('observations')->nullable();
            $table->unsignedInteger('id_category')->nullable();
            $table->timestamps();
            $table->foreign('id_category')->references('id_category')->on('category')->onDelete('set null')->onUpdate('cascade');
        });
        DB::table('product')->insert([
           [
                'name' => 'Teléfono inteligente',
                'price' => 599.99,
                'observations' => 'Último modelo con increíbles características',
                'id_category' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')           
            ],
            [
                'name' => 'Camiseta de algodón',
                'price' => 19.99,
                'observations' => 'Color negro, talla M',
                'id_category' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Libro de ciencia ficción',
                'price' => 29.99,
                'observations' => 'Autor: John Doe',
                'id_category' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                 
            ],
            [
                'name' => 'Juego de sábanas',
                'price' => 39.99,
                'observations' => 'Para cama queen size',
                'id_category' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                 
            ],
            [
                'name' => 'Balón de fútbol',
                'price' => 24.99,
                'observations' => 'Tamaño estándar',
                'id_category' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')               
            ],
            [
                'name' => 'Muñeca de peluche',
                'price' => 15.99,
                'observations' => 'Suave y adorable',
                'id_category' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                 
            ],
            [
                'name' => 'Laptop ultradelgada',
                'price' => 1299.99,
                'observations' => 'Procesador rápido y pantalla HD',
                'id_category' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                  
            ],
            [
                'name' => 'Auriculares inalámbricos',
                'price' => 99.99,
                'observations' => 'Cancelación de ruido activa',
                'id_category' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')           
            ],
            [
                'name' => 'Zapatillas deportivas',
                'price' => 69.99,
                'observations' => 'Marca reconocida, varios colores disponibles',
                'id_category' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ],
            [
                'name' => 'Pantalones vaqueros de moda',
                'price' => 49.99,
                'observations' => 'Estilo moderno y cómodo',
                'id_category' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ],
            [
                'name' => 'Novela histórica épica',
                'price' => 34.99,
                'observations' => 'Bestseller del New York Times',
                'id_category' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                 
            ],
            [
                'name' => 'Guía de cocina internacional',
                'price' => 29.99,
                'observations' => 'Recetas del mundo entero',
                'id_category' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                 
            ],
            [
                'name' => 'Robot aspirador inteligente',
                'price' => 249.99,
                'observations' => 'Limpieza automática con programación',
                'id_category' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                   
            ],
            [
                'name' => 'Juego de cuchillos de cocina',
                'price' => 89.99,
                'observations' => 'Acero inoxidable de alta calidad',
                'id_category' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ],
            [
                'name' => 'Bicicleta de montaña',
                'price' => 399.99,
                'observations' => 'Suspensión completa, frenos de disco',
                'id_category' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')               
            ],
            [
                'name' => 'Pelota de yoga antiexplosión',
                'price' => 19.99,
                'observations' => 'Ideal para ejercicios de equilibrio',
                'id_category' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')              
            ],
            [
                'name' => 'Set de construcción de bloques',
                'price' => 29.99,
                'observations' => 'Desarrolla la creatividad en niños',
                'id_category' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ],
            [
                'name' => 'Muñeco de acción coleccionable',
                'price' => 14.99,
                'observations' => 'Edición limitada',
                'id_category' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ],
            [
                'name' => 'Smartwatch con monitor de salud',
                'price' => 79.99,
                'observations' => 'Pantalla táctil, medición de ritmo cardíaco',
                'id_category' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')              
            ],
            [
                'name' => 'Cámara digital profesional',
                'price' => 499.99,
                'observations' => 'Sensor de alta resolución, grabación en 4K',
                'id_category' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ],
            [
                'name' => 'Chaqueta de cuero elegante',
                'price' => 129.99,
                'observations' => 'Diseño moderno, ajuste cómodo',
                'id_category' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')               
            ],
            [
                'name' => 'Sombrero de moda',
                'price' => 24.99,
                'observations' => 'Estilo versátil, disponible en varios colores',
                'id_category' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                 
            ],
            [
                'name' => 'Novela de misterio',
                'price' => 24.99,
                'observations' => 'Intriga y suspense en cada página',
                'id_category' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ],
            [
                'name' => 'Libro de poesía contemporánea',
                'price' => 19.99,
                'observations' => 'Versos inspiradores y emotivos',
                'id_category' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                 
            ],
            [
                'name' => 'Lámpara de pie moderna',
                'price' => 89.99,
                'observations' => 'Iluminación ambiental, diseño elegante',
                'id_category' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')           
            ],
            [
                'name' => 'Juego de toallas de lujo',
                'price' => 34.99,
                'observations' => 'Suaves y absorbentes',
                'id_category' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')              
            ],
            [
                'name' => 'Raqueta de tenis profesional',
                'price' => 149.99,
                'observations' => 'Ideal para jugadores avanzados',
                'id_category' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')             
            ],
            [
                'name' => 'Botella de agua deportiva con infusor',
                'price' => 14.99,
                'observations' => 'Infusor de frutas para bebidas personalizadas',
                'id_category' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')               
            ],
            [
                'name' => 'Kit de construcción de robots',
                'price' => 39.99,
                'observations' => 'Fomenta la creatividad y la ingeniería',
                'id_category' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                  
            ],
            [
                'name' => 'Rompecabezas 3D de madera',
                'price' => 19.99,
                'observations' => 'Desafío para todas las edades',
                'id_category' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};