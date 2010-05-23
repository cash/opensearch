<?php

$url = "{$vars['url']}pg/opensearch/osd.xml";
$title = $vars['config']->sitename;
?>

<link rel="search" type="application/opensearchdescription+xml" href="<?php echo $url; ?>" title="<?php echo $title; ?>" />
