<?php
function set_message($message, $type = 'success') {
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $type;
}

function display_message() {
    if (isset($_SESSION['message'])) {
        echo "<div class='alert alert-{$_SESSION['message_type']}'>{$_SESSION['message']}</div>";
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    }
}
