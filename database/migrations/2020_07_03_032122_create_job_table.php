<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->text('vehicle_type');
            $table->text('lead_from');
            $table->text('load_from');
            $table->text('dispatch_to');
            $table->text('remarks')->nullable();
            $table->string('name');
            $table->string('load_type');
            $table->string('assigned_to')->nullable();
            $table->string('lead_status')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
