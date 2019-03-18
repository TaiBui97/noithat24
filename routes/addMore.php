

<?php
require_once("helpers.php");
require_once("userclass.php");

session_start();
if ($_SERVER['REQUEST_METHOD']== 'POST'&& isset($_POST['txtName'])) {
    
    $_SESSION['emp'][]= new Employee($_POST["txtName"], null, $_POST["txtDepartment"]);
}
foreach ($_SESSION['emp'] as $e) {
    // =========
    echo "<h2 class='text-danger'>More Employee</h2>";
// $objectt = new Employee($_POST["txtName"], null, $_POST["txtDepartment"]);
// $arr = ($objectt);
   print "Employee ID: " . $e->GetEmployeeID() . "<br/>";
    print "Employee Name: " . $e->GetName() . "<br/>";
    print "Employee Department: " . $e->GetDepartment() . "<br/>";
}
// session_unset();
?> 