<?php
/**
 * Opensearch plugin settings
 */

// set default value
if (!isset($vars['entity']->shortname)) {
	$vars['entity']->shortname = elgg_get_site_entity()->name;
}
if (!isset($vars['entity']->desc)) {
	$vars['entity']->desc = elgg_echo('opensearch:engine', array(elgg_get_site_entity()->name));
}
if (!isset($vars['entity']->longname)) {
	$vars['entity']->longname = elgg_get_site_entity()->description;
}
if (!isset($vars['entity']->icon)) {
	$vars['entity']->icon = '_graphics/favicon.ico';
}
if (!isset($vars['entity']->tags)) {
	$vars['entity']->tags = '';
}
if (!isset($vars['entity']->lang)) {
	$vars['entity']->lang = 'en-us';
}
if (!isset($vars['entity']->query)) {
	$vars['entity']->query = '';
}

echo '<div>';
echo '<label>'.elgg_echo('opensearh:settings:shortname').'</label> ';
echo elgg_echo('opensearh:settings:shortname:description');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[shortname]',
	'value' => $vars['entity']->shortname,
));
echo '</div>';

echo '<div>';
echo '<label>'.elgg_echo('opensearh:settings:desc').'</label> ';
echo elgg_echo('opensearh:settings:desc:description');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[desc]',
	'value' => $vars['entity']->desc,
));
echo '</div>';

echo '<div>';
echo '<label>'.elgg_echo('opensearh:settings:longname').'</label> ';
echo elgg_echo('opensearh:settings:longname:description');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[longname]',
	'value' => $vars['entity']->longname,
));
echo '</div>';

echo '<div>';
echo '<label>'.elgg_echo('opensearh:settings:icon').'</label> ';
echo elgg_echo('opensearh:settings:icon:description');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[icon]',
	'value' => $vars['entity']->icon,
));
echo '</div>';

echo '<div>';
echo '<label>'.elgg_echo('opensearh:settings:tags').'</label> ';
echo elgg_echo('opensearh:settings:tags:description');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[tags]',
	'value' => $vars['entity']->tags,
));
echo '</div>';

echo '<div>';
echo '<label>'.elgg_echo('opensearh:settings:lang').'</label> ';
echo elgg_echo('opensearh:settings:lang:description');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[lang]',
	'value' => $vars['entity']->lang,
));
echo '</div>';

echo '<div>';
echo '<label>'.elgg_echo('opensearh:settings:query').'</label> ';
echo elgg_echo('opensearh:settings:query:description');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[query]',
	'value' => $vars['entity']->query,
));
echo '</div>';
