<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_twingle
 *
 * @copyright   Copyright (C) 2021 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_twingle
 *
 * @since  3.0
 */
class ModTwingleHelper
{

  /**
   * Generate a random string of $length characters (0-9a-z)
   *
   * @return  string  Random string of $length characters
   *
   * @since   3.0
   */
  public static function generateRandomString($length = 10) {
    $range = '0123456789abcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle(str_repeat($x=$range, ceil($length/strlen($x)) )), 1, $length);
  }
  
}
