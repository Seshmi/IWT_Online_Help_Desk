<?php
  require_once 'Config1.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT email FROM ud WHERE email LIKE :email';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo "successfull";
      }
    } else {
      echo 'No Record';
    }
  }
?>