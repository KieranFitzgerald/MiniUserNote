<?php session_start(); $note = strip_tags($_POST['notearea']); $_SESSION['note'] = $note; ?>
<script type="application/javascript">function done() { alert('Note Updated'); history.go(-1); } done();</script>
