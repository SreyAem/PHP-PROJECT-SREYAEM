<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once('../database/database.php');
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            createBook($_POST);
        }
    }