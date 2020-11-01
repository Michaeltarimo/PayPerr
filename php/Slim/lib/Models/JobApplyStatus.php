<?php
/**
 * JobApplyStatus
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
 * JobApplyStatus
*/
class JobApplyStatus extends AppModel
{
    protected $table = 'job_apply_statuses';
    public $rules = array(
        'name' => 'sometimes|required',
    );
    public function scopeFilter($query, $params = array())
    {
        parent::scopeFilter($query, $params);
        if (!empty($params['q'])) {
            $query->Where('name', 'ilike', '%' . $params['q'] . '%');
        }
    }
}
