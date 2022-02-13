<?php
   require_once('./Requires/header.php');
   require('./DataBase/DataBase.php'); 
 ?>
<?php



$sql = "SELECT * FROM posts"; 
$stmt = $pdo->prepare($sql); 
$stmt->execute();
$results = $stmt->fetchAll();

 if(isset($_POST['updated'])){
    
     $sql ="UPDATE posts SET fname = :fname , lname = :lname WHERE id = :id";
     $stmt = $pdo->prepare($sql);
     $id = $_GET['id'];  
     $firstname = $_POST['fname'];
     $lastname = $_POST['lname'];
     $stmt->bindParam(':fname',$firstname);
     $stmt->bindParam(':lname', $lastname);
     $stmt->bindParam(':id', $id,);
     $stmt->execute();
     header("Location: show.php",true);

 }
 
?>
<?php  foreach($results as $result): ?>
<form method="POST" >

            <div class=" my-5 col-4">
                <label for="fname"> Your First Name</label>
                <input type="text" class="form-control"
                       placeholder="First name" aria-label="First name"
                       name="fname" id="fname" value=" <?php echo $result['fname']; ?>" required>
            </div>

            <div class="col-4">
                <label for="lname"> Your Last Name</label>
                <input type="text" class="form-control"
                       placeholder="Last name" aria-label="Last name"
                       name="lname" id="lname" value=" <?php echo $result['lname']; ?>" required>
            </div>
        <br>
            <div class="col-4">
                <input type="submit" name="updated" value="update">
            </div>


    </form>

<?php  endforeach;?>




<?php require_once('./Requires/footer.php'); ?>