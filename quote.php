<?php                                 
/*
 * Three random quotes use in index.php
 */
$quote1 = 'Success is the result of perfection, hard work, learning from failure, loyalty, and persistence. - Colin Powell [https://www.brainyquote.com]';
$quote2 = 'Tell me and I forget. Teach me and I remeber. Involve me and I learn. - Benjamin Franklin [https://www.brainyquote.com]';
$quote3 = 'There are no secrets to success. It is the result of preparation, hard work, and learning from failure. - Colin Powell [https://www.brainyquote.com]';

$a = [$quote1, $quote2, $quote3];  
$quote = $a[mt_rand(0, count($a)-1)]; 
?>                                    
                                      
