<?php  
 $system_info = array(
            'web_server' => $_SERVER["SERVER_SOFTWARE"],
            'php_version' => PHP_VERSION,
            'zlib' => function_exists('gzclose') ?  '����' : '�쳣',
            'curl' => function_exists("curl_getinfo") ? '����' : '�쳣',
        );

		exit(print_r($system_info));
		?>