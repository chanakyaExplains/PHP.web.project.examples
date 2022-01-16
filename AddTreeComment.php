<! --- Use a localhost or web service to host this program and then type localhost.AddTreeComment.php
       Or (domain).AddTreeComment.php in a browser. You will need to create a database and table and 
       adjust this program by typing their names in the apropriate places.This program is for creating
        logs on the status of trees in a farm. I encourage you to adapt this to perform other 
        applications. This program is purely for educational purposes.
--->

<html>
<head>
    <title>Add Comment of tree to database</title>
</head>

<body>
    <form action="" method="POST">
        <table>
            <td><a4>Enter tree number.<a4><input type="text" name = "t_Number" required></td>
            <tr>
            </tr>
            <td><a4>Enter Comment.<a4> <input type = "text" name = "t_Comment" required></td>
            <tr>
            </tr>
            <td><input type= "submit" name="Add_data_to_log"></td>
        </table>
    </form>
</body>

<?php
if (isset( $_POST["Add_data_to_log"])){
    $t_Number = $_POST['t_Number'];
    $t_Comment = $_POST['t_Comment'];

    $sql = "INSERT INTO coconut_log (Tree_number , Comment) VALUES ('$t_Number' , '$t_Comment')";
    $server_name = 'localhost';
    $username = "newuser";
    $password = "password";
    $dataBase = "test";
    $connection = mysqli_connect($server_name , $username , $password , $dataBase);

    if (mysqli_query($connection,$sql)){
        echo "New tree added";
    
    }else{
        echo "An error occured!";
    }
}
?>

</html>
