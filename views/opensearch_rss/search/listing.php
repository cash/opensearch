<?php

global $OPEN_SEARCH_COUNT;
if (!isset($OPEN_SEARCH_COUNT)) {
	$OPEN_SEARCH_COUNT = 0;
}

$OPEN_SEARCH_COUNT += $vars['results']['count'];


elgg_set_viewtype('rss');
$entities = $vars['results']['entities'];
foreach ($entities as $entity) {
	if ($view = search_get_search_view($vars['params'], 'entity')) {
		$body .= elgg_view($view, array(
			'entity' => $entity,
			'params' => $vars['params'],
			'results' => $vars['results']
		));
	}
}
elgg_set_viewtype('opensearch_rss');

echo $body;