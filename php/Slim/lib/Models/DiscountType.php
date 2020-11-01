<?php
/**
 * DiscountType
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
 * DiscountType
*/
class DiscountType extends AppModel
{
    protected $table = 'discount_types';
    protected $fillable = array(
        'id',
        'created_at',
        'updated_at',
        'name',
    );
    public $rules = array();
}
