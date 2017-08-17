<?php

/**
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 3 of the License, or (at
 *   your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful, but
 *   WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 *   General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program; if not, see <http://www.gnu.org/licenses/>.
 *
 *   @author          BlackBird Webprogrammierung
 *   @copyright       2017, BlackBird Webprogrammierung
 *   @link            https://blackcat-cms.org
 *   @license         http://www.gnu.org/licenses/gpl.html
 *   @category        CAT_Templates
 *   @package         Parallel
 *
 */

if (defined('CAT_PATH')) {
    if (defined('CAT_VERSION')) include(CAT_PATH.'/framework/class.secure.php');
} elseif (file_exists($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php')) {
    include($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php');
} else {
    $subs = explode('/', dirname($_SERVER['SCRIPT_NAME']));    $dir = $_SERVER['DOCUMENT_ROOT'];
    $inc = false;
    foreach ($subs as $sub) {
        if (empty($sub)) continue; $dir .= '/'.$sub;
        if (file_exists($dir.'/framework/class.secure.php')) {
            include($dir.'/framework/class.secure.php'); $inc = true;    break;
        }
    }
    if (!$inc) trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
}

$template_name = "Parallel";
$template_directory = "parallel";
$template_type = "template";
$template_function = "template";
$template_description = "Basierend auf dem freien Wordpress Template Parallel Lite (http://demo.themely.com/parallel/)";
$template_version = "0.1";
$template_platform = "1.3";
$template_author = "BlackBird Webprogrammierung";
$template_guid = "E8E07DA9-9B3B-E560-E173-3836540352B3";
$template_license = "GNU General Public License";

$template_variants = array('onepager','default');

// blocks for default variant
$blocks['default']  = array( 2 => 'header', 1 => 'content' );

// blocks for onepager variant
$blocks['onepager'] = array(
    1 => 'header',
    2 => 'benefits',
    3 => 'testimonials',
    4 => 'work',
    5 => 'gallery',
    6 => 'grid',
    7 => 'pricing',
    8 => 'map',
);

// no need to add default blocks to variant "default"; there will be a
// WYSIWYG section in the content block und nothing in the header which
// should be fine

$auto_add_modules = array(
    'onepager' => array(
        // note: there will always be a WYSIWYG section on block 1 that is added
        // by the page creation mechanism
        array(
            'block' => 2,
            'module' => 'cc_multicolumn',
            'fallback' => 'wysiwyg',
            'name' => 'benefits',
        ),
        array(
            'block' => 3,
            'module' => 'cc_multicolumn',
            'fallback' => 'wysiwyg',
            'name' => 'testimonials',
        ),
        array(
            'block' => 4,
            'module' => 'cc_multicolumn',
            'fallback' => 'wysiwyg',
            'name' => 'work',
        ),
        array(
            'block' => 5,
            'module' => 'cc_catgallery',
            'fallback' => 'wysiwyg',
            'name' => 'gallery',
        ),
        array(
            'block' => 6,
            'module' => 'cc_multicolumn',
            'fallback' => 'wysiwyg',
            'name' => 'grid',
        ),
        array(
            'block' => 7,
            'module' => 'cc_multicolumn',
            'fallback' => 'wysiwyg',
            'name' => 'pricing',
        ),
        array(
            'block' => 8,
            'module' => 'LeafletMaps',
            'fallback' => 'wysiwyg',
            'name' => 'map',
        )
    )
);