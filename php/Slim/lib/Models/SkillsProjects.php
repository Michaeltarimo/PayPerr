<?php
/**
 * SkillsProjects
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
 * SkillsProjects
*/
class SkillsProjects extends AppModel
{
    protected $table = 'skills_projects';
    public $timestamps = false;
    public function skills()
    {
        return $this->belongsTo('Models\Skill', 'skill_id', 'id');
    }
}
