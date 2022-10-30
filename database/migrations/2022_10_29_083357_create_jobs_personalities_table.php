<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsPersonalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('jobs_personalities')) {
            Schema::create('jobs_personalities', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('job_id')->unsigned()->nullable();
                $table->bigInteger('personality_id')->unsigned()->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_personalities');
    }
}
