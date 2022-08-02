<?php

session_start();
session_unset(); //session var created and delete val in it 
session_destroy(); //
header("Location: ../index.php");