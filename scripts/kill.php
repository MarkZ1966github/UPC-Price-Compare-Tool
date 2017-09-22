<?php
$thread_id = $_POST['button'];
echo $thread_id;
$mysqli->kill($thread_id);
?>