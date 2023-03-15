<?php
session_start();
if(isset($_SESSION['name'])) {
  $response = array('redirect' => 'https://www.example.com');
} else {
  $response = array('show_modal' => true);
}
echo json_encode($response);
?>
