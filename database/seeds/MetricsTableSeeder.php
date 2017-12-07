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
      $metric->name = 'Functional adequacy';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional implementation coverage';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional implementation completeness';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Functional specification stability';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Data exchangeability (Data Formart Base)';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Data exchangeability (Users success attemp based)';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Access Auditability';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Access Controllability';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Data Corruption Prevention';
      $metric->formula = '1-(A/N)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Fucntional Compliance';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Interface Standard Compliance';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure density against test cases';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure resolution';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure density';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure removal';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Test Coverage';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Test Maturity';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Breakdown Avoidance';
      $metric->formula = '1-(A/B)';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Failure Avoidance';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      $metric = new Metric;
      $metric->name = 'Incorrect Operation Avoidance';
      $metric->formula = 'A/B';
      $metric->subcharacteristic()->associate(1);
      $metric->save();

      
    }
}
