<?php
/**
 * QuestionCategory
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
 * QuestionCategory
*/
class QuestionAnswerOptions extends AppModel
{
    protected $table = 'question_answer_options';
    public $rules = array(
        'option' => 'sometimes|required',
    );
}
