<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_data = [
			[
				'name' => 'Selamat datang di Codeigniter',
				'description' => 'Pengenalan Codeigniter untuk Pemula.'
			],
			[
				'name' => 'Hello World',
				'description' => 'Hello World, ini contoh artikel'
			],
			[
				'name' => 'Meetup komunitas Codeigniter Indonesia',
				'description' => 'Seru sekali meetup perdana komunitas codeigniter..'
			]
		];

		foreach($user_data as $data){
			$this->db->table('user')->insert($data);
		}
    }
}
