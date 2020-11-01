<?php
/**
 * ZazPaymentGateway
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

class ZazpayPaymentGateway extends AppModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'zazpay_payment_gateways';
    public function zazpay_group()
    {
        return $this->belongsTo('Models\ZazpayPaymentGroup', 'zazpay_payment_group_id', 'id');
    }
    public function zazpayCallGetGateways($zazpay)
    {
        $s = getZazPayObject();
        return $s->callGetGateways();
    }
}
