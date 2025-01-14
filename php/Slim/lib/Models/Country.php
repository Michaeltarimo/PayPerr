<?php
/**
 * Country
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

class Country extends AppModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';
    protected $fillable = array(
        'iso_alpha2',
        'iso_alpha3',
        'iso_numeric',
        'fips_code',
        'name',
        'capital',
        'areainsqkm',
        'population',
        'continent',
        'tld',
        'currency',
        'currencyname',
        'phone',
        'postalcodeformat',
        'postalcoderegex',
        'languages',
        'geonameid',
        'neighbours',
        'equivalentfipscode'
    );
    public $rules = array(
        'name' => 'sometimes|required',
        'fips_code' => 'sometimes|max:2',
        'iso2' => 'sometimes|max:2',
        'iso3' => 'sometimes|max:3',
        'capital' => 'sometimes|alpha',
        'currency' => 'sometimes|max:3'
    );
    public $qSearchFields = array(
        'name'
    );
}
