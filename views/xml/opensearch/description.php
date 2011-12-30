<?php
/**
 * Creates an OpenSearch description document from plugin settings
 * http://www.opensearch.org/Specifications/OpenSearch/1.1
 */

// reset cache headers because IE8 is stupid
header('Pragma: public', true);
header('Cache-Control: public', true);

$site = elgg_get_site_entity();
$email = $site->email;

$shortname = elgg_get_plugin_setting('shortname', 'opensearch');
$description = elgg_get_plugin_setting('desc', 'opensearch');
$longname = elgg_get_plugin_setting('longname', 'opensearch');
$icon = elgg_get_plugin_setting('icon', 'opensearch');
$tags = elgg_get_plugin_setting('tags', 'opensearch');
$lang = string_to_tag_array(elgg_get_plugin_setting('lang', 'opensearch'));
$query = elgg_get_plugin_setting('query', 'opensearch');

if (empty($shortname)) {
	$shortname = $site->name;
}
if (empty($description)) {
	$description = elgg_echo('opensearch:engine', array(elgg_get_site_entity()->name));
}
if (empty($icon)) {
	$icon = '_graphics/favicon.ico';
}
if (empty($lang)) {
	$lang = 'en-us';
}


$rss_url = elgg_normalize_url('search/?q={searchTerms}&view=opensearch_rss');
$rss_url = elgg_format_url($rss_url);
$html_url = elgg_normalize_url('search/?q={searchTerms}');
$site_url = elgg_get_site_url();

?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
   <ShortName><?php echo $shortname; ?></ShortName>
   <Description><?php echo $description; ?></Description>
<?php if (isset($longname)): ?>
   <LongName><?php echo $longname; ?></LongName>
<?php endif; ?>
   <Contact><?php echo $site->email; ?></Contact>
   <Url type="text/html" template="<?php echo $html_url; ?>"/>
   <Url type="application/rss+xml" template="<?php echo $rss_url; ?>"/>
<?php if (preg_match("/.ico$/", $icon)): ?>
   <Image height="16" width="16" type="image/vnd.microsoft.icon"><?php echo "{$site_url}$icon"; ?></Image>
<?php elseif (preg_match("/.png$/", $icon)): ?>
   <Image height="64" width="64" type="image/png"><?php echo "{$site_url}$icon"; ?></Image>
<?php endif; ?>
<?php if (isset($tags)): ?>
   <Tags><?php echo $tags; ?></Tags>
<?php endif; ?>
<?php if (isset($query)): ?>
   <Query role="example" searchTerms="<?php echo $query; ?>" />
<?php endif; ?>
<?php
if (isset($lang)):
	foreach ($lang as $language):
?>
   <Language><?php echo $language; ?></Language>
<?php
	endforeach;
endif;
?>
   <SyndicationRight>open</SyndicationRight>
   <AdultContent>false</AdultContent>
   <OutputEncoding>UTF-8</OutputEncoding>
   <InputEncoding>UTF-8</InputEncoding>
 </OpenSearchDescription>
