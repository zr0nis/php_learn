<?php
	$title = 'PHP+MySQL';
	require 'blocks/header.php';
?>
<h1><?=$title?></h1>
<?php
	$var = [
		'host'		=> "localhost",
		'login'		=> "mysql",
		'pass'		=> "mysql",
		'dbname'	=> "phplearn"
	];

	$mysql = new mysqli($var['host'], $var['login'], $var['pass'], $var['dbname']);

	$mysql->query("CREATE TABLE `users_test`(
		id INT NOT NULL AUTO_INCREMENT,
		name VARCHAR(50) NOT NULL,
		bio TEXT NOT NULL,
		PRIMARY KEY(id)
	)");
	$mysql->query("INSERT INTO
		`users_test`
			(`name`, `bio`)
			VALUES('Jone', 'FULL text')
	");
	$mysql->query("DELETE FROM `users_test`
		WHERE `id`	= 1
	");

	$mysql->query("DROP TABLE `users_test`");
	$mysql->close();
?>

<?php
	require 'blocks/footer.php';
?>
