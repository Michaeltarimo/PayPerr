<?php
/**
 * SalaryType
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
 * SalaryType
*/
class SalaryType extends AppModel
{
    protected $table = 'salary_types';
    protected $fillable = array(
        'name',
        'is_active'
    );
    public $rules = array(
        'name' => 'sometimes|required',
    );
    public $qSearchFields = array(
        'name'
    );
}
