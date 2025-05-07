<?php
error_reporting(0);
  include "header.php";
?>
    <h1>Method GET</h1>
        <h2>Form Login</h2>
           <form name="form1" method="POST" action="latihan7.php">
              <span arial-label="user">Username:</span>
              <input type="text" name="user" class="form-control" required="TRUE">
              <span arial-label="pass">Password:</span>
              <input type="password" name="pass" class="form-control" required="TRUE">
              <br>
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
            <p>
                <?php
                if($_POST['user'] != ""){
                    $username = $_POST['user'];
                    $password = $_POST['pass'];
                    echo "<div class='alert alert-success'>";
                    echo "USERNAME: " .$username."<br>";
                    echo "PASSWORD: " .$password;
                    echo "</div>";
                }
                ?>
                </p>
<?php
  include "footer.php";
?>