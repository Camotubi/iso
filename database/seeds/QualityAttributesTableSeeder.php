<?php

use Illuminate\Database\Seeder;
use App\QualityAttribute;

class QualityAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $qualityAttribute = QualityAttribute::create([
        'name' => 'External',
      
      ]);

      $qualityAttribute = QualityAttribute::create([
        'name' => 'Internal',
      ]);
      $qualityAttribute = QualityAttribute::create([
        'name' => 'Quality in use',
      ]);
    }
}
