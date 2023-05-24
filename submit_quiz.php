<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $quiz_id = $_POST["quiz"];
  if ($quiz_id == 1) {
    header("Location: gkquiz.php");
    exit();
  }

  if ($quiz_id == 2) {
    header("Location: sciencetechquiz.php");
    exit();
  }
}


?>
