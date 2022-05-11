<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prac 15 - 2</title>
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
    <form class="card p-3" style="width: 20% !important;" method="post" action="./prac_15_2.php">
        <h4 style="margin: 10px;" class="mx-auto">Add Employee Details</h4>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Employee Name</label>
            <input type="text" class="form-control" name="e_name" id="exampleFormControlInput1" placeholder="name...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Employee Address</label>
            <input type="text" class="form-control" name="e_add" id="exampleFormControlInput1" placeholder="acc no...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Employee Mobile no</label>
            <input type="text" class="form-control" name="e_mbno" id="exampleFormControlInput1" placeholder="acc type...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Employee Post</label>
            <input type="text" class="form-control" name="e_post" id="exampleFormControlInput1" placeholder="branch name...">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Employee Salary</label>
            <input type="number" class="form-control" name="e_sal" id="exampleFormControlInput1" placeholder="city name...">
        </div>

        <input class="btn btn-primary mt-2" name="btn" type="submit" value="Add Details">

        <?php
        if (isset($_POST['btn'])) {

            $e_name = $_POST['e_name'];
            $e_add = $_POST['e_add'];
            $e_mbno = $_POST['e_mbno'];
            $e_post = $_POST['e_post'];
            $e_sal = $_POST['e_sal'];

            $con = mysqli_connect("localhost", "root", "", "clgdb");

            $sql = "INSERT INTO employee_info (employee_name, address, mobile_no, post, salary) VALUES ('$e_name', '$e_add', '$e_mbno', '$e_post', '$e_sal')";

            $getsql = "SELECT * FROM employee_info WHERE employee_name = '$e_name'";

            if ($con) {
                $res = mysqli_query($con, $sql);

                if ($res) {
                    echo "Data inserted Successfully! $res";
                    $getres = mysqli_query($con, $getsql);

                    if (mysqli_num_rows($getres) > 0) {
                        while ($row = mysqli_fetch_assoc($getres)) {
                            echo "<br>Employee Name : " . $row["employee_name"] . "<br>Employee Address : " . $row["address"] . "<br>Employee Mobile No. : " . $row["mobile_no"] . "<br>Employee Post : " . $row["post"] . "<br>Employee Salary : " . $row["salary"];
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