<?php


//passing multiple variables

function checkMethod(){
//check if the GET method was used and if the variable has been set
if ($_SERVER["REQUEST_METHOD"] === "GET" 
&& isset($_GET[ 'name' ]) 
&& isset($_GET[ 'postcode' ]) 
&& isset($_GET[ 'phone' ]) 
&& isset($_GET[ 'location' ]) 
&& isset($_GET[ 'occupation' ])) {

$name = $_GET[ 'name' ]; 
$postcode = $_GET[ 'postcode' ]; 
$phone = $_GET[ 'phone' ]; 
$location = $_GET[ 'location' ]; 
$occupation = $_GET[ 'occupation' ]; 

echo '<p>Name: ' . $name . "</p>";
echo '<p>Postcode: ' . $postcode . "</p>";
echo '<p>Phone: ' . $phone . "</p>";
echo '<p>Location: ' . $location . "</p>";
echo '<p>Occupation: ' . $occupation . "</p>";

}

else{
echo "No values recieved";
//do something else if the $_GET request does not exist
}

}



?>