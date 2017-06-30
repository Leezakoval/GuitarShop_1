<?php
    $dsn = 'mysql:yk247;host=localhost=sql2.njit.edu';
        $username = 'yk247';
	    $password = 'td3tyZa6';

	        try {
		      $db = new PDO($dsn, $username, $password);
		    } catch (PDOException $e) {
		      $error_message = $e->getMessage();
		      include('database_error.php');
		      exit();
		    }
		?>
