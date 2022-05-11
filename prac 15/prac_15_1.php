<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prac 15 - 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
            height: 100vh;
            display: grid;
            place-items: center;
        }
    </style>
</head>

<body>
    <form class="card p-3" style="width: 20% !important;" method="post" action="./prac_15_1.php">
        <h4 style="margin: 10px;" class="mx-auto">Add Customer Details</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
            <input type="text" class="form-control" name="c_name" id="exampleFormControlInput1" placeholder="name...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Customer Account No</label>
            <input type="text" class="form-control" name="c_accno" id="exampleFormControlInput1" placeholder="acc no...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Customer Account Type</label>
            <input type="text" class="form-control" name="c_accty" id="exampleFormControlInput1" placeholder="acc type...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Customer Branch Name</label>
            <input type="text" class="form-control" name="c_branch" id="exampleFormControlInput1" placeholder="branch name...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Customer's city</label>
            <input type="text" class="form-control" name="c_city" id="exampleFormControlInput1" placeholder="city name...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Customer Amount</label>
            <input type="number" class="form-control" name="c_amt" id="exampleFormControlInput1" placeholder="amount...">
        </div>

        <input class="btn btn-primary mt-2" name="btn" type="submit" value="Send mail">

        <?php
        if (isset($_POST['btn'])) {

            $c_name = $_POST['c_name'];
            $c_accno = $_POST['c_accno'];
            $c_accty = $_POST['c_accty'];
            $c_branch = $_POST['c_branch'];
            $c_city = $_POST['c_city'];
            $c_amt = $_POST['c_amt'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "INSERT INTO account (customer_name, account_no, account_type, branch_name, city, amount) VALUES ('$c_name', '$c_accno', '$c_accty', '$c_branch', '$c_city', '$c_amt')";

            $getsql = "SELECT * FROM account WHERE account_no = '$c_accno'";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if ($res) {
                    echo "Data inserted Successfully! $res";
                    $getres = mysqli_query($con, $getsql);

                    if (mysqli_num_rows($getres) > 0) {
                        while ($row = mysqli_fetch_assoc($getres)) {
                            echo "<br>Customer name : " . $row["customer_name"] . "<br>Account no : " . $row["account_no"] . "<br>Account type : " . $row["account_type"] . "<br>Branch name : " . $row["branch_name"] . "<br>City : " . $row["city"] . "<br>Amount : " . $row["amount"];
                        }
                    } else {
                        echo "No data found!";
                    }
                } else {
                    "Insertion Failed! = ";
                    mysqli_error($con);
                }
            } else {
                "Connection Failed!";
            }
        }

        ?>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/boot
strap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sE
NBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>