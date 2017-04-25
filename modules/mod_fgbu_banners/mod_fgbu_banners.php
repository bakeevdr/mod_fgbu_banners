<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the banners functions only once
JLoader::register('ModFgbuBannersHelper', __DIR__ . '/helper.php');

$showlinktext = trim($params->get('showlinktext'));
$headerText = trim($params->get('header_text'));
$footerText = trim($params->get('footer_text'));

JLoader::register('BannersHelper', JPATH_ADMINISTRATOR . '/components/com_banners/helpers/banners.php');
BannersHelper::updateReset();
$list = &ModFgbuBannersHelper::getList($params);
$moduleclass_sfx	= htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
$itemclass_sfx		= htmlspecialchars($params->get('itemclass_sfx'), ENT_COMPAT, 'UTF-8');

require JModuleHelper::getLayoutPath('mod_fgbu_banners', $params->get('layout', 'default'));
