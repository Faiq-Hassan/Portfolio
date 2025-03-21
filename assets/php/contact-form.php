<?php
if (mail("faiqghumman4@gmail.com", "Test Email", "Hello, this is a test", "From: no-reply@yourdomain.com")) {
    echo "✅ Mail function is working!";
} else {
    echo "❌ Mail function is NOT working!";
}
?>
