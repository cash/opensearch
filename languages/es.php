<?php
/**
 * OpenSearch Spanish language file
 */

$spanish = array( 
	'opensearch:title'  =>  "Búsqueda: %s" , 
	'opensearch:description'  =>  "Resultados de la búsqueda \"%s\"",
	'opensearch:engine' => "Motor de búsqueda de %s",
	
	'opensearh:settings:shortname' => "Nombre corto",
	'opensearh:settings:desc' => "Descripción",
	'opensearh:settings:longname' => "Nombre largo",
	'opensearh:settings:icon' => "Icono",
	'opensearh:settings:tags' => "Etiquetas",
	'opensearh:settings:lang' => "Idioma",
	'opensearh:settings:query' => "Petición",
	'opensearh:settings:shortname:description' => "Contiene un título breve para este motor de búsqueda. 16 carácteres o menos de texto plano. <strong>Requerido</strong>",
	'opensearh:settings:desc:description' => "Contiene una descripción del motor de búsqueda. 1024 carácteres o menos de texto plano. <strong>Requerido</strong>",
	'opensearh:settings:longname:description' => "Contiene un título más largo para este motor de búsqueda. 48 carácteres o menos de texto plano.",
	'opensearh:settings:icon:description' => "Contiene la URL de la localización de una imagen de icono. Puede ser un ico de 16x16 o un png 64x64 píxeles. El dirección debería ser relativa a la raíz de Elgg.",
	'opensearh:settings:tags:description' => "Continene un conjunto de palabras usadas como palabras clave para identificar y categorizar este contenido de búsqueda. Las etiquetas deberían ser palabras simples y delimtadas por espacios (' '). 256 carácteres o menos, etiquetas delimitadas por espacios",
	'opensearh:settings:lang:description' => "Contiene una cadena que indica que el motor de búsqueda soporta resultados de búsqueda en el idioma especificado. * o códigos acorde al XML 1.0 Language Identification",
	'opensearh:settings:query:description' => "Petición de prueba disponible para clientes. Los clientes pueden enviarlo como petición de prueba para asegurarse de que el interfaz OpenSearch funciona.",
	
); 

add_translation('es', $spanish); 
