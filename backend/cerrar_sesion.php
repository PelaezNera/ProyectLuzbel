<?php
session_start();
session_destroy();

header("Location: ../main-pages/login.html");