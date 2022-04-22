<?php

$query = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';

// start utl will open it with query params

?>
{
  "name": "Cricket Winner",
  "short_name": "Cricket Winner",
  "description": "This app made for you favor",
  "lang": "en-US",
  "scope": "/",
  "start_url": "/?<?= $query ?>",
  "display": "standalone",
  "theme_color": "#000000",
  "background_color": "#000000",
  "prefer_related_applications": true,
  "related_applications": [
    {
      "platform": "webapp",
      "url": "./manifest.php?<?= $query ?>"
    }
  ],
  "icons": [
    {
      "src": "\/images\/android-icon-36x36.png",
      "sizes": "36x36",
      "type": "image\/png",
      "density": "0.75"
    },
    {
      "src": "\/images\/android-icon-48x48.png",
      "sizes": "48x48",
      "type": "image\/png",
      "density": "1.0"
    },
    {
      "src": "\/images\/android-icon-72x72.png",
      "sizes": "72x72",
      "type": "image\/png",
      "density": "1.5"
    },
    {
      "src": "\/images\/android-icon-96x96.png",
      "sizes": "96x96",
      "type": "image\/png",
      "density": "2.0"
    },
    {
      "src": "\/images\/android-icon-144x144.png",
      "sizes": "144x144",
      "type": "image\/png",
      "density": "3.0"
    },
    {
      "src": "\/images\/android-icon-192x192.png",
      "sizes": "192x192",
      "type": "image\/png",
      "density": "4.0"
    },
    {
      "src": "\/images\/android-icon-512x512.png",
      "sizes": "192x192",
      "type": "image\/png",
      "density": "4.0"
    }
  ]
}