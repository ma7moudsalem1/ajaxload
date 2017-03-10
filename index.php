<?php 
session_start();
 if(isset($_SESSION['id'])){
    header("Location: dashboard.php");
 }
require 'init.php'; 
require  LAYOUTS . 'header.php'; 
?>

    <?php
       
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            
            $q = 'SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1';
            $stmt = $conn->prepare($q);
            $stmt->execute(array($username, $password));
            $count = $stmt->rowCount();
            $data = $stmt->fetch();
            if($count == 1){
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $data['id'];
                header("Location: dashboard.php");
            }
            else{
                
            }
        }

    ?>
    
    <form class="login" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" >
        <h1 class="text-center">Login</h1>
        <input type="text" name="username" class="form-control" placeholder="Username" />
        <input type="password" name="password" class="form-control" placeholder="Password" />
        <input type="submit" name="submit" class="btn btn-primary btn-block" vlue="Login" />
    </form>

<?php  require  LAYOUTS . 'footer.php';  ?>
