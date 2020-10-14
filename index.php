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
              <h1>Hello</h1>
              <?php 
                echo '<h2>$_GET</h2>';
                print_r($_GET);
                $tab_get = array();
                $tab_get["cle"] = "valeur";

                echo '<br />';

                print_r($_POST);
                $_POST["cle_post"] = "pre remplie";
              ?>

                <form action="index.php" method="post">
                    <input type="text" name="cle_post" value="pre remplie" />
                    <?php 
                        // au moment ou on va submit le formulaire
                    ?>
                    <input type="submit" />
                </form>
                
                <hr />
                
                <form action="index.php" method="get">
                    <input type="text" name="cle_get" value="pre remplie de cle get" />
                    <?php 
                        // au moment ou on va submit le formulaire
                    ?>
                    <input type="submit" />
                </form>

                <?php
                    // difference simple et double quote
                    $fruit = "abricot";
                    echo "j'aime le fruit $fruit";
                    echo "<br />";
                    echo 'j\'aime le fruit $fruit';
                ?>
        </div>
	</body>
</html>

