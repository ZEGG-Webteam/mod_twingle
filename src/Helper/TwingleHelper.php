<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_twingle
 *
 * @author      Benno Flory
 * @copyright   Copyright (C) 2021 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\Twingle\Site\Helper;

/**
 * Helper for mod_twingle
 *
 * @since  2.0.0
 */
class TwingleHelper
{
    /**
     * Generate a random string of $length characters (0-9a-z)
     *
     * @param   int  $length  Length of the random string
     *
     * @return  string  Random string of $length characters
     *
     * @since   2.0.0
     */
    public function generateRandomString(int $length = 10): string
    {
        $range = '0123456789abcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle(str_repeat($range, (int) ceil($length / strlen($range)))), 1, $length);
    }
}
