<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "ELISA DWI APRILIA",
                "username" => "elisadwi",
                "no_telepon" => "081234567",
                "alamat" => "SIDOARJO",
                "email" => "elisa@gmail.com",
                "password" => bcrypt(123),
                "role" => "customer",
            ],
            [
                "name" => "ANANDA MAULANA WAHYUDI",
                "username" => "nndmw",
                "no_telepon" => "087789343",
                "alamat" => "BANGKAL",
                "email" => "nanda@gmail.com",
                "password" => bcrypt(123),
                "role" => "admin",
            ]
        ];

        foreach ($data as $item) {
            User::create($item);
        }
    }
}
