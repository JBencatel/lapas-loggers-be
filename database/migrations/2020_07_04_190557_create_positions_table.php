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
            $table->integer('slope');
            $table->integer('orientation');
            $table->foreignId('shore_id')->constrained();
            $table->foreignId('shore_level_id')->constrained();
            $table->foreignId('shore_exposure_id')->constrained();
            $table->foreignId('shore_replicate_id')->constrained();
            $table->foreignId('shore_subreplicate_id')->constrained();
            $table->foreignId('microhabitat_id')->constrained();
            $table->date('deployment_date');
            $table->date('termination_date');
            $table->boolean('inactive');
            $table->integer('old_number');
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
