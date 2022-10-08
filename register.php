<?php
require 'connection.php';
if (isset($_POST['register'])){
    if(isset($_POST['fname'], $_POST['lname'], $_POST['uname'], $_POST['pass'], $_POST['email'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $pas = $_POST['pass'];
        $email = $_POST['email'];
        $sql = "INSERT INTO signup VALUES('', '".$fname."', '".$lname."', '".$uname."', '".$pas."', '".$email."')";
        $result = $db->query($sql);
        if($result){
            echo "yes";
            ?>
<script>
alert("You have succesfully regitered enjoy full live streaming and downloading high quality songs");
</script>
<?php
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="semantic-ui-css/semantic.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="parsley/dist/parsley.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="ui container">
            <div class="ui segment">
                <h2 class="center aligned">Registration Page</h2>
            </div>
            <div class="ui segment">
        <form class="ui form" id="form" method="POST" action="">
            <label class="ui ribbon label">First Name:</label>
            <input type="text" name="fname" required data-parsley-pattern="^[a-zA-Z]+$"
                               data-parsley-trigger="keyup"/>
            <label class="ui ribbon label">Last Name:</label>
            <input type="text" name="lname" required data-parsley-pattern="^[a-zA-Z]+$"
                               data-parsley-trigger="keyup"/>
            <label class="ui ribbon label">Username:</label>
            <input type="text" name="uname" required data-parsley-pattern="^[a-zA-Z]+$"
                               data-parsley-trigger="keyup"/>
            <label class="ui ribbon label">password:</label>
            <input type="text" name="pass" required data-parsley-pattern="^[a-zA-Z0-9@$*]+$"
                               data-parsley-trigger="keyup"/>
            <label class="ui ribbon label">Re-enter Password:</label>
            <input type="text" name="pass" id="pass" required data-parsley-pattern="^[a-zA-Z0-9@*]+$"
                               data-parsley-trigger="keyup" data-parsley-equalto="#pass"/>
            <label class="ui ribbon label">Email:</label>
            <input type="text" name="email" required data-parsley-pattern="^[a-zA-Z.@]+$"
                               data-parsley-trigger="keyup"/>
          <br/><br/>
                <div class="ui buttons">
                    <input type="submit" value="Register" name="register" class="ui green button"/>
                    <div class="or" data-text="Or"></div>
                    <a class="ui olive button" href="login.php">Log In</a>
                </div>
           
        </form>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function(){
        $('.ui.form').parsley();
    })
    
</script>
