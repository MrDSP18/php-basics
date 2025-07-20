<!-- form.html -->
<form action="formHandler.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "Hello, $name!";
}
?>
