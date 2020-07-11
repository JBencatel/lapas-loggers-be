<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('original_name')->nullable();
            $table->foreignId('position_id')->nullable()->constrained();
            $table->foreignId('logger_type_id')->constrained();
            $table->date('deployment_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->boolean('inactive');
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
        Schema::dropIfExists('serials');
    }
}
