<?php
session_start();
include "../db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../cutiform.php?error=User Name is Required");
	} else if (empty($password)) {
		header("Location: ../cutiform.php?error=Password is Required");
	} else {

		// Hashing the password
		$password = md5($password);

		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			// the user name must be unique
			$row = mysqli_fetch_assoc($result);
			if ($row['password'] === $password && $row['role'] == $role) {
				$_SESSION['name'] = $row['name'];
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['nip'] = $row['nip'];
				$_SESSION['hari'] = $row['hari'];

				if ($role == "user") {
					header("Location: ../home.php");
				} elseif ($role == "admin") {
					header("Location: ../admin1.php");
				}
			} else {
				header("Location: ../cutiform.php?error=Incorect User name or password");
			}
		} else {
			header("Location: ../cutiform.php?error=Incorect User name or password");
		}
	}
}
