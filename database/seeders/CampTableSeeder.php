<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title'     => 'Melody Package',
                'slug'      => 'melody-package',
                'price'     => 350,
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time()),
            ],
            [
                'title'     => 'Harmony Package',
                'slug'      => 'harmony-package',
                'price'     => 200,
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time()),
            ]
            ];
        //
        Camp::insert($camps);
    }
}
