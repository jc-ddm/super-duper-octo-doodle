<?php

/**
 * Overall process to make someting Great!
 * 
 * Based on the idea outlined in the following blog post.
 * 
 * https://blog.danslimmon.com/2019/07/15/do-nothing-scripting-the-key-to-gradual-automation/
 */

echo "Steps to publish\n";



// createProcessable files for later steps
readline("Collect Photos");
readline("Transfer Photos to staging area");
readline("renameFiles exiftool '-filename<CreateDate' -d ../processing/%m-%b-%Y/Week%UDay%dYear%YT-%s%%-c.%%le -r .");
readline("Clean up Staging Area");


// start with the side car and meta data collection
readline("create jpg");




