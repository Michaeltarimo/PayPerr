<?php
/**
 * PricingDay
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
 * PricingDay
*/
class PricingDay extends AppModel
{
    protected $table = 'pricing_days';
    protected $fillable = array(
        'no_of_days',
        'global_price'
    );
    public $rules = array(
        'no_of_days' => 'sometimes|required',
        'global_price' => 'sometimes|required',
    );
    public function scopeFilter($query, $params = array())
    {
        parent::scopeFilter($query, $params);
        if (!empty($params['q'])) {
            $search = $params['q'];
            $query->orWhere('no_of_days', 'ilike', "%$search%");
            $query->orWhere('globalPrice', 'ilike', "%$search%");
        }
    }
    public function contest_types_pricing_days()
    {
        return $this->hasOne('Models\ContestTypesPricingDay', 'pricing_day_id', 'id');
    }
}
