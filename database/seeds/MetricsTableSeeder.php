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
      $metric->subcharacteristic()->associate(8);
      $metric->save();

      #-----------Usability Associate(9)----------------------#

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
      $metric->subcharacteristic()->associate(9);
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
      $metric->subcharacteristic()->associate(9);
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
      $metric->subcharacteristic()->associate(9);
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
      $metric->subcharacteristic()->associate(9);
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
      $metric->subcharacteristic()->associate(9);
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
      $metric->subcharacteristic()->associate(9);
      $metric->save();

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
      $metric->subcharacteristic()->associate(9);
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
      $metric->subcharacteristic()->associate(9);
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
      $metric->subcharacteristic()->associate(9);
      $metric->save();

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
      $metric->subcharacteristic()->associate(9);
      $metric->save();

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
      $metric->subcharacteristic()->associate(9);
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
      $metric->subcharacteristic()->associate(10);
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
      $metric->subcharacteristic()->associate(10);
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
      $metric->subcharacteristic()->associate(10);
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
      $metric->subcharacteristic()->associate(11);
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
      $metric->subcharacteristic()->associate(11);
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
      $metric->subcharacteristic()->associate(11);
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
      $metric->subcharacteristic()->associate(11);
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
      $metric->subcharacteristic()->associate(11);
      $metric->save();
    }
}
