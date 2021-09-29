<?php 
include ("config.php");
$conn = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "database is connected......";
};

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $comments = $_POST['comments']; 
    $sql = "INSERT INTO herotester (name,feedback) VALUES ('$name','$comments')"; 
    mysqli_query($conn,$sql);
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="login.php">
        <label for="name">User Name :</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="comments">Comments :</label><br>
        <textarea name="comments" id="comments" cols="30" rows="10" required></textarea><br>
        <input type="submit" value="finish" name="submit">
    </form>
</body>
</html>