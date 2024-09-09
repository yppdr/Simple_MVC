<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple MVC</title>
</head>
<body>
    <h1>List of users</h1>
    <ul>
        <?php foreach ($data['users'] as $user): ?>
            <li><?php echo $user['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>