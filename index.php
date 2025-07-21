<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = htmlspecialchars($_POST['item']);
    echo "<h1>Thank you for ordering: $item</h1>";
} else {
    echo "<h1>No item ordered.</h1>";
}
?>
