<?php

/**
 * Project:     Securimage: A PHP class for creating and managing form CAPTCHA images<br />
 * File:        securimage_play.php<br />
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or any later version.<br /><br />
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.<br /><br />
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA<br /><br />
 *
 * Any modifications to the library should be indicated clearly in the source code
 * to inform users that the changes are not a part of the original software.<br /><br />
 *
 * If you found this script useful, please take a quick moment to rate it.<br />
 * http://www.hotscripts.com/rate/49400.html  Thanks.
 *
 * @link http://www.phpcaptcha.org Securimage PHP CAPTCHA
 * @link http://www.phpcaptcha.org/latest.zip Download Latest Version
 * @link http://www.phpcaptcha.org/Securimage_Docs/ Online Documentation
 * @copyright 2012 Drew Phillips
 * @author Drew Phillips <drew@drew-phillips.com>
 * @version 3.2RC2 (April 2012)
 * @package Securimage
 *
 */
 
 /* http://www.phpcaptcha.org/faq/#comment-1193
 * It is common for other software platforms (forums, content management systems, form processors etc.) 
 *to use a session name other than the PHP default. If this is the case, you must determine what session name 
 *is used by the software and use the same session name in securimage_show.php and securimage_play.php.
 *
 *A non-default session name can be passed to Securimage so it can share a session with another software platform 
 *with the following code: $img->session_name = ‘your_session_name’;
 *
 *Note: Securimage will NEVER destroy a session so it is safe to use with systems that persist user data with sessions; 
 *it only changes its own session variables.
 */



require_once dirname(__FILE__) . '/securimage.php';

$img = new Securimage();

// You can customize the image by making changes below, some examples are included - remove the "//" to uncomment

// $img->session_name = '__elgg_session'; //Added by thomas to see if the elgg session_name will work   '__elgg_session'
// $img->session_name = ‘Elgg’; //Added by thomas to see if the elgg session_name will work
// To use an alternate language, uncomment the following and download the files from phpcaptcha.org
// $img->audio_path = $img->securimage_path . '/audio/es/';

// If you have more than one captcha on a page, one must use a custom namespace
// $img->namespace = 'form2';

$img->outputAudioFile();
