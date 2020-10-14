<?php

if (isset($_POST["to"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
    if (!empty($_POST["to"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
        $to      = $_POST["to"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $headers = array(
                'From' => 'from@sfr.fr',
                'Reply-To' => 'from@sfr.fr',
                    'X-Mailer' => 'PHP/' . phpversion()
                );

        $state = mail($to, $subject, $message, $headers);
        if ($state === true) {
            echo "message bien envoyé";
        } else {
            echo "erreur - message non envoyé";
        }
    }
}

?>
<!doctype html>
<html lang="en" class="">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>BootPHP</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</head>
	<body class="">
        <div class="container">
              <h1>Form</h1>
                <form action="form.php" method="post">
                    to
                    <input type="text" name="to" value="" />
                    <br />
                    subject
                    <input type="text" name="subject" value="" />
                    <br />
                    message
                    <textarea name="message"></textarea>
                    <input type="submit" />
                </form>
        </div>
	</body>
</html>

