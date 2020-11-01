<?php
/**
 * ExamCategory
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
 * ExamCategory
*/
class ExamCategory extends AppModel
{
    protected $table = 'exam_categories';
    protected $fillable = array(
        'name'
    );
    public $rules = array(
        'name' => 'sometimes|required',
        'exam_count' => 'sometimes|required',
    );
    public function exam()
    {
        return $this->hasMany('Models\Exam', 'id', 'exam_category_id ')->with('attachment', 'exam_level');
    }
}
