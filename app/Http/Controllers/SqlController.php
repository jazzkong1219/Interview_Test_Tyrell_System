<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SqlController extends Controller
{
    public function index()
    {
        $start = microtime(true);

        $sql = DB::table('jobs')
            ->leftJoin('jobs_personalities', 'jobs_personalities.job_id', 'jobs.id')
            ->leftJoin('personalities', 'personalities.id', 'jobs_personalities.personality_id')
            ->leftJoin('jobs_practical_skills', 'jobs_practical_skills.job_id', 'jobs.id')
            ->leftJoin('practical_skills', 'practical_skills.id', 'jobs_practical_skills.practical_skill_id')
            ->leftJoin('jobs_basic_abilities', 'jobs_basic_abilities.job_id', 'jobs.id')
            ->leftJoin('basic_abilities', 'basic_abilities.id', 'jobs_basic_abilities.basic_ability_id')
            ->leftJoin('jobs_tools', 'jobs_tools.job_id', 'jobs.id')
            ->leftJoin('affiliates as tools', 'tools.id', 'jobs_tools.affiliate_id')
            ->leftJoin('jobs_career_paths', 'jobs_career_paths.job_id', 'jobs.id')
            ->leftJoin('affiliates as career_paths', 'career_paths.id', 'jobs_career_paths.affiliate_id')
            ->leftJoin('jobs_rec_qualifications', 'jobs_rec_qualifications.job_id', 'jobs.id')
            ->leftJoin('affiliates as rec_qualifications', 'rec_qualifications.id', 'jobs_rec_qualifications.affiliate_id')
            ->leftJoin('jobs_req_qualifications', 'jobs_req_qualifications.job_id', 'jobs.id')
            ->leftJoin('affiliates as req_qualifications', 'req_qualifications.id', 'jobs_req_qualifications.affiliate_id')
            ->join('job_categories', 'job_categories.id', 'jobs.job_category_id')
            ->join('job_types', 'job_types.id', 'jobs.job_type_id')
            ->whereNull('personalities.deleted')
            ->whereNull('practical_skills.deleted')
            ->whereNull('basic_abilities.deleted')
            ->whereNull('tools.deleted')
            ->whereNull('career_paths.deleted')
            ->whereNull('rec_qualifications.deleted')
            ->whereNull('req_qualifications.deleted')
            ->whereNull('job_categories.deleted')
            ->whereNull('job_types.deleted')
            ->whereNull('jobs.deleted')
            ->where('tools.type', 1)
            ->where('career_paths.type', 3)
            ->where('rec_qualifications.type', 2)
            ->where('req_qualifications.type', 2)
            ->where('jobs.publish_status', 1)
            ->where('job_categories.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('job_types.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.description', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.detail', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.business_skill', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.knowledge', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.location', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.activity', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.salary_statistic_group', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.salary_range_remarks', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.restriction', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('jobs.remarks', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('personalities.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('practical_skills.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('basic_abilities.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('tools.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('career_paths.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('rec_qualifications.name', 'LIKE' , '%キャビンアテンダント%')
            ->orWhere('req_qualifications.name', 'LIKE' , '%キャビンアテンダント%')
            ->skip(0)
            ->take(50)
            ->get([
                'jobs.id AS Jobs__id',
                'jobs.name AS Jobs__name',
                'jobs.media_id AS Jobs__media_id', 
                'jobs.job_category_id AS Jobs__job_category_id', 
                'jobs.job_type_id AS Jobs__job_type_id', 
                'jobs.description AS Jobs__description', 
                'jobs.detail AS Jobs__detail',
                'jobs.business_skill AS Jobs__business_skill',
                'jobs.knowledge AS Jobs__knowledge',
                'jobs.location AS Jobs__location',
                'jobs.activity AS Jobs__activity',
                'jobs.academic_degree_doctor AS Jobs__academic_degree_doctor', 
                'jobs.academic_degree_master AS Jobs__academic_degree_master', 
                'jobs.academic_degree_professional AS Jobs__academic_degree_professional', 
                'jobs.academic_degree_bachelor AS Jobs__academic_degree_bachelor', 
                'jobs.salary_statistic_group AS Jobs__salary_statistic_group', 
                'jobs.salary_range_first_year AS Jobs__salary_range_first_year', 
                'jobs.salary_range_average AS Jobs__salary_range_average', 
                'jobs.salary_range_remarks AS Jobs__salary_range_remarks',
                'jobs.restriction AS Jobs__restriction', 
                'jobs.estimated_total_workers AS Jobs__estimated_total_workers', 
                'jobs.remarks AS Jobs__remarks',
                'jobs.url AS Jobs__url',
                'jobs.seo_description AS Jobs__seo_description', 
                'jobs.seo_keywords AS Jobs__seo_keywords', 
                'jobs.sort_order AS Jobs__sort_order',
                'jobs.publish_status AS Jobs__publish_status', 
                'jobs.version AS Jobs__version',
                'jobs.created_by AS Jobs__created_by',
                'jobs.created_at AS Jobs__created_at',
                'jobs.updated_at AS Jobs__updated_at',
                'jobs.deleted AS Jobs__deleted',

                'job_categories.id AS JobCategories__id', 
                'job_categories.name AS JobCategories__name', 
                'job_categories.sort_order AS JobCategories__sort_order', 
                'job_categories.created_by AS JobCategories__created_by', 
                'job_categories.created_at AS JobCategories__created_at', 
                'job_categories.updated_at AS JobCategories__updated_at', 
                'job_categories.deleted AS JobCategories__deleted', 

                'job_types.id AS JobTypes__id',
                'job_types.name AS JobTypes__name', 
                'job_types.job_category_id AS JobTypes__job_category_id', 
                'job_types.sort_order AS JobTypes__sort_order', 
                'job_types.created_by AS JobTypes__created_by', 
                'job_types.created_at AS JobTypes__created_at', 
                'job_types.updated_at AS JobTypes__updated_at', 
                'job_types.deleted AS JobTypes__deleted'
            ])
            ->groupBy('jobs.id')
            ->sortByDesc('jobs.sort_order');

        $time = (microtime(true) - $start) * 60;
        $result = 'query execute in ' . number_format((float)$time, 2, '.', '') . ' seconds';

        return dd($sql, $result);
    }
}
