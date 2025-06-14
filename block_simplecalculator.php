<?php
// Copyright (C) 2025 Your Name <you@example.com>

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


defined('MOODLE_INTERNAL') || die();

/**
 * Block Simple Calculator.
 *
 * @package    block_simplecalculator
 * @copyright  2025 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_simplecalculator extends block_base {
        /**
     * Initializes the block title.
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_simplecalculator');
    }

        /**
     * Returns the block content.
     *
     * @return stdClass
     */
    public function get_content() {
        global $PAGE;
        if ($this->content !== null) {
            return $this->content;
        }
        $this->content = new stdClass();
        $this->content->text = $this->content_html();
        $this->content->footer = '';
        return $this->content;
    }

        /**
     * Returns the calculator HTML.
     *
     * @return string
     */
    private function content_html() {
        global $OUTPUT, $PAGE;
        $PAGE->requires->js_call_amd('block_simplecalculator/calculator', 'init');
        return $OUTPUT->render_from_template('block_simplecalculator/calculator', []);
    }

        /**
     * Returns where the block can be added.
     *
     * @return array
     */
    public function applicable_formats() {
        return ['all' => true];
    }
}
