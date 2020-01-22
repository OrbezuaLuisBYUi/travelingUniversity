<?php
$Majors = array("CS"=>"Computer Science","WDD"=>"Web Design and Development","CIT"=>"Computer information Technology","CE"=>"Computer Engineering");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" href="css/main.css?<?php echo time(); ?>" /> <!--echo time to control the cash memory to refresh-->
    <!--This is the CDN to connect with BootstrapCDN CSS, library external servers-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--This is the CDN to connect with BootstrapCDN Javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>travelingUniversity</title>
</head>
<body class="inputUser">
<!--form if a formulary-->
<form method="post" action="<?php echo htmlspecialchars('processInfo.php');?>"><!--action is active with the button submit, line 51-->
    Name:<br>
    <input type="text" name="name" placeholder="Name"><br>
    Email:<br>
    <input type="email" name="email" placeholder="Email"><br>
    <!--this is a for loop to run the associative array key and value-->
    Major:<br>
    <?php
        $i = 0;
        foreach($Majors as $key => $value)//key is the acronism and value is the name of the degree or majors
        {
            $i++; //for is about the id of radio button for is major and Id is major to recognize themsevels
            echo '<label for="major'.$i.'" class="cursorpointer"><input type="radio" value="'.$key.'" name="major" id="major'.$i.'"> '.$value.'</label><br>';
        }
    ?>
    Comments:<br>
    <!--are for a text is the textarea. cols and rows to give a size-->
    <textarea name="comments" cols="50" rows="8" placeholder="Write your comments"></textarea><br>
    Continents:<br>
    North America<br>
    <label for="NA" class="cursorpointer"><input type="checkbox" name="NA" value="North America" id="NA"> North America</label><br>
    South America:<br>
    <label for="SA" class="cursorpointer"><input type="checkbox" name="SA" value="South America" id="SA"> South America</label><br>
    Europe:<br>
    <label for="EU" class="cursorpointer"><input type="checkbox" name="EU" value="Europe" id="EU"> Europe</label><br>
    Asia:<br>
    <label for="AS" class="cursorpointer"><input type="checkbox" name="AS" value="Asia" id="AS"> Asia</label><br>
    Australia:<br>
    <label for="AU" class="cursorpointer"><input type="checkbox" name="AU" value="Australia" id="AU"> Australia</label><br>
    Africa:<br>
    <label for="AF" class="cursorpointer"><input type="checkbox" name="AF" value="Africa" id="AF"> Africa</label><br>
    Antarctica:<br>
    <label for="AN" class="cursorpointer"><input type="checkbox" name="AN" value="Antarctica" id="AN"> Antarctica</label><br>

    <button type="submit" class="btn btn-primary">Send information</button>
</form>
</body>
</html>