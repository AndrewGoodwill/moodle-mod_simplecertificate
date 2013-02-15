<?php

/**
 * Code fragment to define the version of the simplecertificate module
 *
 * @package    mod
 * @subpackage simplecertificate
 * @copyright  Carlos Fonseca <carlos.alexandre@outlook.com>, Mark Nelson <mark@moodle.com.au>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or late
 */

$module->version  = 2013021500;  // The current module version (Date: YYYYMMDDXX)
$module->requires =  2012112900;  // Requires this Moodle version (moodle 2.3.x)
$module->cron     = 4 * 3600;    // Period for cron to check this module (secs)
$module->component = 'mod_simplecertificate';
$module->release  = '1.2.1';       // Human-friendly version name
$module->maturity = MATURITY_STABLE;