<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Weapons List</title>
</head>
<body>
    <h1>Weapons</h1>
    <ul>
        <?php foreach ($_POST['weapons'] as $weapon): ?>
            <li>
                <h2><?= $weapon['name'] ?></h2>
                <ul>
                    <li>Cost: <?= $weapon['cost'] ?>c</li>
                    <li>Type: <?= $weapon['weapon_type'] ?></li>
                    <li>Damage: <?= $weapon['damage'] ?></li>
                    <li>Damage Type: <?= $weapon['damage_type'] ?></li>
                    <li>Properties: <?= $weapon['properties'] ?></li>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
