<?php
session_start();
$db = new mysqli("localhost", "root", "", "music");
if (isset($_POST['email'], $_POST['pass'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if (!empty($email) && !empty($pass)) {
        $sql = "SELECT * FROM signup WHERE email='$email' AND password='$pass'";
        $result = $db->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_array();
                $_SESSION['password'] = $row['password'];
                $_SESSION['username'] = $row['username'];
                header("location: Songs.php");
            } else {
                ?>
                <script>
                    alert('invalid username or password');
                </script>
                <?php
            }
        } else {
            echo mysqli_error($db);
        }
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>LOG IN PAGE</title>
        <link href="semantic-ui-css/semantic.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="parsley/dist/parsley.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="ui container">
            <div class="ui inverted segment" id="seg">
                <div class="ui segment">
                    <h1 class="text-center">Login</h1><i class="users icon"></i>
                </div>
                <div class="ui green inverted segment">
                    <form class="ui form" action="" method="POST">
                        <label class="ui ribbon label">Username:</label>
                        <input type="text" name="email" required data-parsley-pattern="^[a-zA-Z. ]+$"
                               data-parsley-trigger="keyup"/>
                        <label class="ui ribbon label">Password:</label>
                        <input type="text" name="pass" required data-parsley-pattern="^[a-zA-Z0-9 ]+$"
                               data-parsley-trigger="keyup"/>
                        <br/><br/>
                        <div class="ui buttons">
                            <input type="submit" name="login" value="Login" class="ui button"/>
                            <div class="or" data-text="Or"></div>
                            <a class="ui olive button" href="register.php">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $('.ui.form').parsley();
</script>