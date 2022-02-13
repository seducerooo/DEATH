<?php require_once('./Requires/header.php'); ?>

<div class="container">
<?php 
require('./DataBase/DataBase.php');




if(isset($_POST['inserted'])){
$sql = "INSERT INTO posts (fname ,lname) VALUES (? ,?)";
$firstname= $_POST['fname'];
$lastname = $_POST['lname'];
$stmt = $pdo->prepare($sql);
$stmt->execute([$firstname,$lastname]);


echo "post added";
header("Location:show.php",true);

}

?>

    <form method="POST">

            <div class=" my-5 col-4">
                <label for="fname"> Your First Name</label>
                <input type="text" class="form-control"
                       placeholder="First name" aria-label="First name"
                       name="fname" id="fname" required>
            </div>

            <div class="col-4">
                <label for="lname"> Your Last Name</label>
                <input type="text" class="form-control"
                       placeholder="Last name" aria-label="Last name"
                       name="lname" id="lname" required>
            </div>
        <br>
            <div class="col-4">
                <input type="submit" name="inserted" value="Insert">
            </div>


    </form>


</div>

<?php require_once('./Requires/footer.php'); ?>
