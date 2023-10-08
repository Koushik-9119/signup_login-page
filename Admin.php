<?php
include 'connection.inc.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css">
</head>
<style>
    table {
    margin-top: 52px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
<body>
<div class="container" data-ng-app="myApp" data-ng-controller="myCtrl">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Password</th>
        </tr>
        <?php 
            $select_users = mysqli_query($con, "SELECT * FROM `users_login`") or die('query failed');
            while($fetch_users = mysqli_fetch_assoc($select_users)){?>
        <tr data-ng-repeat="customer in people | filter: table">      
            <td><?php echo $fetch_users['id']; ?></td>
            <td><?php echo $fetch_users['name']?></td>
            <td><?php echo $fetch_users['username']?></td>
            <td><?php echo $fetch_users['password']?></td>
        </tr>
        <?php };?>
    </table>
</div>
</body>
</html>



