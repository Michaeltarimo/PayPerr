<?php
/**
 * ExamAnswer
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
 * ExamStatus
*/
class ExamStatus extends AppModel
{
    protected $table = 'exam_statuses';
    public $qSearchFields = array(
        'name'
    );
    public function scopeFilter($query, $params = array())
    {
        parent::scopeFilter($query, $params);
    }
}
