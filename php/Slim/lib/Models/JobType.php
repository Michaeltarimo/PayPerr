<?php
/**
 * JobType
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
 * JobType
*/
class JobType extends AppModel
{
    protected $table = 'job_types';
    protected $fillable = array(
        'name',
        'is_active'
    );
    public $rules = array(
        'name' => 'sometimes|required',
        'is_active' => 'sometimes|required|boolean',
    );
    public function ip()
    {
        return $this->belongsTo('Models\Ip', 'ip_id', 'id');
    }
    public function scopeFilter($query, $params = array())
    {
        parent::scopeFilter($query, $params);
        if (!empty($params['q'])) {
            $query->Where('name', 'ilike', '%' . $params['q'] . '%');
        }
    }
}
