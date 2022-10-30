<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insetJobsDataSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=100; $i++) {
            DB::table('jobs')->insert([
                'name' => 'キャビンアテンダント', 
                'job_category_id' => rand(1,100), 
                'job_type_id' => rand(1,100), 
                'description' => 'キャビンアテンダント', 
                'detail' => 'キャビンアテンダント', 
                'business_skill' => 'キャビンアテンダント', 
                'knowledge' => 'キャビンアテンダント', 
                'location' => 'キャビンアテンダント', 
                'activity' => 'キャビンアテンダント', 
                'salary_statistic_group' => 'キャビンアテンダント', 
                'salary_range_remarks' => 'キャビンアテンダント', 
                'restriction' => 'キャビンアテンダント', 
                'remarks' => 'キャビンアテンダント', 
                'publish_status' => 1
            ]);
        }
    }
}
