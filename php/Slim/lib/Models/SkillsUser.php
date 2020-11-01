<?php
/**
 * SkillsUser
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
 * SkillsUser
*/
class SkillsUser extends AppModel
{
    protected $table = 'skills_users';
    public $timestamps = false;
    public function skills()
    {
        return $this->belongsTo('Models\Skill', 'skill_id', 'id');
    }
}
