<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id'   => 1,
                'name'      => 'One VIP Ticket',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Wristband',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Backstage Access',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Totebag',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Tumbler',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'T-Shirt',
            ],
            [
                'camp_id'   => 1,
                'name'      => 'Keychain',
            ],

            [
                'camp_id'   => 2,
                'name'      => 'One VIP Ticket',
            ],
            [
                'camp_id'   => 2,
                'name'      => 'Wristband',
            ],
            [
                'camp_id'   => 2,
                'name'      => 'Totebag',
            ],
            [
                'camp_id'   => 2,
                'name'      => 'Keychain',
            ],
        ];
        //
        CampBenefit::insert($campBenefits);
    }
}
