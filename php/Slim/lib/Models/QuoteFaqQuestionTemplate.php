<?php
/**
 * QuoteFaqQuestionTemplate
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
 * QuoteFaqQuestionTemplate
*/
class QuoteFaqQuestionTemplate extends AppModel
{
    protected $table = 'quote_faq_question_templates';
    protected $fillable = array(
        'question',
        'is_active'
    );
    public $rules = array(
        'question' => 'sometimes|required',
    );
    public function scopeFilter($query, $params = array())
    {
        parent::scopeFilter($query, $params);
        if (!empty($params['q'])) {
            $query->where('question', 'ilike', '%' . $params['q'] . '%');
        }
        return $query;
    }
}
