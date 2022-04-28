<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prac 11 - 2</title>
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
        padding: 10px;
    }

    .contf {
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
    }
</style>

<body>
    <div class="container">
        <form action="./prac_11_3.php" method="POST" class="contf">
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Enter name...">
            <input type="hidden" class="form-control" value="uid&393939" name="uid">
            <button type="submit" class="btn btn-primary">Primary</button>
        </form>

        <?php
        if (isset($_POST['name'])) {

            $name = $_POST['name'];
            $uid = $_POST['uid'];

            echo "Name : $name <br>UID : $uid";
        }
        ?>
    </div>

</body>

</html>