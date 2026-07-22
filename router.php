<?php
// router.php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Serve static assets directly
if (file_exists(__DIR__ . '/public' . $path)) {
    return false;
}

// Route everything else to api/index.php
$_SERVER['SCRIPT_NAME'] = '/api/index.php';
try {
    require 'api/index.php';
} catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
