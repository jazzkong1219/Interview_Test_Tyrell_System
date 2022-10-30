<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');
            $table->foreign('job_type_id')->references('id')->on('job_types')->onDelete('cascade');
        });

        Schema::table('job_types', function (Blueprint $table) {
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');
        });

        Schema::table('jobs_personalities', function (Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('personality_id')->references('id')->on('personalities')->onDelete('cascade');
        });

        Schema::table('jobs_practical_skills', function (Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('practical_skill_id')->references('id')->on('practical_skills')->onDelete('cascade');
        });

        Schema::table('jobs_basic_abilities', function (Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('basic_ability_id')->references('id')->on('basic_abilities')->onDelete('cascade');
        });

        Schema::table('jobs_tools', function (Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliates')->onDelete('cascade');
        });

        Schema::table('jobs_career_paths', function (Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliates')->onDelete('cascade');
        });

        Schema::table('jobs_rec_qualifications', function (Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliates')->onDelete('cascade');
        });

        Schema::table('jobs_req_qualifications', function (Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
