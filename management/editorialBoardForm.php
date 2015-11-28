<?php
session_start();
ini_set('display_errors', 'on');
ini_set('log_errors', 1);
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ob_start();
?>
<?php
include("../lib/config.php");
require("../lib/newBoardProcess.php");
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

    <div class="panel panel-default col-lg-6 col-lg-offset-1" style="width: 80%">
        <div class="panel-heading h2 text-center">Editorial Board Form</div>
        <div class="panel-body">
            <form id="editorialBoardInforamtion" class="form-horizontal" role="form" method="post" action="../lib/newBoardSQLProcess.php">
                <div class="form-group">
                    <label class="col-md-2 col-xs-offset-2 control-label" for="professorName">Professor's Name :</label>
                    <div class="col-md-4">
                        <select id="professorName" name="professorName" class="form-control" value="<?php echo htmlspecialchars($professorName); ?>">
                            <option value="" selected="selected">--- Select a Professor's Name ---</option>
                            <?php echo $newBoard->getProfessorNameId();?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="editorialBoardName" class="col-md-2 col-xs-offset-2 control-label">Editorial Board Name :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="editorialBoardName" name="editorialBoardName" placeholder="Editorial Board Name" value="<?php echo htmlspecialchars($editorialBoardName); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="journalName" class="col-md-2 col-xs-offset-2 control-label">Journal Name :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="journalName" name="journalName" placeholder="Journal Name" value="<?php echo htmlspecialchars($journalName); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="year" class="col-md-3 col-xs-offset-1 control-label">Journal Publication Year :</label>
                    <div class="col-md-3 date">
                        <div class="input-group input-append date" id="editorialBoardFormYear">
                            <input id="editorialBoardYear" name="editorialBoardYear" type="text" class="form-control datepicker" value="<?php echo htmlspecialchars($journalYear); ?>"/>
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
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
            <span class="glyphicon glyphicon-star"></span>Information successfully entered!
        </div>
    </div>



</div>

<!--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="../js/bootstrap-datepicker.js"></script>-->

<<script src="../js/functions.js"></script>
<?php
if($_SESSION['success']){
    echo '<script> $("#editorialBoardInforamtion").addClass("hidden");
            $("#submission").addClass("hidden");
            $("#confirmation").removeClass("hidden");</script>';
    $_SESSION['success'] = false;
}
?>

</body>



<script src="../js/control.js"></script>

</html>