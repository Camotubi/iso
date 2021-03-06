<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(QualityAttributesTableSeeder::class);
      $this->call(CharacteristicsTableSeeder::class);
      $this->call(SubcharacteristicsTableSeeder::class);
      $this->call(MetricsTableSeeder::class);
    }
}
