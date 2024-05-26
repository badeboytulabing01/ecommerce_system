<?php
$dbConnect = new DbConnection($host, $user, $pass, $db_name);
$conn = $dbConnect->connectDb();