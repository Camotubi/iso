<?php

use Illuminate\Database\Seeder;
use App\Characteristic;

class CharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $characteristic = new Characteristic;
      $characteristic->name = 'Funcionality';
      $characteristic->qualityAttribute()->associate(1);
      $characteristic->save();
    }
}
