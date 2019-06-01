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
 * Files renderer.
 *
 * @package    theme_waxed
 * @copyright  2017 Richard Oelmann
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_waxed\output\core;

use plugin_renderer_base;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/files/renderer.php');

/**
 * Rendering of files viewer related widgets.
 * @package   theme_waxed
 * @copyright 2016 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

//class files_renderer extends \theme_boost\output\core\files_renderer {
    // Error message when this class is not included, but even if empty it works.
//}
