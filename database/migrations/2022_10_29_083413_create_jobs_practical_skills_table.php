<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsPracticalSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('jobs_practical_skills')) {
            Schema::create('jobs_practical_skills', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('job_id')->unsigned()->nullable();
                $table->bigInteger('practical_skill_id')->unsigned()->nullable();
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
        Schema::dropIfExists('jobs_practical_skills');
    }
}
