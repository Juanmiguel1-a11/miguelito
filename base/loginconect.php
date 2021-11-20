<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'mathematicalspace'
) or die(mysqli_erro($mysqli));

?>