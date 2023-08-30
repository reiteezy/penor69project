<!DOCTYPE html>
<html>
    <style>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 2px 5px;
        border-radius: 5px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    a {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        border: 1px solid #333;
        border-radius: 3px;
        background-color: #f2f2f2;
        color: #333;
        text-decoration: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .edit-link, .delete-link {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        border: 1px solid #333;
        border-radius: 3px;
        background-color: #f2f2f2;
        color: #333;
        text-decoration: none;
    }

    .edit-link:hover, .delete-link:hover {
        background-color: #333;
        color: #fff;
    }
</style>


    </style>
    <head>
        <title>Codeigniter</title>
</head>
<body>
    <div class="container">
    <a href="<?php echo site_url('/user-form')?>">Add User</a>
<table class="" id="users-list">
    
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>Date of Birth</th>
            <th>Address</th>
</tr>
        <?php if($users): ?>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['first_name']; ?></td>
            <td><?php echo $user['last_name']; ?></td>
            <td><?php echo $user['contact_no']; ?></td>
            <td><?php echo $user['birthday']; ?></td>
            <td><?php echo $user['address']; ?></td>
        <td>
        <a href="<?php echo base_url('edit-view/'.$user['id']);?>" class="edit-link">Edit</a>
        <a href="<?php echo base_url('delete/'.$user['id']);?>" class="delete-link">Delete</a>
</td>
</tr>
        <?php endforeach; ?>
        <?php endif; ?>


    </table>
</div>
</body>
</html>