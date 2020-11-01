<?php
/**
 * OauthRefreshToken
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

class OauthRefreshToken extends AppModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oauth_refresh_tokens';
    public function user()
    {
        return $this->belongsTo('Models\User', 'user_id', 'username')->select('id', 'role_id');
    }
}
