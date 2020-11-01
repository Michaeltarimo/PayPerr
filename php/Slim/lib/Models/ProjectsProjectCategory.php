<?php
/**
 * ProjectsProjectCategory
 *
 * PHP version 5
 *
 * @category   PHP
 * @package    payperr
 * @subpackage Core
 * @author     omicron <omicron.tanzania@gmail.com>
 * @copyright  omicron software
 * @license    MIT
 * @link       http://www.payperr.com
 */
namespace Models;

/*
 * ProjectsProjectCategory
*/
class ProjectsProjectCategory extends AppModel
{
    protected $table = 'projects_project_categories';
    protected static function boot()
    {
        self::created(function ($projectsProjectCategory) {
            ProjectsProjectCategory::projectCategoryCountUpdation($projectsProjectCategory->project_category_id);
        });
        self::deleted(function ($projectsProjectCategory) {
            ProjectsProjectCategory::projectCategoryCountUpdation($projectsProjectCategory->project_category_id);
        });
    }
    public function project_categories()
    {
        return $this->belongsTo('Models\ProjectCategory', 'project_category_id', 'id');
    }
    public function project()
    {
        return $this->belongsTo('Models\Project', 'project_id', 'id');
    }
    public function projectCategoryCountUpdation($project_category_id)
    {
        $projectsProjectCategory = ProjectsProjectCategory::where('project_category_id', $project_category_id);
        $project_category_count = $projectsProjectCategory->count();
        $active_project_category_count = $projectsProjectCategory->whereHas('project', function ($q) {
            $q->where('project_status_id', \Constants\ProjectStatus::OpenForBidding);
        })->count();
        ProjectCategory::where('id', $project_category_id)->update(['project_count' => $project_category_count, 'active_project_count' => $active_project_category_count]);
    }
}
