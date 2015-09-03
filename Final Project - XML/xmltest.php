
<html>
  <head>
    <title>RSS Feed Test</title>
    <h1 align="center">Random Tech Feeds</h1>
  </head>
  
  <body>
   <?php
   
    function getFeed($url){
      $x = simplexml_load_file($url);
      
      echo "<ul>";
      
      foreach($x->channel->item as $entry){
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
      }
      
      echo "</ul>";
    }
   
   echo getFeed("http://feeds.arstechnica.com/arstechnica/features");
   ?>
  </body>
</html>