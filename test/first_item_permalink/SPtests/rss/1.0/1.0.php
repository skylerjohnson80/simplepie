<?php

$data = <<<EOD
<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://purl.org/rss/1.0/">
	<item>
		<link>http://example.com/</link>
	</item>
</rdf:RDF>
EOD;

$expected = 'http://example.com/';

?>