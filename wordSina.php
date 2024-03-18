<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wordpress";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$used_div = '<div class="yn-bnr" id="ynpos-11088"></div>';
$replace_div = '<div id="pos-article-display-card-22718"></div>';
$sql = "SELECT ID, post_content FROM wp_posts WHERE post_content LIKE '%$used_div%'";
$result = $conn->query($sql);


//echo $result->num_rows;
//exit(1);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo $row["ID"] . "\n";
        replace_in_db($used_div,$replace_div, $row, $conn );
    }
}
$conn->close();


function replace_in_db($search_string, $replace_string, $row, $conn){

    $final_string = str_replace($search_string,$replace_string,$row['post_content']);
    $id = $row['ID'];
    $sql = "UPDATE wp_posts SET post_content='$final_string' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully\n";
    } else {
        echo "Error updating record: " . $conn->error;
        exit(1);
    }
}