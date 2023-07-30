<!DOCTYPE html>
<html>
<body>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<ol>
    <?php
    $names= ['uman', 'suman', 'ritu','polar', 'golar'];

    echo $names [3];

    foreach ($names as $name) {
        ?>
        <li><?php echo $name; ?></li>

        <?php
    }
    ?>
</ol>



<ul>
    <?php
    $items = [
        [ 'firstname' => 'Uman', 'lastname' => 'Rai' ],
        [ 'firstname' => 'Kaushila', 'lastname' => 'Rai1' ],
        [ 'firstname' => 'Tejendra', 'lastname' => 'Rai2' ],
    ];

    foreach ($items as $user){

        ?>

        <li> <?php echo $user['firstname'] . " " . $user['lastname'];
            ?> </li>
    <?php } ?>
</ul>

<table>
    <tr>
        <th> Firstname </th>
        <th> Lastname </th>

    </tr>
    <?php foreach ($items as $user) { ?>
        <tr>
            <td> <?php echo $user['firstname']; ?> </td>
            <td> <?php echo $user['lastname']; ?> </td>

        </tr>
    <?php } ?>
</table>

<?php
$images = [
    'https://wprefers.com/wp-content/uploads/2022/06/yoast-vs-all-in-one.png',
    'https://wprefers.com/wp-content/uploads/2023/07/remove-powered-by-wordpress-jpg.webp',
    'https://wprefers.com/wp-content/uploads/2023/07/paraphrasing-tools.webp'
];
?>
<?php foreach ($images as $image) { ?>
    <img src="<?php echo $image; ?>" alt="poto" width="100" height="200">
<?php } ?>

</body>
</html>
