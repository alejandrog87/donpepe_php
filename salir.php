<?php
//salir.php

session_start();
//TODO: borrar solo la sesion de ID
session_destroy();
header("location: index.php");
