<?php
/**
 * ProjectRange
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
 * ProjectRange
*/
class ProjectRange extends AppModel
{
    protected $table = 'project_ranges';
    protected $fillable = array(
        'name',
        'min_amount',
        'max_amount',
        'is_active'
    );
    public $qSearchFields = array(
        'name'
    );
    public $rules = array(
        'name' => 'sometimes|required',
        'min_amount' => 'sometimes|required',
        'max_amount' => 'sometimes|required',
        'is_active' => 'sometimes|required|boolean',
    );
    public function user()
    {
        return $this->belongsTo('Models\User', 'user_id', 'id');
    }
    public function scopeFilter($query, $params = array())
    {
        parent::scopeFilter($query, $params);
    }
}
