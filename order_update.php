global$conn; //order_update.php
<?php
include_once("db_connect.php");
if(isset($_GET["order"])) {
    $order  = explode(",",$_GET["order"]);
    for($i=0; $i < count($order);$i++) {
        echo $order[$i]; echo "<br/>";
        $sql = "UPDATE aircraft SET position='" . $i . "' WHERE id=". $order[$i];
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    }
}
?>