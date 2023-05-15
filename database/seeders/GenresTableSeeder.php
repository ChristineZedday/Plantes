<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Rosa',
                'vernaculaire' => 'Rose',
                'famille' => 'Rosacées',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Quercus',
                'vernaculaire' => 'Chêne',
                'famille' => 'Fagacées',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Salvia',
                'vernaculaire' => 'Sauge',
                'famille' => 'Lamiacées',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'Brachychiton',
                'vernaculaire' => 'Kurrajong',
                'famille' => 'Sterculiacées',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'Iris',
                'vernaculaire' => 'Iris',
                'famille' => 'Iridacées',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}