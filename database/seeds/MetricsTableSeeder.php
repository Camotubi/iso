<?php

use Illuminate\Database\Seeder;
use App\Metric;

class MetricsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $metric = new Metric;
      $metric->name = 'Functional Adequacy';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional Implementation Coverage';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional Implementation Completeness';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional Specification Stability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();



      $metric = new Metric;
      $metric->name = 'Accuracy expectation';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/T)';
      $metric->subcharacteristic()->associate(2);
      $metric->save();




      $metric = new Metric;
      $metric->name = 'Computational Accuracy';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/T)';
      $metric->subcharacteristic()->associate(2);
      $metric->save();



      $metric = new Metric;
      $metric->name = 'Precision';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/T)';
      $metric->subcharacteristic()->associate(2);
      $metric->save();



      $metric = new Metric;
      $metric->name = 'Data Exchangeability (Data Formart Base)';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(3);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Data Exchangeability (Users success attemp based)';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(3);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Access Auditability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(4);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Access Controllability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(4);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Data Corruption Prevention';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/N)';
      $metric->subcharacteristic()->associate(4);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Fucntional Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(5);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Interface Standard Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(5);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure density against test cases';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(6);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure resolution';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(6);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure density';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(6);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure removal';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(6);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Test Coverage';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(6);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Test Maturity';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(6);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Breakdown Avoidance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(7);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure Avoidance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(7);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Incorrect Operation Avoidance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(7);
      $metric->save();

//Recoverability
      $metric = new Metric;
      $metric->name = 'Availability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(8);
      $metric->save();

//Reliability
      $metric = new Metric;
      $metric->name = 'Reliability Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(9);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Text';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(10);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Effectiveness of the user documentation and/or help system';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(11);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Effectiveness of the user documentation and/or help system in use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(11);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Help Frequency';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A';
      $metric->subcharacteristic()->associate(11);
      $metric->save();

//Operability
      $metric = new Metric;
      $metric->name = 'Operational Consistency in Use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(12);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Error Correction in Use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(12);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Default Value Availability in Use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(12);
      $metric->save();

//Attractiveness Compliance
      $metric = new Metric;
      $metric->name = 'Interface Appareance Customisability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(13);
      $metric->save();

//Usability Compliance
      $metric = new Metric;
      $metric->name = 'Usability Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(14);
      $metric->save();

      #---------------Efficiency associate(10)---------------#

      //Time Behavior Metrics
      $metric = new Metric;
      $metric->name = 'Response Time';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'T1/T2';
      $metric->subcharacteristic()->associate(15);
      $metric->save();

      //Resource Utilisation Metrics
      $metric = new Metric;
      $metric->name = 'I/O Devices Utilisation';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(16);
      $metric->save();

      //Efficiency Compliance Metrics
      $metric = new Metric;
      $metric->name = 'Efficiency Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(17);
      $metric->save();


      #--------MaintainabilityMetrics Associate(11)-------#

      //Analysability Metrics
      $metric = new Metric;
      $metric->name = 'Audit Trial Capability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(18);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Diagnostic Support';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(18);
      $metric->save();

      //Changeability Metrics
      $metric = new Metric;
      $metric->name = 'Software Change Control Capability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(19);
      $metric->save();

      //Stability Metrics
      $metric = new Metric;
      $metric->name = 'Re-Test Efficiency';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(20);
      $metric->save();

      //Maintainability Metrics
      $metric = new Metric;
      $metric->name = 'Maintainability Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(22);
      $metric->save();

      #---------------------Portability Metrics Associate(12)-----------#
      //Adaptabilouty Metrics
      $metric = new Metric;
      $metric->name = 'Adaptability of Data Structures';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(23);
      $metric->save();

      //Installability Metrics
      $metric = new Metric;
      $metric->name = 'Ease of Installation';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(24);
      $metric->save();

      //Replaceability Metrics
      $metric = new Metric;
      $metric->name = 'Continued Use of Data';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(25);
      $metric->save();

      //Portability Compliance Metrics
      $metric = new Metric;
      $metric->name = 'Portability Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(26);
      $metric->save();

      #-----------Usability Associate(9)----------------------#
      $metric = new Metric;
      $metric->name = 'Functional Adequacy';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(28);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional Implementation Coverage';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(28);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional Implementation Completeness';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(28);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional Specification Stability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(28);
      $metric->save();



      $metric = new Metric;
      $metric->name = 'Accuracy expectation';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/T)';
      $metric->subcharacteristic()->associate(29);
      $metric->save();




      $metric = new Metric;
      $metric->name = 'Computational Accuracy';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/T)';
      $metric->subcharacteristic()->associate(29);
      $metric->save();



      $metric = new Metric;
      $metric->name = 'Precision';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/T)';
      $metric->subcharacteristic()->associate(29);
      $metric->save();



      $metric = new Metric;
      $metric->name = 'Data Exchangeability (Data Formart Base)';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(30);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Data Exchangeability (Users success attemp based)';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(30);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Access Auditability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(31);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Access Controllability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(31);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Data Corruption Prevention';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/N)';
      $metric->subcharacteristic()->associate(32);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Fucntional Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(32);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Interface Standard Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(32);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Acces Auditability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(33);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Access Controllability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(33);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure density';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(33);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure removal';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(33);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Test Coverage';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(33);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Test Maturity';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(33);
      $metric->save();

//FaultTolerance
      $metric = new Metric;
      $metric->name = 'Breakdown Avoidance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(34);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure Avoidance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(34);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Incorrect Operation Avoidance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(34);
      $metric->save();

//Recoverability
      $metric = new Metric;
      $metric->name = 'Availability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(35);
      $metric->save();

//Reliability
      $metric = new Metric;
      $metric->name = 'Reliability Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(36);
      $metric->save();

      #USABILITY
//Understandability
      $metric = new Metric;
      $metric->name = 'Completeness of Description';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(37);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Demostration Accessibility';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(37);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Demostration Accessibility Use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(37);
      $metric->save();

//Learnability
      $metric = new Metric;
      $metric->name = 'Effectiveness of the user documentation and/or help system';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(38);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Effectiveness of the user documentation and/or help system in use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(38);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Help Frequency';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A';
      $metric->subcharacteristic()->associate(38);
      $metric->save();

//Operability
      $metric = new Metric;
      $metric->name = 'Operational Consistency in Use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(39);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Error Correction in Use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(39);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Default Value Availability in Use';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(39);
      $metric->save();

//Attractiveness Compliance
      $metric = new Metric;
      $metric->name = 'Interface Appareance Customisability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(40);
      $metric->save();

//Usability Compliance
      $metric = new Metric;
      $metric->name = 'Usability Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(41);
      $metric->save();

      #---------------Efficiency associate(10)---------------#

      //Time Behavior Metrics
      $metric = new Metric;
      $metric->name = 'Response Time';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'T1/T2';
      $metric->subcharacteristic()->associate(42);
      $metric->save();

      //Resource Utilisation Metrics
      $metric = new Metric;
      $metric->name = 'I/O Devices Utilisation';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(43);
      $metric->save();

      //Efficiency Compliance Metrics
      $metric = new Metric;
      $metric->name = 'Efficiency Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(44);
      $metric->save();


      #--------MaintainabilityMetrics Associate(11)-------#

      //Analysability Metrics
      $metric = new Metric;
      $metric->name = 'Audit Trial Capability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(45);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Diagnostic Support';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(45);
      $metric->save();

      //Changeability Metrics
      $metric = new Metric;
      $metric->name = 'Software Change Control Capability';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(46);
      $metric->save();

      //Stability Metrics
      $metric = new Metric;
      $metric->name = 'Re-Test Efficiency';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(47);
      $metric->save();

      //Maintainability Metrics
      $metric = new Metric;
      $metric->name = 'Maintainability Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(49);
      $metric->save();

      #---------------------Portability Metrics Associate(12)-----------#
      //Adaptabilouty Metrics
      $metric = new Metric;
      $metric->name = 'Adaptability of Data Structures';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(50);
      $metric->save();

      //Installability Metrics
      $metric = new Metric;
      $metric->name = 'Ease of Installation';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(51);
      $metric->save();

      //Replaceability Metrics
      $metric = new Metric;
      $metric->name = 'Continued Use of Data';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(53);
      $metric->save();

      //Portability Compliance Metrics
      $metric = new Metric;
      $metric->name = 'Portability Compliance';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(54);
      $metric->save();


      #------------ Quality in Use ------------#

      //Effectivness Metrics
      $metric = new Metric;
      $metric->name = 'Error Frecuency';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/T';
      $metric->subcharacteristic()->associate(55);
      $metric->save();

      //Productivy
      $metric = new Metric;
      $metric->name = 'Productive Proportion';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'TA/TB';
      $metric->subcharacteristic()->associate(56);
      $metric->save();

      //Safety
      $metric = new Metric;
      $metric->name = 'User and Health Safety';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(57);
      $metric->save();

      //Satisfaction
      $metric = new Metric;
      $metric->name = 'Satisfaction Scale';
      $metric->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
       pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
       culpa qui officia deserunt mollit anim id est laborum.';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(58);
      $metric->save();
    }
}
