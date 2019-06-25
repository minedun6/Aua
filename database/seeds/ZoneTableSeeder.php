<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('zone')->insert([
          'nameEn'              => 'north',
          'nameFr'              => 'north',
          'nameAr'              => 'north',
          'namePt'              => 'north',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);


      DB::table('zone')->insert([
          'nameEn'              => 'south',
          'nameFr'              => 'south',
          'nameAr'              => 'south',
          'namePt'              => 'south',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);


      DB::table('zone')->insert([
          'nameEn'              => 'east',
          'nameFr'              => 'east',
          'nameAr'              => 'east',
          'namePt'              => 'east',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);


      DB::table('zone')->insert([
          'nameEn'              => 'west',
          'nameFr'              => 'west',
          'nameAr'              => 'west',
          'namePt'              => 'west',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);


    }
}
