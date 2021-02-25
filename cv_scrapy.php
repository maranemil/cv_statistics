<?php

$files = file("cv_all_pdfs_docs.csv");
$max   = count($files);
foreach ($files as $dfile) {
   $wgetTarget = str_replace('"', '', $dfile);
   $cmd        = "cd documents && wget {$wgetTarget}";
   system($cmd);
   #echo $cmd.PHP_EOL;
}
