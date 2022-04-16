<?php
	session_start();
	$title = 'Контакты';
	require 'blocks/header.php';
?>
<h1><?=$title?></h1>
<form action="proc/check_contact.php" method="post">

	<input type="text" name="username" value="<?=$_SESSION['username'] ?>" placeholder="Введите имя" class="form-control">
	<div class="text-danger"><?=$_SESSION['username_error_min'] ?></div>
	<br><input type="email" name="email" value="<?=$_SESSION['email'] ?>" placeholder="Введите email" class="form-control">
			<div class="text-danger"><?=$_SESSION['email_error_min'] ?></div>
	<br><input type="password" name="password" value="<?=$_SESSION['password'] ?>" placeholder="Введите пароль" class="form-control">
			<div class="text-danger"><?=$_SESSION['password_error_min'] ?></div>
	<br><textarea name="massage" class="form-control"  placeholder="Введите сообщение"><?=$_SESSION['massage'] ?></textarea>
			<div class="text-danger"><?=$_SESSION['massage_error_min'] ?></div>
	<br><input type="submit" value="Отправить" class="btn btn-success">
</form>

<?php
	require 'blocks/footer.php';
?>
