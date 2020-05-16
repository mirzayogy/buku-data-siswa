<?php

use Illuminate\Database\Seeder;
use App\Siswa;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        Siswa::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Siswa::create([
                'nisn' => $faker->numberBetween($min = 1000, $max = 9000),
                'nama_siswa' => $faker->name,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'jenis_kelamin' => $faker->randomElement($array = array('L','P')),
            ]);
        }
    }
}
