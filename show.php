<?php
session_start();
if(! isset($_SESSION['id'])){
    header("Location: index.php");  
}
require 'init.php'; 
require  LAYOUTS . 'header.php';
?>



<div class="container text-center">
    <div class="table-reponsive">
        <table class="table">
            <tr>
                <td>#id</td>
                <td>Name</td>
                <td>Username</td>
                <td>email</td>
                <td>Action</td>
            </tr>
        
            <?php
                $q = "SELECT * FROM users";
                $stmt = $conn->prepare($q);
                $stmt->execute();
                $users = $stmt->fetchAll();
                foreach($users as $user){
            ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
            <?php } ?>
        </table>
    </div>
</div>

<?php  require  LAYOUTS . 'footer.php';  ?>