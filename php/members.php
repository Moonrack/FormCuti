<?php  

if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
    
    $sql = "SELECT * FROM users ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: cutiform.php");
} 