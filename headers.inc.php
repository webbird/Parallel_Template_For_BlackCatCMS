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


$mod_headers = array(
    'frontend' => array(
        'meta' => array(
            array('charset'=>(defined('DEFAULT_CHARSET') ? DEFAULT_CHARSET : "utf-8")),
            array('http-equiv'=>'X-UA-Compatible','content'=>'IE=edge'),
            array('name'=>'viewport','content'=>"width=device-width, initial-scale=1.0"),
        ),
        'js'  => array(
            '/modules/lib_jquery/jquery-core/jquery-migrate-3.0.0.min.js',
            '/templates/parallel/js/header.js',
            '/templates/parallel/js/navigation.js',
            '/templates/parallel/js/jquery.scrollreveal.min.js',
            '/templates/parallel/js/frontend.js',
        ),
        'css' => array(
            array('file'=>'/modules/lib_bootstrap/vendor/css/default/bootstrap.min.css','media'=>'all'),
            array('file'=>'/templates/parallel/css/multi-columns-row.css','media'=>'all'),
            array('file'=>'/templates/parallel/css/style.css','media'=>'all'),
            array('file'=>'/modules/lib_bootstrap/vendor/css/font-awesome.min.css','media'=>'all'),
        ),
        'jquery' => array( 'core' => true, 'ui' => true ),
    ),
);

global $page_id;
$variant  = CAT_Helper_Page::getPageSettings($page_id,'internal','template_variant');
if(!$variant)
    $variant = ( defined('DEFAULT_TEMPLATE_VARIANT') && DEFAULT_TEMPLATE_VARIANT != '' )
             ? DEFAULT_TEMPLATE_VARIANT
             : 'default';

