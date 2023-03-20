<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Weapons List</title>
</head>
<body>
    <h1>Weapons</h1>
    <ul>
        <?php foreach ($weapons as $weapon): ?>
            <li>
                <h2><?= $weapon['name'] ?></h2>
                <ul>
                    <li>Cost: <?= $weapon['cost'] ?></li>
                    <li>Type: <?= $weapon['weapon_type'] ?></li>
                    <li>Damage: <?= $weapon['damage'] ?></li>
                    <li>Properties: <?= $weapon['properties'] ?></li>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
