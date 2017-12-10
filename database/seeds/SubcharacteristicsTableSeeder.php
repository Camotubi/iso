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

    //External
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



//Maintainability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Analysability';
      $subcharacteristic->characteristic()->associate(5);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Changeability';
      $subcharacteristic->characteristic()->associate(5);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Stability';
      $subcharacteristic->characteristic()->associate(5);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Testability';
      $subcharacteristic->characteristic()->associate(5);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Maintainability compliance';
      $subcharacteristic->characteristic()->associate(5);
      $subcharacteristic->save();



//Portability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Adaptability';
      $subcharacteristic->characteristic()->associate(6);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Instability';
      $subcharacteristic->characteristic()->associate(6);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Coexistance';
      $subcharacteristic->characteristic()->associate(6);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Replaceability';
      $subcharacteristic->characteristic()->associate(6);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Portability Compliance';
      $subcharacteristic->characteristic()->associate(6);
      $subcharacteristic->save();



    //Internal
        //funcionality
      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Suitability';
      $subcharacteristic->characteristic()->associate(7);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Accuracy';
      $subcharacteristic->characteristic()->associate(7);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Interoperability';
      $subcharacteristic->characteristic()->associate(7);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Security';
      $subcharacteristic->characteristic()->associate(7);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Functionality Compliance';
      $subcharacteristic->characteristic()->associate(7);
      $subcharacteristic->save();

      //Reliability
      
      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Maturity';
      $subcharacteristic->characteristic()->associate(8);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Fault Tolerance';
      $subcharacteristic->characteristic()->associate(8);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Recoverability';
      $subcharacteristic->characteristic()->associate(8);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Reliability Compliance';
      $subcharacteristic->characteristic()->associate(8);
      $subcharacteristic->save();

//usability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Understandability';
      $subcharacteristic->characteristic()->associate(9);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Learnability';
      $subcharacteristic->characteristic()->associate(9);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Operability';
      $subcharacteristic->characteristic()->associate(9);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Attractiveness';
      $subcharacteristic->characteristic()->associate(9);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Usability compliance';
      $subcharacteristic->characteristic()->associate(9);
      $subcharacteristic->save();

//efficincy

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Time Behavior';
      $subcharacteristic->characteristic()->associate(10);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Resource usalisation';
      $subcharacteristic->characteristic()->associate(10);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Efficiency Compliance';
      $subcharacteristic->characteristic()->associate(10);
      $subcharacteristic->save();



//Maintainability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Analysability';
      $subcharacteristic->characteristic()->associate(11);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Changeability';
      $subcharacteristic->characteristic()->associate(11);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Stability';
      $subcharacteristic->characteristic()->associate(11);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Testability';
      $subcharacteristic->characteristic()->associate(11);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Maintainability compliance';
      $subcharacteristic->characteristic()->associate(11);
      $subcharacteristic->save();



//Portability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Adaptability';
      $subcharacteristic->characteristic()->associate(12);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Instability';
      $subcharacteristic->characteristic()->associate(12);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Coexistance';
      $subcharacteristic->characteristic()->associate(12);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Replaceability';
      $subcharacteristic->characteristic()->associate(12);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Portability Compliance';
      $subcharacteristic->characteristic()->associate(12);
      $subcharacteristic->save();


      //QUALITY IN USE
      //

      $characteristic = new Subcharacteristic;
      $characteristic->name = 'Effectivness';
      $characteristic->characteristic()->associate(13);
      $characteristic->save();

      $characteristic = new Subcharacteristic;
      $characteristic->name = 'Productivy';
      $characteristic->characteristic()->associate(14);
      $characteristic->save();

      $characteristic = new Subcharacteristic;
      $characteristic->name = 'Safety';
      $characteristic->characteristic()->associate(15);
      $characteristic->save();

      $characteristic = new Subcharacteristic;
      $characteristic->name = 'Satisfaction';
      $characteristic->characteristic()->associate(16);
      $characteristic->save();

    }
}
