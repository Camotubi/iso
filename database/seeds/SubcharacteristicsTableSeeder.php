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


        //funcionality
      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Suitability';
      $subcharacteristic->characteristic()->associate(1);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Accuracy';
      $subcharacteristic->characteristic()->associate(1);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Interoperability';
      $subcharacteristic->characteristic()->associate(1);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Security';
      $subcharacteristic->characteristic()->associate(1);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Functionality';
      $subcharacteristic->characteristic()->associate(1);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Functionality Compliance';
      $subcharacteristic->characteristic()->associate(1);
      $subcharacteristic->save();

      //Reliability
      
      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Maturity';
      $subcharacteristic->characteristic()->associate(2);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Fault Tolerance';
      $subcharacteristic->characteristic()->associate(2);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Recoverability';
      $subcharacteristic->characteristic()->associate(2);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Reliability Compliance';
      $subcharacteristic->characteristic()->associate(2);
      $subcharacteristic->save();

//usability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Understandability';
      $subcharacteristic->characteristic()->associate(3);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Learnability';
      $subcharacteristic->characteristic()->associate(3);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Operability';
      $subcharacteristic->characteristic()->associate(3);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Attractiveness';
      $subcharacteristic->characteristic()->associate(3);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Usability compliance';
      $subcharacteristic->characteristic()->associate(3);
      $subcharacteristic->save();

//efficincy

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Time Behavior';
      $subcharacteristic->characteristic()->associate(4);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Resource usalisation';
      $subcharacteristic->characteristic()->associate(4);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Efficiency Compliance';
      $subcharacteristic->characteristic()->associate(4);
      $subcharacteristic->save();



    }
}
