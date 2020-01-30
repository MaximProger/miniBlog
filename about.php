<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Contact form</title>
</head>

<body>

    <?php require "./blocks/header.php" ?>
    
    <div class="container mt-5">
        <h3 class="mb-3">Contact form</h3>
        <form action="check.php" method="POST">
            <input type="email" name="email" placeholder="Enter Email" 
            class="form-control">
        <textarea name="message" class="form-control mt-3 mb-3" placeholder="Enrer message"></textarea>
        <button type="sabmit" name="send" class="btn btn-success">Send</button>
        </form>
    </div>

    <?php require "./blocks/footer.php" ?>


    
</body>

</html>