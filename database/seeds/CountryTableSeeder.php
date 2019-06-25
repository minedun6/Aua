<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('country')->insert([
          'zone_id'              => '1',
          'nameEn'              => 'Tunisia',
          'nameFr'              => 'Tunisia',
          'nameAr'              => 'Tunisia',
          'namePt'              => 'Tunisia',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);


      DB::table('country')->insert([
          'zone_id'              => '1',
          'nameEn'              => 'Algeria',
          'nameFr'              => 'Algeria',
          'nameAr'              => 'Algeria',
          'namePt'              => 'Algeria',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);

      DB::table('country')->insert([
          'zone_id'              => '1',
          'nameEn'              => 'Libya',
          'nameFr'              => 'Libya',
          'nameAr'              => 'Libya',
          'namePt'              => 'Libya',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);



      DB::table('country')->insert([
          'zone_id'              => '3',
          'nameEn'              => 'Congo',
          'nameFr'              => 'Congo',
          'nameAr'              => 'Congo',
          'namePt'              => 'Congo',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);



      DB::table('country')->insert([
            'zone_id'              => '2',
            'nameEn'              => 'SouthAfrica',
            'nameFr'              => 'SouthAfrica',
            'nameAr'              => 'SouthAfrica',
            'namePt'              => 'SouthAfrica',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
            ]);

    }
}
