<?php
/**
 * OpenSearch plugin
 *
 * http://www.opensearch.org/Home
 *
 * @author Cash Costello
 * @license http://opensource.org/licenses/gpl-2.0.php GPL 2
 */

elgg_register_event_handler('init', 'system', 'opensearch_init');

function opensearch_init() {
	elgg_register_page_handler('opensearch', 'opensearch_handler');
	elgg_extend_view('page/elements/head', 'opensearch/includes');
}

/**
 * Handles OpenSearch requests
 *
 * @param array $page An array of URL elements
 * @return bool
 */
function opensearch_handler($page) {
	switch ($page[0]) {
		case 'osd.xml':
			elgg_set_viewtype('xml');
			echo elgg_view_page('', elgg_view('opensearch/description'));
			return true;
			break;
	}
	return false;
}
