<?php

require "connect.php";


$delete_all=$connect->query("DELETE FROM comments");

header("location:../messages.php");