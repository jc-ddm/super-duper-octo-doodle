<?php

/**
 * Overall process to make someting Great!
 * 
 * Based on the idea outlined in the following blog post.
 * 
 * https://blog.danslimmon.com/2019/07/15/do-nothing-scripting-the-key-to-gradual-automation/
 */

echo "Steps to save files\n";



// createProcessable files for later steps
readline("transfr card info to local drive");
readline("remove card and put in clearing queue");
readline("take local drive and sync to aws bucket");
readline("take local and move to local storage drive (ssh or sftp )");
readline("remove local drives copy");
readline("process local storage for jpgs");

// start with the side car and meta data collection
readline("create jpg");




