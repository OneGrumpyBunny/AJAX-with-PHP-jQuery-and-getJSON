# Asyncrhonous data retrieval with PHP, jQuery, and JSON
<p>I built this as an exercise in generating JSON formatted data from a MYSQL database using PHP, then retrieving that data asynchronously for display on screen with JQuery.</p>
<p>Steps involved include:</p>
<ul>
  <li>jQuery <a href="http://api.jquery.com/jquery.getjson/" target="_blank">.getJSON()</a> calls PHP to retrieve data from database</li>
  <li>PHP queries database and returns a random record from the dataset</li>
  <li>PHP outputs JSON format using <a href="http://php.net/manual/en/function.json-encode.php" target="_blank">json_encode()</a></li>
  <li>jQuery populates the DOM with the returned JSON data</li>
  <li>jQuery listens for button click to repeat the process</li>
</ul>

<p>The real-time JSON output can be seen here: <a href="http://cherylvelez.com/api/index.php?t=1" target="_blank">http://www.cherylvelez.com/api/index.php?t=1</a></p>
<p>The populated asynchronous data retrieval can be seen here: <a href="http://cherylvelez.com/api/travel.html">http://cherylvelez.com/api/travel.html</a></p>