<?php
// Logide kuvamine
echo "<html><head><title>Server Logs</title></head><body style='font-family: monospace; background:#111; color:#0f0;'>";
echo "<h2>System Updates log</h2><pre>";
@readfile('/var/log/system_updates.log');
echo "</pre>";

echo "<h2>Website Apache log</h2><pre>";
@readfile('/var/log/website_apache.log');
echo "</pre>";

echo "<h2>GitHub Push log</h2><pre>";
@readfile('/var/log/github_push_logs.log');
echo "</pre>";

echo "<h2>Package log</h2><pre>";
@readfile('/var/log/package_logs.log');
echo "</pre></body></html>";
?>

