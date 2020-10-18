<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">Contact us</a></li>
        </ul>
    </nav>
    <header>
        <ul>
            <?php foreach($results as $result) : ?>
                <li>
                    <?php if($result->is_completed) : ?>
                        <strike><?= $result->title ?></strike>
                    <?php else : ?>
                        <?= $result->title ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </header>
</body>
</html>