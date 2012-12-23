<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="note.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Note - Snapki.net</title>
</head>

<body>
<h1>A demo for note.</h1>
<div id="note">
<h3>My Note...</h3>
<div id="notetxt">
<form method="post" action="noteupdate.php">
<textarea name="notearea"><?php echo $_SESSION['note']; ?></textarea><br />
<input type="submit" name="notesub" id="notesub" value="Save for now..." />
</form>
</div>
</div>

</body>
</html>