<?php
    $dsn = 'mysql:host=localhost;dbname='yk247';
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
