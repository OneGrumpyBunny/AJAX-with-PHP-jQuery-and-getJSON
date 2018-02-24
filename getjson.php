<? 

// database connection occurs

$goodGet = 0;  // catches an invalid parameter

if (isset($_GET['t'])) {
  $goodGet = 1;  //parameter valid

  // get a count of items in the database and generate a random number
  $query1 = "SELECT count(id) as cntID FROM travelLog";
  $result = $conn->query($query1);
  $row = $result->fetch_assoc();
  $numRows = $row["cntID"];
  
  //generate a random number between 0 and the number of records returned
  $randRow = rand(0,$numRows-1);

  $query2 = "SELECT id, location, visited, visitedDate, comments, photo FROM travelLog LIMIT ".$randRow.",1";
  $result2 = $conn->query($query2);
  if ($result2->num_rows > 0) {
    // send json header 
    header('Content-type: application/json');
    while($row2 = $result2->fetch_assoc()) {
      // send json formatted data to screen
      echo json_encode( $row2 );
    }
  }
}

// if there are bogus parameters in the query string, error out

if ($goodGet == 0 ){
  echo "Sorry, not a valid parameter";
}

?>