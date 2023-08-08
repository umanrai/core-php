<?php
    require 'vendor/autoload.php';

    $user = new App\User();
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<h1>Feeds - <?php echo $user->getFullName("uman", 'chamling', 'rai'); ?> - <?php echo $user->getCurrentTime(); ?></h1>
<?php
$feeds = new \App\Lib\Feed();
$feedItems = $feeds->get();

?>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Feed</th>
    </tr>
    <?php foreach ($feedItems as $feed) { ?>
        <tr>
            <td><?php echo $feed['name']; ?></td>
            <td><?php echo $feed["email"]; ?></td>
            <td><?php echo $feed["feed"]; ?></td>
        </tr>
    <?php } ?>


</table>

<h2>User list</h2>
<table>
    <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <?php
    $userItems = $user->get();
    foreach ($userItems as $userItem) {
    ?>
    <tr>
        <td><?php echo $userItem["Company"]; ?></td>
        <td><?php echo $userItem["Contact"]; ?></td>
        <td><?php echo $userItem["Country"]; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>