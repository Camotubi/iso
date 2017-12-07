<?php

use Illuminate\Database\Seeder;
use App\Subcharacteristic;

class SubcharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Suitability';
      $subcharacteristic->characteristic()->associate(1);
      $subcharacteristic->save();
    }
}
