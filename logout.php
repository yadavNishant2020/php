<?php
session_start();
session_destroy();

header('Location: /php/13_sessions.php');
