<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('job_types')) {
            Schema::create('job_types', function (Blueprint $table) {
                $table->id();
                $table->text('name')->nullable();
                $table->bigInteger('job_category_id')->unsigned()->nullable();
                $table->text('sort_order')->nullable();
                $table->bigInteger('created_by')->unsigned()->nullable();
                $table->timestamp('deleted')->nullable();
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
        Schema::dropIfExists('job_types');
    }
}
