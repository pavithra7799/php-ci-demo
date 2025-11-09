<?php
// Simple test script
$response = file_get_contents('http://localhost/php-ci-demo/index.php');
if (strpos($response, 'Welcome to CI/CD Demo') !== false) {
    echo "✅ Test Passed: Content found\n";
    exit(0);
} else {
    echo "❌ Test Failed: Content not found\n";
    exit(1);
}
?>
