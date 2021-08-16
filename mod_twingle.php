<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_twingle
 *
 * @author      Benno Flory
 * @copyright   Copyright (C) 2021 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the twingle functions only once
JLoader::register('ModTwingleHelper', __DIR__ . '/helper.php');

require JModuleHelper::getLayoutPath('mod_twingle', $params->get('layout', 'default'));
