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
 * ExamAttend
*/
class ExamAttend extends AppModel
{
    protected $table = 'exam_attends';
    public $rules = array(
        'user_id' => 'sometimes|required',
        'exams_user_id' => 'sometimes|required',
        'exam_id' => 'sometimes|required',
    );
}
