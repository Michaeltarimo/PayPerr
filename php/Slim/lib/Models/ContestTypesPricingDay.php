<?php
/**
 * ContestTypesPricingDay
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
 * ContestTypesPricingDay
*/
class ContestTypesPricingDay extends AppModel
{
    protected $table = 'contest_types_pricing_days';
    protected $fillable = array(
        'contest_type_id',
        'pricing_day_id',
        'price'
    );
    public $rules = array(
        'contest_type_id' => 'sometimes|required',
        'pricing_day_id' => 'sometimes|required',
    );
    public function contest_type()
    {
        return $this->belongsTo('Models\ContestType', 'contest_type_id', 'id');
    }
    public function pricing_day()
    {
        return $this->belongsTo('Models\PricingDay', 'pricing_day_id', 'id');
    }
}
