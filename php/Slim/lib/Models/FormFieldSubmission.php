<?php
/**
 * FormFieldSubmission
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
 * FormFieldSubmission
*/
class FormFieldSubmission extends AppModel
{
    protected $table = 'form_field_submissions';
    protected $fillable = array(
        'field'
    );
    public $rules = array();
    public function form_field()
    {
        return $this->hasMany('Models\FormField', 'id', 'form_field_id')->with('input_types');
    }
}
