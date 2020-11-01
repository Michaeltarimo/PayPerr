<?php
/**
 * DisputeClosedType
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
 * DisputeClosedType
*/
class DisputeClosedType extends AppModel
{
    protected $table = 'dispute_closed_types';
    public $rules = array();
    public function scopeFilter($query, $params = array())
    {
        parent::scopeFilter($query, $params);
        if (!empty($params['dispute_open_type_id'])) {
            $query->where('dispute_open_type_id', $params['dispute_open_type_id']);
        }
        if (!empty($params['project_role_id'])) {
            $query->where('project_role_id', $params['project_role_id']);
        }
    }
}
