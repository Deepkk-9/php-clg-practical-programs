<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prac 10 | Q.2</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        width: 100vw;
        height: 100vh;
        display: grid;
        place-items: center;
    }

    .container {
        height: 35%;
        width: 30%;
        display: grid;
        place-items: center;
        box-shadow: 0 2px 5px 1px rgba(64, 60, 67, .16);
    }

    .form-check {
        width: 20% !important;
        display: flex;
    }

    .inps {
        margin-right: 7px;
    }
</style>


<body>
    <form class="container" method="POST" action="./prac_10_4.php">

        <h3 style="text-align: center;">Select Subjects</h3>

        <div class="form-check">
            <input name="cbks[]" class="form-check-input inps" type="checkbox" value="PHP" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                PHP
            </label>
        </div>
        <div class="form-check">
            <input name="cbks[]" class="form-check-input inps" type="checkbox" value="Python" id="flexCheck1">
            <label class="form-check-label" for="flexCheck1">
                Python
            </label>
        </div>
        <div class="form-check">
            <input name="cbks[]" class="form-check-input inps" type="checkbox" value="Android" id="flexCheck2">
            <label class="form-check-label" for="flexCheck2">
                Android
            </label>
        </div>
        <div class="form-check">
            <input name="cbks[]" class="form-check-input inps" type="checkbox" value="Java" id="flexCheck3">
            <label class="form-check-label" for="flexCheck3">
                Java
            </label>
        </div>

        <button type="submit" name="sub" class="btn btn-primary">Submit</button>

        <?php

        echo "Your selected subjects are : ";
        if (isset($_POST['sub'])) {
            if (!empty($_POST['cbks'])) {
                foreach ($_POST['cbks'] as $v) {
                    echo "$v, ";
                }
            }
        }
        ?>

    </form>
</body>

</html>