<?php
session_start();
unset($_SESSION['email']);
// session_destroy function to destroy a session and remove all session data from the server.
session_destroy();