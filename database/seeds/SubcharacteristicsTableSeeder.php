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
      $subcharacteristic->name = 'Suitability';//1
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
      $subcharacteristic->name = 'Functionality Compliance';//5
      $subcharacteristic->characteristic()->associate(1);
      $subcharacteristic->save();

      //Reliability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Maturity';//6
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
      $subcharacteristic->name = 'Reliability Compliance';//9
      $subcharacteristic->characteristic()->associate(2);
      $subcharacteristic->save();

//usability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Understandability';//10
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
      $subcharacteristic->name = 'Usability compliance';//14
      $subcharacteristic->characteristic()->associate(3);
      $subcharacteristic->save();

//efficincy

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Time Behavior';//15
      $subcharacteristic->characteristic()->associate(4);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Resource usalisation';
      $subcharacteristic->characteristic()->associate(4);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Efficiency Compliance';//17
      $subcharacteristic->characteristic()->associate(4);
      $subcharacteristic->save();



//Maintainability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Analysability';//18
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
      $subcharacteristic->name = 'Maintainability compliance';//22
      $subcharacteristic->characteristic()->associate(5);
      $subcharacteristic->save();



//Portability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Adaptability';//23
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
      $subcharacteristic->characteristic()->associate(6);//27
      $subcharacteristic->save();



    //Internal
        //funcionality
      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Suitability';//28
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
      $subcharacteristic->name = 'Functionality Compliance';//32
      $subcharacteristic->characteristic()->associate(7);
      $subcharacteristic->save();

      //Reliability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Maturity';//33
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
      $subcharacteristic->name = 'Reliability Compliance';//36
      $subcharacteristic->characteristic()->associate(8);
      $subcharacteristic->save();

//usability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Understandability';
      $subcharacteristic->characteristic()->associate(9);//37
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
      $subcharacteristic->characteristic()->associate(9);//41
      $subcharacteristic->save();

//efficincy

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Time Behavior';//42
      $subcharacteristic->characteristic()->associate(10);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Resource usalisation';
      $subcharacteristic->characteristic()->associate(10);
      $subcharacteristic->save();

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Efficiency Compliance';//44
      $subcharacteristic->characteristic()->associate(10);
      $subcharacteristic->save();



//Maintainability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Analysability';
      $subcharacteristic->characteristic()->associate(11);//45
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
      $subcharacteristic->name = 'Maintainability compliance';//49
      $subcharacteristic->characteristic()->associate(11);
      $subcharacteristic->save();



//Portability

      $subcharacteristic = new Subcharacteristic;
      $subcharacteristic->name = 'Adaptability';//50
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
      $subcharacteristic->name = 'Portability Compliance';//54
      $subcharacteristic->characteristic()->associate(12);
      $subcharacteristic->save();


      //QUALITY IN USE
      //

      $characteristic = new Subcharacteristic;
      $characteristic->name = 'Effectivness';//55
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
      $characteristic->name = 'Satisfaction';//58
      $characteristic->characteristic()->associate(16);
      $characteristic->save();

    }
}
