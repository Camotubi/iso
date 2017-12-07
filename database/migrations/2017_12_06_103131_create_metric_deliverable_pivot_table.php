<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetricDeliverablePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metric_deliverable', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('metric_id')->unsigned();
            $table->foreign('metric_id')->references('id')->on('metrics');
            $table->integer('deliverable_id')->unsigned();
            $table->foreign('deliverable_id')->references('id')->on('deliverables');
            $table->unique(['metric_id','deliverable_id']);
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metric_deliverable');
    }
}
