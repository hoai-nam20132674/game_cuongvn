<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // $this->call(UserTableSeeder::class);

        // Model::reguard();
        DB::table('users')->insert([
            [
                'name' =>'Nguyễn Hoài Nam',
                'sdt' =>'01642911168',
                'password'=>Hash::make('01642911168'),
                'g500k'=>str_random(50),
                'g200k'=>str_random(51),
                'baoda'=>str_random(52),
                'cocsac'=>str_random(53),
                'mockhoa'=>str_random(54),
                'tainghe'=>str_random(55),
                'freeship'=>str_random(56),
                'goodluck'=>str_random(57),
                'status'=>0,
                'role'=>0,
            ],
            [
                'name' =>'Nguyễn Quốc Huy',
                'sdt' =>'01642911169',
                'password'=>Hash::make('01642911169'),
                'g500k'=>str_random(50),
                'g200k'=>str_random(51),
                'baoda'=>str_random(52),
                'cocsac'=>str_random(53),
                'mockhoa'=>str_random(54),
                'tainghe'=>str_random(55),
                'freeship'=>str_random(56),
                'goodluck'=>str_random(57),
                'status'=>0,
                'role'=>0,
            ]
            ]
        );
    }
}
