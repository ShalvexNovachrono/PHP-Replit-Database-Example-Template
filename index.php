
<?php
//this explains how to write in cmd > https://www.php.net/manual/en/function.exec 
$retval=null;
//adds key and the data
exec('curl $REPLIT_DB_URL -d \'name2={"firstname": "joe", "lastname": "james"}\'');

//gets the key name1
exec('curl $REPLIT_DB_URL/name1', $retval);
echo $retval[0] . "<br>";  //prints data the 


$retval=null;
//gets all keys that have the word name in it, as a list
exec('curl "$REPLIT_DB_URL?prefix=name"', $retval);

foreach ($retval as $re) { 
  $retval=null;
  exec('curl $REPLIT_DB_URL/'.$re, $retval); 
  echo $re ." => ". $retval[0]."<br>";  //prints data the 
  
}

//deletes key name1
exec('curl -XDELETE $REPLIT_DB_URL/name2');

?>

