<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [

        //     [
        //         'nama' => 'Gunawan',
        //         'alamat'    => 'JL IR Juanda No 25',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'Zakiah Halim',
        //         'alamat'    => 'JL IR Cirebon No 25',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'Rikaz',
        //         'alamat'    => 'JL IR Indramayu No 25',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ]

        // ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama' => $faker->name,
                'alamat'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('orang')->insert($data);
        }
        // Orang Queries
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );

        // Using Query Builder
        //$this->db->table('orang')->insert($data);
        //$this->db->table('orang')->insertBatch($data);
    }
}
