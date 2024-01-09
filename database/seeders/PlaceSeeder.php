<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::create([
            "name" => "Shopping Abc",
            "coordenates" => "-23.667614397447757, -46.53330847256732",
            "address" => "Av. Pereira Barreto, 42 - Vila Gilda, Santo André - SP, 09190-210",
        ]);
        Place::create([
            "name" => "Shopping Atrium",
            "coordenates" => "-23.66359949081143, -46.50757405907348",
            "address" => "Rua Giovanni Battista Pirelli, 155 - Vila Homero Thon, Santo André - SP, 09111-340",
        ]);
        Place::create([
            "name" => "Shopping Grand Plaza",
            "coordenates" => "-23.648540221623996, -46.531877870720564",
            "address" => "Av. Industrial, 600 - Centro, Santo André - SP, 09080-510",
        ]);
    }
}
