<?php
session_start();
if(! isset($_SESSION['id'])){
    header("Location: index.php");  
}
require 'init.php'; 
require  LAYOUTS . 'header.php'; 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name     = $_POST['name'];
        $username = $_POST['username'];
        $pass     = sha1($_POST['password']);
        $email    = $_POST['email'];
        $q = 'INSERT INTO users(name, username, password, email) VALUES(:zname, :zusername, :zpass, :zemail)';
        $stmt = $conn->prepare($q);
        $stmt->execute(array(
            'zname'     => $name,
            'zusername' => $username,
            'zpass'     => $pass,
            'zemail'    => $email
        ));
        echo $stmt->rowCount().' user added';
    }
?>

<a href="logout.php">Logout</a>
<a href="show.php">Show</a>
<form class="login" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" >
        <h1 class="text-center">Add</h1>
        <input type="text" name="name" class="form-control" placeholder="Name" />
        <input type="text" name="username" class="form-control" placeholder="Username" />
        <input type="email" name="email" class="form-control" placeholder="Email" />
        <input type="password" name="password" class="form-control" placeholder="Password" />
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Add" />
    </form>

<?php  require  LAYOUTS . 'footer.php';  ?>