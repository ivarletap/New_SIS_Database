<?php
session_start();
ini_set('display_errors', 'on');
ini_set('log_errors', 1);
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ob_start();
?>
<?php
include("../lib/config.php");
require("../lib/departmentProcess.php");
?>
<?php
if(!isset($_SESSION["manager"]))
{
    header("location:/comp353/adminLogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<?php require("headerManagement.php");?>

<body>
<div class="container-fluid bg-info" style="height: 900px">
    <div id="navigation">
        <div class="row">
            <?php require("navigationManagement.php"); ?>
        </div>
    </div>
    <div class="panel panel-default  col-lg-6 col-lg-offset-1" style="width: 80%">
        <div class="panel-heading h2 text-center">Departments Form</div>
        <div class="panel-body">
            <form id="departmentForm" class="form-horizontal" role="form" method="post" action="../lib/newDepartmentSQLProcess.php">
                    <div class="form-group">
                        <label for="deptName" class="col-sm-3 control-label">Department Name :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="deptName" name="deptName" placeholder="Department Name" value="<?php echo htmlspecialchars($deptName); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deptPhone" class="col-sm-3 control-label">Department Phone # :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="deptPhone" name="deptPhone" placeholder="Department Phone #" value="<?php echo htmlspecialchars($deptPhone); ?>">
                        </div>
                    </div>



                <!--                submit and reset buttons-->
                <div class="row text-center">
                    <div class="form-group">
                        <div class="col-md-2 col-xs-offset-2">
                            <button type="submit" class="btn btn-success">Send</button>
                        </div>

                        <div class="col-md-2">
                            <button class="btn btn-danger" type="reset" onclick="location.reload(); ">reset</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div id="confirmation" class="alert alert-success hidden">
            <span class="glyphicon glyphicon-star"></span> Department information successfully entered
        </div>
    </div>


</div>



<script src="../js/functions.js"></script>

<?php
if($_SESSION['success']){
    echo '<script> $("#departmentForm").addClass("hidden");
            $("#submission").addClass("hidden");
            $("#confirmation").removeClass("hidden");</script>';
    $_SESSION['success'] = false;
}
?>

</body>



<script src="../js/control.js"></script>
</html>
