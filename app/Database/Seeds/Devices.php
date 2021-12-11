<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Devices extends Seeder
{
    public function run()
    {
        $devices_data = [
            [
                'device_name' => 'Smart LED 9W RG BWW',
                'device_brand' => 'Bardi',
                'device_quantity' => 10,
                'device_status' => 'on'
            ],
            [
                'device_name' => 'Smart Hampers 12W RG BWW',
                'device_brand' => 'Bardi',
                'device_quantity' => 4,
            ],
            [
                'device_name' => 'Parallelogram Panel Starter Kit',
                'device_brand' => 'Bardi',
                'device_quantity' => 2,
            ],
        ];

        foreach($devices_data as $data) {
            $this->db->table('devices')->insert($data);
        }
    }
}
