<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 100px auto; /* Added margin for separation from top */
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 2px 5px;
        border-radius: 5px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 98%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }
    

    a, button {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        border: 1px solid #333;
        border-radius: 3px;
        background-color: #f2f2f2;
        color: #333;
        text-decoration: none;
    }


    button:hover {
        background-color: #333;
        color: #fff;
    }
    </style>
    <head>
        <title>Codeigniter 4 CRUD</title>
</head>
<body>
    <div class="container">
            <form method="post" id="add_create" action="<?php echo site_url('/submit-form') ?> ">
                   
                    <label>First Name</label>
                    <input type="text" name="first_name" required>

                    <label>Last Name</label>
                    <input type="text" name="last_name" required>

                    <label>Contact Number</label>
                    <input type="text" name="contact_no" required>
  
                    <label>Date of Birth</label>
                    <input type="date" name="birthday" required>
      
                    <label>Address</label>
                    <input type="text" name="address" required>
          
                <button type="submit">Add</button><a href="<?php echo site_url('/users-list')?>">Cancel</a>
          
        </form>
       
    </div>
</body>
</html>

