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
 * mod/reader/tabs_dl.php
 *
 * @package    mod
 * @subpackage reader
 * @copyright  2013 Gordon Bateson (gordon.bateson@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 2.0
 */

/** Prevent direct access to this script */
defined('MOODLE_INTERNAL') || die;

$tabs = array();
$row  = array();
$inactive = array();
$activated = array();

$row[] = new tabobject('quizzes', "view.php?a=quizzes&id=".$id, "Quizzes");
$row[] = new tabobject('admin', "admin.php?a=admin&id=".$id, "Admin Area");
$row[] = new tabobject('admin2x', 'admin/download.php?id='.$id, 'Admin 2.x');
$row[] = new tabobject('download', "", "Download Quizzes");

$tabs[] = $row;

print_tabs($tabs, 'download', $inactive, $activated);
