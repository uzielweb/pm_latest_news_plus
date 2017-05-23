<?php
/**
 * @copyright	Copyright © 2017 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @generator	http://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
/* Available fields:"category","count","show_featured","author","thumbnail_width","thumbnail_height","crop_proportion","items_per_row","default_thumbnail","text_limit","show_title","link_in_title","show_category","show_link_in_category","show_read_more","big_slider","big_slider_counting","autoplay","auto_play_big_slider","auto_play_articles_slider","show_navigation","animatein_big_slider","animateout_big_slider","animatein_articles_slider","animateout_articles_slider", */
// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_pm_latest_news_plus/assets/css/style.css");
$doc->addScript(JURI::root()."modules/mod_pm_latest_news_plus/assets/js/script.js");
// $width 			= $params->get("width");

/**
	$db = JFactory::getDBO();
	$db->setQuery("SELECT * FROM #__mod_pm_latest_news_plus where del=0 and module_id=".$module->id);
	$objects = $db->loadAssocList();
*/
require JModuleHelper::getLayoutPath('mod_pm_latest_news_plus', $params->get('layout', 'default'));