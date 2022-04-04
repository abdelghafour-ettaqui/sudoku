<?php

include 'matrice.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body  >

     <form  action="home.php" method="post" class="d-flex" style="margin-top: 200px; margin-left:200px">
         <input id="number" style="width: 400px; height:50px" type="text" name="number" placeholder="please enter different 9 numbers as 1-2-3-4-6-7-8-9">
         <button type="submit" class="btn btn-primary"> Submit</button>
     </form>
    <div class="ms-5 " id="result" style="padding-left: 200px;" >

        <div class="d-flex">
            <div class="h3 me-2"> <?php for ($i = 0; $i < 3; $i++) {
                echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result1[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
            <div class="h3 me-2"> <?php for ($i = 3; $i < 6; $i++) {
                echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result1[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
            <div class="h3 me-2"> <?php for ($i = 6; $i < 9; $i++) {
                echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result1[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
        </div>

        <div class="d-flex me-2">

            <div class="h3 me-2"> <?php for ($i = 9; $i < 12; $i++) {
                echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result2[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
            <div class="h3 me-2"> <?php for ($i = 12; $i < 15; $i++) {
                echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result2[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
            <div class="h3 me-2"> <?php for ($i = 15; $i < 18; $i++) {
                echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result2[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
        </div>

        <div class="d-flex">

            <div class="h3 me-2"> <?php for ($i = 18; $i < 21; $i++) {
                echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result3[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
            <div class="h3 me-2"> <?php for ($i = 21; $i < 24; $i++) {
                                   echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result3[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
            <div class="h3 me-2"> <?php for ($i = 24; $i < 27; $i++) {
                echo '<br>';
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $Result3[$i][$j];
                                        echo ' ';
                                    }

                                    echo '<br>';
                                } ?>
            </div>
        </div>



    </div>
    <script src="display.js" > </script>

</body>

</html>