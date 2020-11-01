<?php
/**
 * ProjectCategory
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
 * ProjectCategory
*/
class ProjectCategory extends AppModel
{
    protected $table = 'project_categories';
    protected $fillable = array(
        'name',
        'is_active',
        'icon_class'
    );
    public $rules = array(
        'name' => 'sometimes|required',
        'is_active' => 'sometimes|required|boolean',
    );
}
