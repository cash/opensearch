<?php
/**
 * Creates an OpenSearch description document from config.ini
 * http://www.opensearch.org/Specifications/OpenSearch/1.1
 */

$config_ini = dirname(dirname(dirname(dirname(__FILE__)))) . '/config.ini';
$config = parse_ini_file($config_ini);
if ($config == FALSE) {
	elgg_log("Unable to parse OpenSearch config file", 'ERROR');
	return TRUE;
}

extract($config);

$site = get_entity($CONFIG->site_guid);
$email = $site->email;

$rss_url = "{$vars['url']}pg/search/?q={searchTerms}&amp;view=opensearch_rss";
$html_url = "{$vars['url']}pg/search/?q={searchTerms}";

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
   <Image height="16" width="16" type="image/vnd.microsoft.icon"><?php echo "{$vars['url']}$ico"; ?></Image>
<?php endif; ?>
<?php if (isset($png)): ?>
   <Image height="64" width="64" type="image/png"><?php echo "{$vars['url']}$png"; ?></Image>
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
