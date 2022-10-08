
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="semantic-ui-css/semantic.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.min.js" type="text/javascript"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="ui container">
            <div class="ui segment">
                <h1 class="center aligned">WELCOME TO ONLINE MUSIC LIBRARY</h1>
                <p>Enjoy full streaming with high quality</p>
                <nav class="ui responsive sticky menu">
                    <a href="#" class="item active">Home</a>
                    <a href="#" class="item">Contact Us</a>
                    <a href="#" class="item">About Us</a>
                    <a href="#" class="item">Service</a>
                </nav>
            </div>
            <div class="ui green grid segment">
                <div class="row">
                    <div class="column four wide">
                        <ul>
                            <li><a href="login.php" class="ui link">Log In</a></li>
                            <li><a href="register.php" class="ui link">Register</a></li>
                            <li><a href="uploader.php" class="ui primary link">Upload Songs</a></li>
                            <li><a href="Songs.php" class="ui link">Downloads</a></li>
                        </ul>
                    </div>
                    <div class="column eight wide">
                        <h2></h2>
                        What Are Some Key Concepts in the Field of Production Management?
                        Production management consists of several processes, including quality assurance, budgeting and expense control. It may also take into account inventory control, production planning and product conceptualization. This article discusses the major aspects of production management. Read on for further information. Schools offering Global Operations & Supply Chain Management degrees can also be found in these popular choices.

                        Production Management Overview and Key Concepts
                        Production management is often referred to as operations management or manufacturing management. It can be defined as the administration of all processes, materials and personnel involved in the creation of manufactured goods. Production management techniques are used in the assembly and distribution of items from clothing to automobiles. Professionals in the field can look to organizations such as the Product Development and Management Association, www.pdma.org, for resources and development seminars.

                    </div>
                    <div class="column four wide">
                        <h2 class="">Available Singers</h2>
                        <ul>
                            <?php
                            require_once 'connection.php';
                            $data = array();
                            $sql = "SELECT DISTINCT `singer` FROM song";
                            $result = $db->query($sql);
                            if ($result) {
                                while ($row = $result->fetch_array()) {
                                    $data[] = $row;
                                    
                                }
                                  foreach ($data as $r){
                                        $name = $r['singer']; 
                                    ?>                                    
                                    <li><?php echo $r['singer'];;                                    
                                    ?></li>
                                    <?php
                                    
                                    a:
                                    }
                                }
                            
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ui footer">
                <div class="ui horizontal segment">
                    <h3 class="center aligned"></h3>
                    <p>We provide latest and quality musics from world class musician, and also traditional
                        musician from all over and across the globe.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>