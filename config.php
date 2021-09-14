<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "project_1") or die(mysqli_error($con));
