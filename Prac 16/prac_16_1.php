<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prac 16 - 1</title>
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
    <form class="card p-3" style="width: 20% !important;" method="post" action="./prac_16_1.php">
        <h4 style="margin: 10px;" class="mx-auto">Update or Delete</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter Account number</label>
            <input type="text" class="form-control" name="c_accno" id="exampleFormControlInput1" placeholder="acc no..">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Update name</label>
            <input type="text" class="form-control" name="c_name" id="exampleFormControlInput1" placeholder="Updated name..">
        </div>

        <input class="btn btn-warning my-2" name="btn_u" type="submit" value="Update Customer">
        <input class="btn btn-danger my-2" name="btn_d" type="submit" value="Delete Customer">

        <?php
        if (isset($_POST['btn_u'])) {

            $c_accno = $_POST['c_accno'];
            $c_name = $_POST['c_name'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "UPDATE account SET customer_name = '$c_name' WHERE account_no = '$c_accno'";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if ($res) {
                    echo "Customer Updated Successfully";
                } else {
                    "Update Failed! = ";
                    mysqli_error($con);
                }
            } else {
                "Connection Failed!";
            }
        }

        if (isset($_POST['btn_d'])) {

            $c_accno = $_POST['c_accno'];
            $c_name = $_POST['c_name'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "DELETE FROM account WHERE customer_name = '$c_name' AND account_no = '$c_accno'";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if ($res) {
                    echo "Customer Deleted!";
                } else {
                    "Deletion Failed! = ";
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