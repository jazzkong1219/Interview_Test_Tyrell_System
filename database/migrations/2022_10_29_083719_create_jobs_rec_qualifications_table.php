<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsRecQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('jobs_rec_qualifications')) {
            Schema::create('jobs_rec_qualifications', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('job_id')->unsigned()->nullable();
                $table->bigInteger('affiliate_id')->unsigned()->nullable();
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
        Schema::dropIfExists('jobs_rec_qualifications');
    }
}
