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
 * Social networking settings page file.
 *
 * @package    theme_waxed
 * @copyright  2016 Richard Oelmann
 * @copyright  theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* Social Network Settings */
$page = new admin_settingpage('theme_waxed_social', get_string('socialheading', 'theme_waxed'));
$page->add(new admin_setting_heading('theme_waxed_social', get_string('socialheadingsub', 'theme_waxed'),
        format_text(get_string('socialdesc' , 'theme_waxed'), FORMAT_MARKDOWN)));

// Website url setting.
$name = 'theme_waxed/website';
$title = get_string('website', 'theme_waxed');
$description = get_string('websitedesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Blog url setting.
$name = 'theme_waxed/blog';
$title = get_string('blog', 'theme_waxed');
$description = get_string('blogdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Facebook url setting.
$name = 'theme_waxed/facebook';
$title = get_string(        'facebook', 'theme_waxed');
$description = get_string(      'facebookdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Flickr url setting.
$name = 'theme_waxed/flickr';
$title = get_string('flickr', 'theme_waxed');
$description = get_string('flickrdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Twitter url setting.
$name = 'theme_waxed/twitter';
$title = get_string('twitter', 'theme_waxed');
$description = get_string('twitterdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Google+ url setting.
$name = 'theme_waxed/googleplus';
$title = get_string('googleplus', 'theme_waxed');
$description = get_string('googleplusdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// LinkedIn url setting.
$name = 'theme_waxed/linkedin';
$title = get_string('linkedin', 'theme_waxed');
$description = get_string('linkedindesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Tumblr url setting.
$name = 'theme_waxed/tumblr';
$title = get_string('tumblr', 'theme_waxed');
$description = get_string('tumblrdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Pinterest url setting.
$name = 'theme_waxed/pinterest';
$title = get_string('pinterest', 'theme_waxed');
$description = get_string('pinterestdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Instagram url setting.
$name = 'theme_waxed/instagram';
$title = get_string('instagram', 'theme_waxed');
$description = get_string('instagramdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// YouTube url setting.
$name = 'theme_waxed/youtube';
$title = get_string('youtube', 'theme_waxed');
$description = get_string('youtubedesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Vimeo url setting.
$name = 'theme_waxed/vimeo';
$title = get_string('vimeo', 'theme_waxed');
$description = get_string('vimeodesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Skype url setting.
$name = 'theme_waxed/skype';
$title = get_string('skype', 'theme_waxed');
$description = get_string('skypedesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// General social url setting 1.
$name = 'theme_waxed/social1';
$title = get_string('sociallink', 'theme_waxed');
$description = get_string('sociallinkdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 1.
$name = 'theme_waxed/socialicon1';
$title = get_string('sociallinkicon', 'theme_waxed');
$description = get_string('sociallinkicondesc', 'theme_waxed');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 2.
$name = 'theme_waxed/social2';
$title = get_string('sociallink', 'theme_waxed');
$description = get_string('sociallinkdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 2.
$name = 'theme_waxed/socialicon2';
$title = get_string('sociallinkicon', 'theme_waxed');
$description = get_string('sociallinkicondesc', 'theme_waxed');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 3.
$name = 'theme_waxed/social3';
$title = get_string('sociallink', 'theme_waxed');
$description = get_string('sociallinkdesc', 'theme_waxed');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 3.
$name = 'theme_waxed/socialicon3';
$title = get_string('sociallinkicon', 'theme_waxed');
$description = get_string('sociallinkicondesc', 'theme_waxed');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
