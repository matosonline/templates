<?php
// resets the session data for the rest of the runtime 
$_SESSION = array();
// sends as Set-Cookie to invalidate the session cookie 
if (isset($_COOKIE[session_name()])) { 
    $params = session_get_cookie_params();
    setcookie(session_name(), '', 1, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));
}
session_destroy();

echo "SESSION DESTROY";

header("Location: /?page=home");

?>