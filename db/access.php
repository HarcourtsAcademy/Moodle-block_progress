<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Progress Bar capability setup
 *
 * @package    contrib
 * @subpackage block_progress
 * @copyright  2010 Michael de Raadt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') or die("Direct access to this location is not allowed.");

// Only define the capability if it doesn't already exist
if (!defined('BLOCK_PROGRESS_VIEW_OVERVIEW')) {
    define('BLOCK_PROGRESS_VIEW_OVERVIEW', 'block/progress:viewoverview');
}

$capabilities = array (
    BLOCK_PROGRESS_VIEW_OVERVIEW => array (
        'riskbitmask'   => RISK_PERSONAL,
        'captype'       => 'read',
        'contextlevel'  => CONTEXT_COURSE,
        'legecy'        => array (
            'guest'             => CAP_PROHIBIT,
            'student'           => CAP_PREVENT,
            'teacher'           => CAP_ALLOW,
            'editingteacher'    => CAP_ALLOW,
            'coursecreator'     => CAP_INHERIT,
            'admin'             => CAP_ALLOW
        )
    )
);