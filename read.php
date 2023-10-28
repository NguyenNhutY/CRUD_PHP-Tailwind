<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="output.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./dist/body.css">
</head>
<body class="lg flex justify-content-center">
  <?php
  // Connect to the database (replace with your database credentials)
  require_once './connect.php';
  $sql = @"SELECT * FROM item order by ID_Student , Name";
  $result = mysqli_query($conn, $sql);
  // Display items in a table
  ?>
  <div class="container 
              rounded-md 
              my-8 
              max-width-500px 
              mx-auto  
              align-items-center 
              rounded-md">
    <h1 class="mb-8 text-white text-2xl font-semibold text-center">LIST STUDENT</h1>
    <button id="open-modal" class="bg-green-600 
            hover:bg-green-500 
            text-white 
            font-bold 
            py-2 
            px-4 
            rounded">
      Add
    </button>
    <br><br>
   <?php 
   include('./modal.php');
   ?>

    <table class="bg-white text-left w-full">
      <thead class="bg-black flex text-white w-full">
        <tr class="flex w-full mb-3">
          <th class="p-4 w-1/4 text-center">ID Student</th>
          <th class="p-4 w-1/4 text-center">Name</th>
          <th class="p-4 w-1/4 text-center">Class</th>
        </tr>
      </thead>
      <tbody class="bg-grey-light 
      flex 
      flex-col 
      items-center 
      justify-between 
      overflow-y-scroll 
      w-full" style="height: 50vh;">
        <?php
        while ($r = mysqli_fetch_assoc($result)) {
        ?>
          <tr class="flex w-full mb-3">
            <td class="p-4 w-1/4 text-center"><?php echo $r['ID_Student'] ?>
            </td>
            <td class="p-4 w-1/4 text-center"><?php echo $r['Name'] ?></td>
            <td class="p-4 w-1/4 text-center"><?php echo $r['Class'] ?></td>
            <td>
              <div class="mt-6 flex items-center justify-end gap-x-6 ">
                <a href="./edit.php?id=<?php echo $r['ID']; ?>" 
                    class="rounded-md 
                            bg-green-500 
                            px-3 
                            py-2 
                            text-sm 
                            font-semibold 
                            text-white 
                            shadow-sm hover:bg-green-400 
                            focus-visible:outline 
                            focus-visible:outline-2 
                            focus-visible:outline-offset-2 
                            focus-visible:outline-indigo-600"> Edit
                </a>
                <a  class="rounded-md 
                          bg-orange-700 
                          px-3 py-2 
                          text-sm 
                          font-semibold 
                          text-white 
                          shadow-sm 
                          hover:bg-orange-600 
                          focus-visible:outline 
                          focus-visible:outline-2 
                          focus-visible:outline-offset-2 
                          focus-visible:outline-indigo-600 
                          inline-block
                          cursor-pointer"
                  id ="open-modal-delete">Delete</a>
              </div>
            </td>
          </tr>
          <div id="myModalDelete" class="modal 
              hidden 
              fixed 
              inset-0 
              w-full 
              h-full 
              flex 
              items-center 
              justify-center 
              z-50">
      <div class="modal-overlay 
                  absolute 
                  w-full 
                  h-full 
                  bg-gray-900 
                  opacity-50">
      </div><!---->
      <div class="modal-container 
                  bg-white 
                  w-11/12 
                  md:max-w-md 
                  mx-auto 
                  rounded 
                  shadow-lg 
                  z-50 
                  overflow-y-auto">

        <div class="modal-content py-4 text-left px-6">
          <div class="modal-header">
            <h1 class="text-2xl ">Are you want to delete this student?</h1>
          </div><!---->
        </div><!---->
        <div class="modal-body mt-4 bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <!-- Modal actions, buttons, etc. go here -->
                <a href="./delete.php?id=<?php echo $r['ID'];?>" id="open-modal-deleted" class="inline-flex 
                    w-full 
                    justify-center 
                    rounded-md 
                    bg-red-600 
                    px-3 
                    py-2 
                    text-sm 
                    font-semibold 
                    text-white 
                    shadow-sm 
                    hover:bg-red-500 
                    sm:ml-3 
                    sm:w-auto
                    cursor-pointer"> Delete 
                  </a>
                <a  id="close-modal-delete" class="inline-flex 
                    w-full 
                    justify-center 
                    rounded-md 
                    bg-gray-600 
                    px-3 
                    py-2 
                    text-sm 
                    font-semibold 
                    text-white 
                    shadow-sm 
                    hover:bg-gray-500 
                    sm:ml-3 
                    sm:w-auto
                    cursor-pointer"> Cancel 
                  </a>

      </div><!---->
    </div><!---->
    </div><!---->
        <?php
        }
        ?>
      </tbody>
      
    </table>
    
    <br><br>
    <button class="bg-gray-600 
            hover:bg-gray-500 
            text-white 
            font-bold 
            py-2 
            px-4 
            rounded
            flex
            float-right"
    onclick ="onclick=location.href='./read.php'">
      Back
    </button>

  </div>
  <script:src="/modal.js"></script>

</body>

</html>