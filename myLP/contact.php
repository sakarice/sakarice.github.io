<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			mb_language("Japanese");
			mb_internal_encoding("UTF-8");
 
			$to = "sakarice1230@gmail.com";
			$title = "title";
            $content = $_POST['message'];
            $from = $_POST['from'];
            $name1 = $_POST['name1'];
            
			if(mb_send_mail($to, $title, $message, $from, $name1)){
				echo "メールを送信しました";
			} else {
				echo "メールの送信に失敗しました";
			}
		?>
	</body>
</html>
