<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          =>  'Anton',
                'email'         =>  'anton@gmail.com',
                'phone'       =>  '081234555678',
                'website' => 'https://elearning.pnb.ac.id/',
                'country'    =>  'Indonesia',
                'city'    =>  'Badung',
                'zipcode'    =>  '80353',
                'created_at' => Time::now()
            ],
            [
                'name'          =>  'Mohamed Salah',
                'email'         =>  'mohamedsalah@gmail.com',
                'phone'       =>  '0812345666666',
                'website' => 'https://elearning.pnb.ac.id/',
                'country'    =>  'Egypt',
                'city'    =>  'Cairo',
                'zipcode'    =>  '3753450',
                'created_at' => Time::now()
            ],
        ];
        $this->db->table('customer')->insertBatch($data);
    }
}
