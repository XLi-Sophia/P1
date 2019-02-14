<?php                                 
/*
 * Three random quotes use in index.php
 */
$quote1 = "Success is the result of perfection, hard work, learning from failure, loyalty, and persistence. - <a href='https://www.brainyquote.com/quotes/colin_powell_386437'>Colin Powell</a>";
$quote2 = "Tell me and I forget. Teach me and I remember. Involve me and I learn. - <a href='https://www.brainyquote.com/quotes/benjamin_franklin_383997'>Benjamin Franklin</a>";
$quote3 = "There are no secrets to success. It is the result of preparation, hard work, and learning from failure. - <a href='https://www.brainyquote.com/quotes/colin_powell_121363'>Colin Powell</a>";

$a = [$quote1, $quote2, $quote3];  
$quote = $a[mt_rand(0, count($a)-1)]; 
?>                                    
                                      
