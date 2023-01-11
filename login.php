<?php
session_start();
error_reporting(0);
include 'koneksi.php';

if (isset($_SESSION['id'])) {
	header('location:index.php');
}

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];

	if ($level == 'Admin') {
		$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
		if (mysqli_num_rows($query) > 0) {
			$data = mysqli_fetch_array($query);
			$_SESSION['id'] = $data['id_admin'];
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['level'] = $level;
			header("location:index.php");
		} else {
			echo "<script>alert('Username atau password salah');location.href='login.php';</script>";
		}
	} elseif ($level == 'Struktural') {
		$query = mysqli_query($koneksi, "SELECT * FROM struktural WHERE username = '$username' AND password = '$password'");
		if (mysqli_num_rows($query) > 0) {
			$data = mysqli_fetch_array($query);
			$_SESSION['id'] = $data['id_struktural'];
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['level'] = $level;
			$_SESSION['jabatan'] = $data['jabatan'];
			header("location:index.php");
		} else {
			echo "<script>alert('Username atau password salah');location.href='login.php';</script>";
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yosep Andika">
	<title>Halaman Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body class="text-center">
	<main class="form-signin">
		<form action="login.php" method="post">
			<h1 class="h3 mb-3 fw-normal">Silahkan login</h1>

			<div class="form-floating mb-2">
				<input type="text" name="username" class="form-control" id="username">
				<label for="username">Username</label>
			</div>
			<div class="form-floating mb-2">
				<input type="password" name="password" class="form-control" id="password">
				<label for="password">Password</label>
			</div>
			<div class="mb-2">
				<select name="level" class="form-control custom-select">
					<option>Admin</option>
					
				</select>
			</div>
			<div class="mb-2">
			<button class="w-100 btn btn-md btn-primary" type="submit" name="login">Login</button>
			</div>
			<a class="w-100 btn btn-md btn-dark" href="bukutamu/">Kembali Ke Halaman Utama</a>

		</form>
	</main>
</body>

</html>
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body class="text-center">
	<main c