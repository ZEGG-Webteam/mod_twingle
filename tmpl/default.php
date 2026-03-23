<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_twingle
 *
 * @author      Benno Flory
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('jquery.framework');

//$lang       = JFactory::getLanguage();
$document   = JFactory::getDocument();
$project_id = $params->get('project_id', '0');
$type       = $params->get('type', 'widget');
$id         = '_' . ModTwingleHelper::generateRandomString(9);
$base_url   = 'https://spenden.twingle.de/embed/genericorganisation/genericproject';

// Get presets and pass to script loading url
$tw_params = [];
$tw_params['tw_amount'] = $params->get('tw_amount', '');
$tw_params['tw_target'] = $params->get('tw_target', '');
$tw_params['tw_rhythm'] = $params->get('tw_rhythm', '');
$tw_params['tw_min']    = $params->get('tw_min', '');
$tw_params['tw_max']    = $params->get('tw_max', '');
$url_params = [];
foreach (array_filter($tw_params) as $tw_key => $tw_value) {
  if ($tw_value != 'undefined') {
    $url_params[] = $tw_key . '=' . $tw_value;
  }
}
$url_params = implode('&', $url_params);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

/* Load external JS only once per page */
//if (!$twingle_js_loaded) {
    $document->addScriptDeclaration('
    (function() {
//      var u="' . $base_url . '/' . $project_id . '/' . $type . '/' . $id . '?' . $url_params . '"; // Buggy, form doesn´t load...
      var u="' . $base_url . '/' . $project_id . '/' . $type . '/' . $id . '";
      var d=document, g=d.createElement(\'script\'), s=d.getElementsByTagName(\'script\')[0];
      g.type=\'text/javascript\'; g.async=true; g.defer=true; g.src=u; s.parentNode.insertBefore(g,s);
    })();
  ');
//  $twingle_js_loaded = true;
//}
?>

<!-- twingle -->
  <div class="twingle<?php echo $moduleclass_sfx; ?> <?= $type; ?>">
    <div id="twingle-public-embed-<?= $id ?>"></div>
  </div>
<!-- twingle -->
