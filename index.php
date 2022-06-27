<html>
<head>
	<title>Hello goorm</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<h1>로그인</h1>
	<form action="login.php" method="get">
		<input type="text" name="id">
		<input type="password" name="password">
		<input type="submit" value="Submit">
    </form>
	<h1>검색</h1>
	<form action="index.php" method="get">
		<input type="search" name="search">
		<input type="submit" value="Submit">
	</form>
	<?php
	$conn = mysqli_connect("localhost", "root", "123456", "testdb");
	
	$sql = "SELECT * FROM testtable where description like '%".$_GET["search"]."%'";
	echo $sql;
	$result = mysqli_query($conn, $sql);
	echo "<table class='table table-dark'>";
	echo "<tr><th>ID</th><th>Title</th><th>Description</th></tr>";
	while($row = mysqli_fetch_array($result)){
		echo "<tr><td>{$row['id']}</td><td>{$row['title']}</td><td>{$row['description']}</td></tr>";
	}
	echo "</table>";
	?>
</body>
</html>