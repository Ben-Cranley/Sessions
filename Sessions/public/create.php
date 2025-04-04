<?php
if (isset($_POST['submit'])) {
    require "../common.php";
    try {
        require_once '../src/DBconnect.php';
        $new_user = array(
            "Username" => escape($_POST['Username']),
            "Password" => escape($_POST['Password']),
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "accounts",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
    <h2>Add a user</h2>
    <form method="post">
        <label for="Username">Create Username:</label>
        <input type="text" name="Username" id="Username">

        <label for="Password">Create Password:</label>
        <input type="password" id="pwd" name="Password">

        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="index.php">Back to home</a>