<?php
error_reporting(0);
include("db_config.php");

// array for JSON response
$response = array();

// get all items from myorder table
$result = mysql_query("SELECT * FROM NARACKA N JOIN NARACKA_PRODUKTI NP ON N.ID=NP.NARACKA_ID JOIN PRODUKT P ON NP.PRODUKT_ID=P.ID WHERE N.KLIENT_EMAIL='veselinoskihristijan@foodify.com'") or die(mysql_error());

if (mysql_num_rows($result) > 0) {
  
    $response["naracki"] = array();

    while ($row = mysql_fetch_array($result)) {
            // temp user array
            $item = array();
            $item["id"] = $row["ID"];
            $item["ime"] = $row["IME"];
	    $item["cena"] = $row["CENA"];
	    $item["kolicina"] = $row["KOLICINA"];
        
            // push ordered items into response array 
            array_push($response["naracki"], $item);
           }
      // success
     $response["success"] = 1;
}
else {
    // order is empty 
      $response["success"] = 0;
      $response["message"] = "No Items Found";
}
// echoing JSON response
echo json_encode($response);

?>