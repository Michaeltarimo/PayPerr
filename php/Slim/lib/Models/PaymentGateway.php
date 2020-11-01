<?php
/**
 * PaymentGateway
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

class PaymentGateway extends AppModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payment_gateways';
    protected $fillable = array(
        'name',
        'description',
        'gateway_fees',
        'is_test_mode',
        'is_active',
        'is_enable_for_wallet',
        'display_name'
    );
    public function payment_settings()
    {
        return $this->hasMany('Models\PaymentGatewaySetting');
    }
    public function scopeFilter($query, $params = array())
    {
        parent::scopeFilter($query, $params);
        if (!empty($params['q'])) {
            $search = $params['q'];
            $query->where('display_name', 'ilike', "%$search%");
        }
    }
}
