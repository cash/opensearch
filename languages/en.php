<?php
/**
 * OpenSearch English language file
 */

$english = array(
	'opensearch:title' => "Search: %s",
	'opensearch:description' => "Search results for \"%s\"",
	'opensearch:engine' => "%s Search Engine",
	
	'opensearh:settings:shortname' => "Short name",
	'opensearh:settings:desc' => "Description",
	'opensearh:settings:longname' => "Long name",
	'opensearh:settings:icon' => "Icon",
	'opensearh:settings:tags' => "Tags",
	'opensearh:settings:lang' => "Language",
	'opensearh:settings:query' => "Query",
	'opensearh:settings:shortname:description' => "Contains a brief human-readable title that identifies this search engine. 16 characters or less of plain text. <strong>Required</strong>",
	'opensearh:settings:desc:description' => "Contains a human-readable text description of the search engine. 1024 characters or less of plain text. <strong>Required</strong>",
	'opensearh:settings:longname:description' => "Contains an extended human-readable title that identifies this search engine. 48 characters or less of plain text.",
	'opensearh:settings:icon:description' => "Contains a URL that identifies the location of an image that can be used in association with this search content. Can be either a 16x16 ico or 64x64 png or both. Clients will choose the image that best fits the display area. The value should be relative to your Elgg root.",
	'opensearh:settings:tags:description' => "Contains a set of words that are used as keywords to identify and categorize this search content. Tags must be a single word and are delimited by the space character (' '). 256 characters or less, space delimited tags",
	'opensearh:settings:lang:description' => "Contains a string that indicates that the search engine supports search results in the specified language. * or codes according to XML 1.0 Language Identification",
	'opensearh:settings:query:description' => "Test query available to clients. Clients can submit this as a test query to ensure that the OpenSearch interface works.",
	
);

add_translation("en", $english);
