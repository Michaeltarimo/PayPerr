<?php
/**
 * ProjectBidInvoiceItems
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
 * ProjectBidInvoiceItems
*/
class ProjectBidInvoiceItems extends AppModel
{
    protected $table = 'project_bid_invoice_items';
    protected $fillable = array(
        'amount',
        'description'
    );
    public $rules = array();
}
