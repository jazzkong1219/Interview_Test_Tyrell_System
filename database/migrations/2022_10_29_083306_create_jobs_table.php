<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('jobs')) {
            Schema::create('jobs', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->bigInteger('media_id')->unsigned()->nullable();
                $table->bigInteger('job_category_id')->unsigned()->nullable();
                $table->bigInteger('job_type_id')->unsigned()->nullable();
                $table->text('description')->nullable();
                $table->text('detail')->nullable();
                $table->text('business_skill')->nullable();
                $table->text('knowledge')->nullable();
                $table->text('location')->nullable();
                $table->text('activity')->nullable();
                $table->text('academic_degree_doctor')->nullable();
                $table->text('academic_degree_master')->nullable();
                $table->text('academic_degree_professional')->nullable();
                $table->text('academic_degree_bachelor')->nullable();
                $table->text('salary_statistic_group')->nullable();
                $table->text('salary_range_first_year')->nullable();
                $table->text('salary_range_average')->nullable();
                $table->text('salary_range_remarks')->nullable();
                $table->text('restriction')->nullable();
                $table->text('estimated_total_workers')->nullable();
                $table->text('remarks')->nullable();
                $table->text('url')->nullable();
                $table->text('seo_description')->nullable();
                $table->text('seo_keywords')->nullable();
                $table->text('sort_order')->nullable();
                $table->text('publish_status')->nullable();
                $table->text('version')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
