<?php

session_start();

unset($_SESSION['name']);

unset($_SESSION['age']);

// This will destroy the session
session_destroy();
