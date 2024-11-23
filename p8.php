<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>form login</h2>
    <?php
    $username = "admin";
    $password = "123";

    function infoPost($arrayData) {
        $info = "<strong>Data</strong><br>";
        foreach ($arrayData as $key => $val) {
            $info .= $key . " : " . $val . "<br>";
        }
        return $info;
    }
    ?>

    <form method= "post" >
        username : <input type="text" name="user"><br>
        password : <input type="password" name="pas">
        <br>
        <input type="submit" value="login">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if ($_POST['user'] == $username AND $_POST['pas'] == $password) {
            echo '<span style="color:green">User ' .$_POST['user']. ' berhasil login</span>';
        }else{
            echo '<span style="color:red">User ' .$_POST['user']. ' gagal login</span>';
        }
    }
    ?>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';

            echo infoPost($_POST);

            if($_POST['user'] == $username AND $_POST['pas'] == $password){
                echo '<span style="color:green">User' .$_POST['user']. 'benar</span>';
            }else{
                echo '<span style="color:red">User' .$_POST['user']. 'salah</span>';
            }
        }
    ?>   
</body>
</html>