<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package   aggregator 
 * @author    Johannes Terhürne
 * @license   MIT License
 * @copyright Johannes Terhürne 2014 
 */
 
/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['aggregator'] = array(
	'tables' => array('tl_aggregator'),
	'icon'   => 'system/modules/aggregator/assets/icon.gif'
);

/**
 * Content elements
 */
 $GLOBALS['TL_CTE']['includes']['aggregator'] = 'ContentAggregator';
 
 /**
  * Register Cronjob
  */
$GLOBALS['TL_CRON']['minutely'][] = array('AggregatorEngine', 'checkForAggregatorUpdates');