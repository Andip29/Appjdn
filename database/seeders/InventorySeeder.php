<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("inventories")->insert([
            "nama"=> "Tangga",
            "jumlah"=> 3,
            "suplier" => "Olshop",
            "lokasi" => "gudang 1",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
