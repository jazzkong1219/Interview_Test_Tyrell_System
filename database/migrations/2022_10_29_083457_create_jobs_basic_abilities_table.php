<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsBasicAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('jobs_basic_abilities')) {
            Schema::create('jobs_basic_abilities', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('job_id')->unsigned()->nullable();
                $table->bigInteger('basic_ability_id')->unsigned()->nullable();
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
        Schema::dropIfExists('jobs_basic_abilities');
    }
}
