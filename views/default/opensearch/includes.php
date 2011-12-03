<?php
/**
 * OpenSearch head include
 */

$url = elgg_normalize_url('opensearch/osd.xml');
$title = elgg_get_site_entity()->name;
?>

<link rel="search" type="application/opensearchdescription+xml" href="<?php echo $url; ?>" title="<?php echo $title; ?>" />
