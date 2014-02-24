<?php
if ($_GET['randomId'] != "pzIOvB1ForfqVKOsA9k62B1fzhpQdGNSjrvy1HljBpKzisPoEN5oWE2U8AbcF3kW") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
