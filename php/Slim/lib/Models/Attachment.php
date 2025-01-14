<?php
/**
 * Attachment
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

class Attachment extends AppModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attachments';
    public function foreigns()
    {
        return $this->morphMany('Models\Activity', 'foreign');
    }
    public function foreign_models()
    {
        return $this->morphMany('Models\Activity', 'foreign_model');
    }
    public function project()
    {
        return $this->belongsTo('Models\Project', 'foreign_id', 'id');
    }
    public function activity()
    {
        return $this->belongsTo('Models\Attachment', 'id', 'id')->with('project');
    }
}
