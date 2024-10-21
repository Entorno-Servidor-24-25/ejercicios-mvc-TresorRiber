<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users</title>
</head>
<body>
    <h1>USERS</h1>
    <form action="listUsers.php" method="POST">
        <?php if(!empty($usersList)):?>
        <?php foreach ($usersList as $user):?>
            <?php echo $user['id']; ?>
            <?php echo $user['name']; ?>
        <?php endforeach; ?>
        <?php else: ?>
            <p>No hay usuarios disponibles.</p>
        <?php endif; ?>
        <a href="../index.php">Volver a la página principal</a>
    </form>
</body>
</html>