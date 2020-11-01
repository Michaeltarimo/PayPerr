<?php
/**
 * QuoteCategoryQuoteService
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
 * QuoteCategoryQuoteService
*/
class QuoteCategoryQuoteService extends AppModel
{
    protected $table = 'quote_categories_quote_services';
    public function quote_categories()
    {
        return $this->belongsTo('Models\QuoteCategory', 'quote_category_id', 'id');
    }
}
