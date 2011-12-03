<?php
/**
 * Creates an OpenSearch description document from config.ini
 * http://www.opensearch.org/Specifications/OpenSearch/1.1
 */

// reset cache headers because IE8 is stupid
header('Pragma: public', true);
header('Cache-Control: public', true);

$config_ini = dirname(dirname(dirname(dirname(__FILE__)))) . '/config.ini';
$config = parse_ini_file($config_ini);
if ($config == false) {
	elgg_log("Unable to parse OpenSearch config file", 'ERROR');
	return true;
}

extract($config);

$site = elgg_get_site_entity();
$email = $site->email;

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
<?php if (isset($ico)): ?>
   <Image height="16" width="16" type="image/vnd.microsoft.icon"><?php echo "{$site_url}$ico"; ?></Image>
<?php endif; ?>
<?php if (isset($png)): ?>
   <Image height="64" width="64" type="image/png"><?php echo "{$site_url}$png"; ?></Image>
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
