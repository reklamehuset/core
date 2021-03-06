<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5.3
 * @copyright  Leo Feyer 2005-2012
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Config
 * @license    LGPL
 */


/**
 * Operating systems (check Windows CE before Windows and Android before Linux!)
 */
$GLOBALS['TL_CONFIG']['os'] = array
(
	'Macintosh'     => array('os'=>'mac',        'mobile'=>false),
	'Windows CE'    => array('os'=>'win-ce',     'mobile'=>true),
	'Windows Phone' => array('os'=>'win-ce',     'mobile'=>true),
	'Windows'       => array('os'=>'win',        'mobile'=>false),
	'iPad'          => array('os'=>'ios',        'mobile'=>false),
	'iPhone'        => array('os'=>'ios',        'mobile'=>true),
	'iPod'          => array('os'=>'ios',        'mobile'=>true),
	'Android'       => array('os'=>'android',    'mobile'=>true),
	'Blackberry'    => array('os'=>'blackberry', 'mobile'=>true),
	'Symbian'       => array('os'=>'symbian',    'mobile'=>true),
	'WebOS'         => array('os'=>'webos',      'mobile'=>true),
	'Linux'         => array('os'=>'unix',       'mobile'=>false),
	'FreeBSD'       => array('os'=>'unix',       'mobile'=>false),
	'OpenBSD'       => array('os'=>'unix',       'mobile'=>false),
	'NetBSD'        => array('os'=>'unix',       'mobile'=>false),
);


/**
 * Browsers (check OmniWeb before Safari and Opera Mini/Mobi before Opera!)
 */
$GLOBALS['TL_CONFIG']['browser'] = array
(
	'MSIE'       => array('browser'=>'ie',           'shorty'=>'ie', 'engine'=>'trident', 'version'=>'/^.*?MSIE (\d+(\.\d+)*).*$/'),
	'Firefox'    => array('browser'=>'firefox',      'shorty'=>'fx', 'engine'=>'gecko',   'version'=>'/^.*Firefox\/(\d+(\.\d+)*).*$/'),
	'Chrome'     => array('browser'=>'chrome',       'shorty'=>'ch', 'engine'=>'webkit',  'version'=>'/^.*Chrome\/(\d+(\.\d+)*).*$/'),
	'OmniWeb'    => array('browser'=>'omniweb',      'shorty'=>'ow', 'engine'=>'webkit',  'version'=>'/^.*Version\/(\d+(\.\d+)*).*$/'),
	'Safari'     => array('browser'=>'safari',       'shorty'=>'sf', 'engine'=>'webkit',  'version'=>'/^.*Version\/(\d+(\.\d+)*).*$/'),
	'Opera Mini' => array('browser'=>'opera-mini',   'shorty'=>'oi', 'engine'=>'presto',  'version'=>'/^.*Opera Mini\/(\d+(\.\d+)*).*$/'),
	'Opera Mobi' => array('browser'=>'opera-mobile', 'shorty'=>'om', 'engine'=>'presto',  'version'=>'/^.*Version\/(\d+(\.\d+)*).*$/'),
	'Opera'      => array('browser'=>'opera',        'shorty'=>'op', 'engine'=>'presto',  'version'=>'/^.*Version\/(\d+(\.\d+)*).*$/'),
	'IEMobile'   => array('browser'=>'ie-mobile',    'shorty'=>'im', 'engine'=>'trident', 'version'=>'/^.*IEMobile (\d+(\.\d+)*).*$/'),
	'Camino'     => array('browser'=>'camino',       'shorty'=>'ca', 'engine'=>'gecko',   'version'=>'/^.*Camino\/(\d+(\.\d+)*).*$/'),
	'Konqueror'  => array('browser'=>'konqueror',    'shorty'=>'ko', 'engine'=>'webkit',  'version'=>'/^.*Konqueror\/(\d+(\.\d+)*).*$/')
);
