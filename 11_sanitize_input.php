<?php

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, $_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, $_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
    echo $age;
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">

</form>