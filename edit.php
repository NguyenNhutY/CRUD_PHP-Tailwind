<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/security.js"></script>
    <link rel="stylesheet" href="./body.css">
</head>
<body class ="flex justify-content-center">
<?php
//lay id cua edit
$id = $_GET['id'];
//ket noi
require_once 'connect.php';

$edit_sql = "SELECT * FROM item WHERE ID = '$id'";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>
<form action="./update.php" method="post" class="rounded-md 
                                                  py-8 
                                                  max-width-500px 
                                                  width-500px
                                                  mx-auto  
                                                  align-items-center 
                                                  rounded-md 
                                                  ">
    <input type="hidden" name="id" value="<?php echo $id;?>" id="id">
  <div class="space-y-12">
    <div class="border-b 
                border-gray-900/10 
                pb-12"> 
      <h2 class="text-base 
                font-semibold 
                leading-7 
                text-gray-900"
      >Personal Information</h2>
      
      <div class="mt-10 
                  grid 
                  grid-cols-1 
                  gap-x-6 
                  gap-y-8 
                  sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="name" class="block 
                                    text-sm 
                                    font-medium 
                                    leading-6 
                                    text-gray-900"
          >Name</label>
          <div class="mt-2">
            <input type="text" 
                    name="name" 
                    id="name" 
                    value ="<?php echo $row['Name']?>" 
                    class="block 
                            w-full 
                            rounded-md 
                            border-0 
                            py-1.5 
                            text-gray-900 
                            shadow-sm 
                            ring-1 
                            ring-inset 
                            ring-gray-300 
                            placeholder:text-gray-400 
                            focus:ring-2 
                            focus:ring-inset 
                            focus:ring-indigo-600 
                            sm:text-sm 
                            sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-4">
          <label for="id_student" class="block 
                                          text-sm 
                                          font-medium 
                                          leading-6 
                                          text-gray-900"
                                          >ID Student</label>
          <div class="mt-2">
            <input id="id_student" 
                    name="id_student" 
                    type="text" 
                    value ="<?php echo $row['ID_Student']?>" 
                    class="block 
                            w-full 
                            rounded-md 
                            border-0 
                            py-1.5 
                            text-gray-900 
                            shadow-sm 
                            ring-1 
                            ring-inset 
                            ring-gray-300 
                            placeholder:text-gray-400 
                            focus:ring-2 
                            focus:ring-inset 
                            focus:ring-indigo-600 
                            sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-4">
          <label for="class" class="block 
                                    text-sm 
                                    font-medium 
                                    leading-6 
                                    text-gray-900"
                                    >Class</label>
          <div class="mt-2">
            <input id="class" 
                    name="class" 
                    type="text" 
                    value ="<?php echo $row['Class']?>"
                    class="block 
                          w-full 
                          rounded-md 
                          border-0 
                          py-1.5 
                          text-gray-900 
                          shadow-sm 
                          ring-1 
                          ring-inset 
                          ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
  <button id="open-modal" class="bg-gray-600 
            hover:bg-gray-500 
            text-white 
            font-bold 
            py-2 
            px-4 
            rounded"
    onclick ="location.href=('javascript:history.back()')">
      Back
    </button>
<<<<<<< HEAD
=======
=======
>>>>>>> 59cdcb72b56f86e044f0e226ffb07d5e47228e61
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
    <button class="rounded-md 
                                  bg-indigo-600 
                                  px-3 
                                  py-2 
                                  text-sm 
                                  font-semibold 
                                  text-white 
                                  shadow-sm hover:bg-indigo-500 
                                  focus-visible:outline 
                                  focus-visible:outline-2 
                                  focus-visible:outline-offset-2 
                                  focus-visible:outline-indigo-600"
      > Update </button>

  </div>
</form>

</body>
</html>
