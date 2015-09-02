<?php

$x = simplexml_load_file('dom.xml');

foreach($x->book as $book){
  echo "<b>Book title:</b> ".$book->title."<br />".
        "<b>Author:</b> ".$book->author."<br />".
        "<b>Year:</b> ".$book->year."<br />".
        "<b>Price:</b> ".$book->price."<br />";
  echo "<br />";
}

?>