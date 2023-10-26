<!DOCTYPE html>
<html>
<head>
    <title>CRUD Example</title>
</head>
<body>
    <h1>CRUD Example</h1>
    
    <form method="post" action="create.php">
        <input type="text" name="item" placeholder="Enter an item">
        <button type="submit">Add</button>
    </form>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'read.php'; ?>
        </tbody>
    </table>
</body>
</html>
