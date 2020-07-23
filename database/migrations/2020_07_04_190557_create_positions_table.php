<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('shore_id')->constrained();
            $table->foreignId('shore_level_id')->constrained();
            $table->foreignId('shore_exposure_id')->constrained();
            $table->integer('shore_replicate');
            $table->string('shore_subreplicate', 1);
            $table->integer('slope')->nullable();
            $table->integer('orientation')->nullable();
            $table->date('deployment_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->string('microhabitat', 2);
            $table->boolean('inactive');
            $table->integer('old_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
