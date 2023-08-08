<?php
require 'vendor/autoload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact List</title>

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
    <h1>Contact List</h1>

    <?php
        $utility = new \App\Lib\Utility();
        $contacts = $utility->contacts();
    ?>

    <table>
        <tr>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Country</th>
        </tr>
        <?php
        foreach ($contacts as $contact) {
        ?>
            <tr>
                <td><?php echo $contact->phone; ?></td>
                <td><?php echo $contact->email; ?></td>
                <td><?php echo $contact->country; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>