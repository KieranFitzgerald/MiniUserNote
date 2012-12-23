<?php
session_start(); 
 $note = strip_tags($_POST['notearea']);
 $_SESSION['note'] = $note;
?>
<script>alert('Note Updated'); history.go(-1); </script>