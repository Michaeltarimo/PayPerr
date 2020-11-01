<?php
/**
 * Core configurations
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
$settings = Models\Setting::all();
foreach ($settings as $setting) {
    define($setting->name, $setting->value);
}
$upload_service_settings = Models\UploadServiceSetting::all();
foreach ($upload_service_settings as $upload_service_setting) {
    define($upload_service_setting->name, $upload_service_setting->value);
}
