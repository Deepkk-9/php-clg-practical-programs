<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prac 10 | Q.3</title>
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
        height: 30%;
        width: 30%;
        display: grid;
        place-items: center;
        box-shadow: 0 2px 5px 1px rgba(64, 60, 67, .16);
    }

    .form-check {
        width: 50% !important;
        display: flex;
        justify-content: center;
    }

    .inps {
        width: 45%;
        -moz-appearance: textfield !important;
        text-align: center;
    }

    .containers {
        width: 100% !important;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .btns {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
</style>


<body>
    <form class="container" method="POST" action="./prac_10_3.php">

        <h3 style="text-align: center;">Simple calculator For Basic Operations</h3>

        <div class="containers">
            <input type="number" name="num1" class="form-control inps" id="exampleFormControlInput1" placeholder="Enter 1st No...">
            <input type="number" name="num2" class="form-control inps" id="exampleFormControlInput1" placeholder="Enter 2nd No...">
        </div>

        <div class="btns">
            <button type="submit" name="add" class="btn btn-primary">Add</button>
            <button type="submit" name="sub" class="btn btn-primary">Subtract</button>
            <button type="submit" name="mul" class="btn btn-primary">Multiply</button>
            <button type="submit" name="div" class="btn btn-primary">Divide</button>
        </div>

        <?php

        if (isset($_POST['num1']) && isset($_POST['num2'])) {

            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];

            if (isset($_POST['add'])) {
                $ans = $n1 + $n2;
                echo "The Addition is : $ans";
            }
            if (isset($_POST['sub'])) {
                $ans = $n1 - $n2;
                echo "The Subtraction is : $ans";
            }
            if (isset($_POST['mul'])) {
                $ans = $n1 * $n2;
                echo "The Multiplication is : $ans";
            }
            if (isset($_POST['div'])) {
                $ans = $n1 / $n2;
                echo "The Division is : $ans";
            }
        }

        ?>

    </form>
</body>

</html>