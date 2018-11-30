
<?php

/**
 * Autoloader from composer eliminates the need for require
 */
require __DIR__.'/vendor/autoload.php';

use lib\Alphabetizer;

if (isset($_POST))
{

    /**
     * calling service Alphabetizer
     */
    $alphabetizer = new Alphabetizer($_POST["shopping_list"]);


    $list = $alphabetizer->sortAsc();
}



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
            <link rel="stylesheet" href="css/styles.css">

    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">Make a new shopping list</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

                <p class="lead"></p>

            </div>

        </div>
    <form name="shopping_list" method="post" action="">
        <div id="shopping_list"><div class="form-group"><label for="name" class="required">Name</label><input type="text" id="name" name="name" required="required" class="form-control" /></div>
            <div class="form-group"><label for="shopping_list" class="required">List</label><textarea id="shopping_list" name="shopping_list" required="required" class="form-control"></textarea></div></div>

        <button type="submit" class="">Submit</button>
    </form>
    </div>

    <div class="container">
        <div class="row" >
            <div class="col-lg-12 text-left" >

                <p class="lead"></p>
                <ul>
                    <?php foreach ($list as $row)
                    {
                        ?>
                    <li class="list-group-item"> <span><?php echo $row ?> </span></li>
                    <?php }?>
                </ul>

            </div>

        </div>

    </div>

    </body>
<footer>

</footer>
</html>