<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="author" content="haiDang" />
    <link rel="stylesheet" href="/php/site.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>OPP PHP</title>
</head>

<body>
    <div id="wrapper">
		<?php 
		require_once("userclass.php");

		$aigyuh = new User('Nguyen Hai Dang', 'nguyendang@gmail.com');

		echo "<h2>--User info--</h2>";
		echo "UserID: " . $aigyuh->GetUserID() . "<br/>";
		echo "UserName: " . $aigyuh->GetUserName() . "<br/>";
		// add more user
		$aigyuhmore = new User("Dang bake", "c.ronaldo@gmail.com");

		echo "<h2>--More User--</h2>";
		echo "UserID: " . $aigyuhmore->GetUserID() . "<br/>";
		echo "UserName: " . $aigyuhmore->GetUserName() . "<br/>";

		include("employeeclass.php");
		$person_a = new Person("lone bake", 1234);
		echo "<h2>--More OPP PHP--</h2>";
		echo "Person Name: " . $person_a->GetName() . "<br/>";
		echo "Person ID: " . $person_a->GetNationalID() . "<br/>";

		echo "<h2>Employee</h2>";
		$employee_a = new Employee("Banh mi danh yeu", 5678, "Security");
		echo "Employee ID: " . $employee_a->GetEmployeeID() . "<br/>";
		echo "Employee Name: " . $employee_a->GetName() . "<br/>";
		echo "Employee Department: " . $employee_a->GetDepartment() . "<br/>";

		echo "<h2>More Employee</h2>";
		$employee_b = new Employee("bake lone", 112233, "Offical");
		echo "Employee ID: " . $employee_b->GetEmployeeID() . "<br/>";
		echo "Employee Name: " . $employee_b->GetName() . "<br/>";
		echo "Employee Department: " . $employee_b->GetDepartment() . "<br/>";

		// ==============================================================
		// echo "<h2>More Employee</h2>";
		// $employee_c = new Employee($_POST["txtId"], $_POST["txtName"], $_POST["txtDepartment"]);
		// echo "Employee ID: " . $employee_b->GetEmployeeID() . "<br/>";
		// echo "Employee Name: " . $employee_b->GetName() . "<br/>";
		// echo "Employee Department: " . $employee_b->GetDepartment() . "<br/>";

		require_once("addMore.php");


		?>
    </div>

    <div class="userInput mt-5 mx-5">
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Name: </label>
                <input required type="text" id="txtName" name="txtName" class="form-control">
                <label>Department: </label>
                <input required type="text" id="txtDepartment" name="txtDepartment" class="form-control">

                <input type="submit" class="btn btn-success mt-2">
            </div>
        </form>
    </div>

    <!-- footer -->
    <div>
        <br>
        <footer>
            &#169; 2019 - NGUYEN TRAT HAI DANG - 15DTHJ02 - 1511060467
        </footer>
    </div>

</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html> 