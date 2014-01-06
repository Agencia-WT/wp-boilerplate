<?php

include('inc/init.php');
include('inc/assets.php');

$google_analytics_id = 'UA-XXXXXXXX-X';

// Add socket.io snippet to enable Browser Sync
function add_browser_sync() {
  echo "<script src='http://localhost:3000/socket.io/socket.io.js'></script><script src='http://localhost:3001/browser-sync-client.min.js'></script>";
}
if ($environment['name'] == 'local') {
  add_action('wp_footer','add_browser_sync');
}