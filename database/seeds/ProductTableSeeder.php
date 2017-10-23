<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //POVEZUJEMO SA MODELOM Product.php
       $product = new \App\Product([
           'title'       =>'U raljama zivota',
           'imagePath'   =>'https://upload.wikimedia.org/wikipedia/sr/5/58/U_raljama_zivota.jpg',
           'description' =>'Domaci film',
           'price'       => 22 ,
           'salePrice'   => 14
       	]);
       $product->save();
       $product = new \App\Product([
           'title'       =>'Kako sam sistematski unisten od idiota',
           'imagePath'   =>'https://images-na.ssl-images-amazon.com/images/M/MV5BYmQxNzZhZTItNTJhZS00MDY5LTk4MTYtODRmYjlhYTI4M2JjXkEyXkFqcGdeQXVyMzIwMTIwODc@._V1_UY268_CR4,0,182,268_AL_.jpg',
           'description' =>'Tragikomedija',
           'price'       => 55 ,
           'salePrice'   =>34
       	]);
       $product->save();
       $product = new \App\Product([
           'title'       =>'Ljepota poroka',
           'imagePath'   =>'https://images-na.ssl-images-amazon.com/images/M/MV5BM2RhZGU0YjYtOTE1NC00ZGUzLWExMjctZDU5OTAwNjlmMmNiXkEyXkFqcGdeQXVyMzIwMTIwODc@._V1_UY268_CR4,0,182,268_AL_.jpg',
           'description' =>'Drama',
           'price'       => 34 ,
           'salePrice'   =>23
       	]);
        $product->save();
        $product = new \App\Product([
           'title'       =>'Valter brani Sarajevo',
           'imagePath'   =>'http://www.novosti.rs/upload/images/2015//03/25/valter.jpg',
           'description' =>'Partizanski',
           'price'       => 34 ,
           'salePrice'   =>23
       	]);
        $product->save();
       
    
       
    }
}


