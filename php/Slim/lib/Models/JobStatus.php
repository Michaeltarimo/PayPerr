<?php
/**
 * JobStatus
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
 * JobStatus
*/
class JobStatus extends AppModel
{
    protected $table = 'job_statuses';
    public $rules = array();
    public $qSearchFields = array(
        'name'
    );
}
