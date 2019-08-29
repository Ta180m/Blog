<?php
    if (isset($_POST['token'])) {
        echo "HTTP 200 OK<br/>Content-type: text/plain<br/>" . $_POST['challenge'];
    }
    else {
        echo "Post not received.";
    }
?>
