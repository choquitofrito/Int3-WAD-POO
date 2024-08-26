<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./classes/User.php";
    
    // construction
    $user1 = new User (['login'=>'user1@gmail.com']);
    var_dump ($user1);
    
    ?>
</body>

</html>