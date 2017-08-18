<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contacts Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h2>Contacts Manager</h2>
    
<?php

    include('Contact.php');

    Contact::sayHello();

    $fruits = Contact::getFruits();
    echo '<br>';
    echo json_encode($fruits);
?>

<ul>
<?php 
    foreach($fruits as $fruit){
?>
<li><?= $fruit['name'] ?> <b>(<?= $fruit['created'] ?>)</b></li>


<?php } ?>
</ul>

<table cellpadding="10" border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Created</th>
    </thead>
    <?php
        foreach($fruits as $fruit){
    ?>

    <tr>
        <td><?= $fruit['id'] ?></td>
        <td><?= $fruit['name'] ?></td>
        <td><?= $fruit['created'] ?></td>
    </tr>
        <?php } ?>
</table>



<h2>Contact Form</h2>

    <form id="contacts" action="processForm.php" method="post">
        <label>Name</label>
        <input type="text" name="name" value="" required>
        <br>
        <label>Email</label>
        <input type="text" name="email" value="" required>
        <br>
        <label>Phone</label>
        <input type="text" name="phone" value="" required>
        <br>
        <label>Gender</label>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female"></option>
        </select>
        <br>
        <label for=""> </label>
        <button type="submit" class="btn primary">Submit</button>
    </form>
    
    </body>
</html>