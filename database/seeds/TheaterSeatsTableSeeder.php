<?php

use Illuminate\Database\Seeder;

class TheaterSeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seats = [
            ['booked' => '1','active'=> '0'],
            ['booked' => '1','active'=> '0'],
            ['booked' => '1','active'=> '0'],
            ['booked' => '1','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '1'],
            ['booked' => '0','active'=> '1'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '1','active'=> '0'],
            ['booked' => '1','active'=> '0'],
            ['booked' => '1','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '1'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '1'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '0','active'=> '0'],
            ['booked' => '1','active'=> '0'],
            ['booked' => '1','active'=> '0'],
        ];
        DB::table('theater_seats')->insert($seats);
    }
}
