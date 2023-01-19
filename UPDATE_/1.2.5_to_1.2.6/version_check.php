<?php
# V 1.2.6 lookup
# are the new fields existing
$query = 'SHOW COLUMNS FROM ConfigAttrs;';
$check_126_result = mysqli_query($dbh, $query);
while ($row = @mysqli_fetch_assoc($check_126_result)){
    if ( ($row["Field"] == "link_as_child") AND ($row["Type"] == "enum('yes','no')") ){
        $installed_version = "1.2.6";
    }
}

?>
