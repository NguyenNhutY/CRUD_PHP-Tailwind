<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-content-center">
<?php
// Connect to the database (replace with your database credentials)
require_once './connect.php';

$sql = "SELECT * FROM item";
$result = mysqli_query($conn, $sql);

  
// Display items in a table

?>
<div class="container rounded-md my-8 max-width-500px mx-auto  align-items-center rounded-md">
    <h1 class="mb-8">List Student</h1>

<table class="text-left w-full">
  <thead class="bg-black flex text-white w-full">
    <tr class="flex w-full mb-3">
      <th class="p-4 w-1/3">ID Student</th>
      <th class="p-4 w-1/3">Name</th>
      <th class="p-4 w-1/3">Class</th>
    </tr>
  </thead>
  <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
    <?php
    while ($r = mysqli_fetch_assoc($result)) {
        ?>
       <tr  class="flex w-full mb-3">
        <td class="p-4 w-1/3"><?php echo $r['ID_Student'] ?></td>
        <td class="p-4 w-1/3"><?php echo $r['Name'] ?></td>
        <td class="p-4 w-1/3"><?php echo $r['Class'] ?></td>
       </tr>
       <?php
    
}
?>

<?php
$conn->close();
?>
  </tbody>
</table>
</div>
</body>
</html>

