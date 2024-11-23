<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SystemSetting;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [

            [
                'company_name' => 'balaji groups',
            'email' => 'balaji@gmail.com',
            'website' => 'balajigroups@gmail.com',
            'customer_care_no' => '+91 9352728293093'
            ]

        ];

        foreach ($settings as $row){
            SystemSetting::create($row);
        }
    }
}
