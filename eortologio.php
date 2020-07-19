<?php 

$xml = simplexml_load_file('https://www.eortologio.net/rss/today.xml');
echo $xml->channel->item->title->tr->td[1]->a;

?>
