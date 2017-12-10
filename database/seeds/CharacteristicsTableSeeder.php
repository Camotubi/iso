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

      $characteristic = new Characteristic;
      $characteristic->name = 'Reliability';
      $characteristic->qualityAttribute()->associate(1);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Usability';
      $characteristic->qualityAttribute()->associate(1);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Efficiency';
      $characteristic->qualityAttribute()->associate(1);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Maintainability';
      $characteristic->qualityAttribute()->associate(1);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Probability';
      $characteristic->qualityAttribute()->associate(1);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Funcionality';
      $characteristic->qualityAttribute()->associate(2);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Reliability';
      $characteristic->qualityAttribute()->associate(2);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Usability';
      $characteristic->qualityAttribute()->associate(2);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Efficiency';
      $characteristic->qualityAttribute()->associate(2);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Maintainability';
      $characteristic->qualityAttribute()->associate(2);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Probability';
      $characteristic->qualityAttribute()->associate(2);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Effectivness';
      $characteristic->qualityAttribute()->associate(3);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Productivy';
      $characteristic->qualityAttribute()->associate(3);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Safety';
      $characteristic->qualityAttribute()->associate(3);
      $characteristic->save();

      $characteristic = new Characteristic;
      $characteristic->name = 'Satisfaction';
      $characteristic->qualityAttribute()->associate(3);
      $characteristic->save();
    }
}
