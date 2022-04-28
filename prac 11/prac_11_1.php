<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prac 11 - 1</title>
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
        height: 40%;
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
        <form action="./prac_11_1.php" method="POST" class="contf">
            <select name="sub[]" multiple>
                <option> WBP </option>
                <option> PWP </option>
                <option> MAD </option>
                <option> ETI </option>
                <option> MGT </option>
                <option> EDE </option>
                <option> CPP </option>
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if (isset($_POST['sub'])) {

            $sub = $_POST['sub'];

            echo "Selected subjects are : ";
            foreach ($sub as $s => $e) {
                $s++;
                echo "<br>$s. $e";
            }
        }
        ?>
    </div>

</body>

</html>