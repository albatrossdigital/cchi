<?php

// Disable cache for anon pages
// See /var/aegir/config/includes/global.inc for info on these
$use_cache = 'NO';
header('X-Accel-Expires: 0');
