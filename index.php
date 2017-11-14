<?php

/* Page Content Type */
header('Content-Type: application/json');
//header('Content-Type: text/plain'); /* Resource interpreted as Document but transferred with MIME type application/json */

/* Page Character Set */
header('charset="utf-8"');

/* Allow request from all orgin */
//header('Access-Control-Allow-Origin: *'); 

/* Allow request from particular orgin
 * The 2nd parameter "false" tells the header() function not to overwrite the old one
 */

header('Access-Control-Allow-Origin: http://mysite1.com', false);
header('Access-Control-Allow-Origin: http://example.com', false);
header('Access-Control-Allow-Origin: https://www.mysite2.com', false);
header('Access-Control-Allow-Origin: http://www.mysite2.com', false);

//header('Cache-Control: no-cache, must-revalidate');
//header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');






$object = (object) array_filter((array) $json);
echo json_encode($object, JSON_PRETTY_PRINT | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
