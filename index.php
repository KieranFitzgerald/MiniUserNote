<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Note - Snapki.net</title>
<style>
#note.h1 {
	font-size: 18px;
	line-height: 20px;	
}

#note {
	width: 200px;
	height: 200px;
	background-color: rgb(255, 255, 153);
	border-radius: 7px;
	-moz-border-radius: 7px;
	paddin-left: 5px;
}

.notearea {
	width: inherit;
	margin-left: 5px;
	margin-right: 5px;
	background-color: rgb(255, 255, 153);	
	border: #999 2px solid;
}

.notesub {
	width: inherit;
	margin-left: 5px;
	margin-right: 5px;	
}

</style>
</head>

<body>
<h1>A demo for note.</h1>
<div id="note">
<h3>My Note...</h3>
<div id="notetxt">
<form method="post" action="noteupdate.php">
<textarea name="notearea"><?php echo $_SESSION['note']; ?></textarea><br />
<input type="submit" name="notesub" value="Save for now..." />
</form>
</div>
</div>

</body>
</html>