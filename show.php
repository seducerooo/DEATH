<?php require_once('./Requires/header.php'); ?>
<?php include('./DataBase/DataBase.php'); ?>
<?php 

 $sql = "SELECT * FROM posts";
 $stmt = $pdo->prepare($sql);
 $stmt->execute();



 ?>
 <div class="container">
<?php foreach($results = $stmt->fetchAll(PDO::FETCH_ASSOC) as $result):  ?>
    
<div class="card" style="width: 18rem;">
           <div class="card-body">
               <h5 class="card-title">
                   <?php echo $result['fname']; ?>
               </h5>
               <h6 class="card-subtitle mb-2 text-muted">
                   <?php echo $result['lname']; ?>
               </h6>

               <a href="update.php?id=<?php echo $result['id']; ?>" class="card-link">
                   update
                </a>
               <a href="delete.php?id=<?php echo $result['id']; ?>& send=del" class="card-link">
                   delete
                </a>
           </div>
        </div>
<?php  endforeach; ?>
</div>







<?php require_once('./Requires/footer.php'); ?>