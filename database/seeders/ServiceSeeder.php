<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\Nullable;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'price' => Str::random(10),
        ]);

        DB::table('services')->insert(
            array(
                [
                    'title' => 'Ortodonzia',
                ],
                [
                    'title' => 'Estetica Dentale',
                ],
                [
                    'title' => 'Protesi Dentali',
                ],
                [
                    'title' => 'Implantologia',
                ],
                [
                    'title' => 'Paradontologia',
                ],
            )
        );
    }
}
