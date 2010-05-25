<?php

global $OPEN_SEARCH_COUNT;

header("Content-Type: application/rss+xml");

// allow caching as required by stupid MS products for https feeds.
header('Pragma: public', TRUE);

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

// Set title
$search_terms = get_input('q');
$title = $vars['config']->sitename;
$title .= ' ' . sprintf(elgg_echo('opensearch:title'), $search_terms);

$description = sprintf(elgg_echo('opensearch:description'), $search_terms);

// Remove viewtype from URL
$search_url = str_replace('&view=opensearch_rss','', full_url());

$os_url = "{$vars['url']}pg/opensearch/osd.xml";


?>
<rss version="2.0" xmlns:opensearch="http://a9.com/-/spec/opensearch/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
	<title><?php echo $title; ?></title>
	<link><?php echo $search_url; ?></link>
	<description><?php echo $description; ?></description>
	<opensearch:totalResults><?php echo $OPEN_SEARCH_COUNT; ?></opensearch:totalResults>
	<atom:link rel="search" type="application/opensearchdescription+xml" href="<?php echo $os_url; ?>"/>
	<opensearch:Query role="request" searchTerms="<?php echo addslashes($search_terms); ?>" startPage="1" />
<?php

		echo $vars['body'];

?>
</channel>
</rss>
