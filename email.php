<?php
if($_POST["message"]) {
    mail("sbhsscioly@gmail.com", $_POST["subject"], $_POST["message"], "From: $_POST["email"]");
}
?>
