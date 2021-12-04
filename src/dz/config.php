<?php

const SERVER = "localhost";
const LOGIN = "root";
const PAS = "root";
const DB = "education";

$connect = mysqli_connect(SERVER,LOGIN,PAS,DB) or die("Ошибка соединения!");
