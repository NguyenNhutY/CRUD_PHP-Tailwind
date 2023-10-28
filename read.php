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
<<<<<<< HEAD
    <h1 class="mb-8 text-white text-2xl font-semibold text-center">LIST STUDENT</h1>
=======
<<<<<<< HEAD
    <h1 class="mb-8 text-white text-2xl font-semibold text-center">LIST STUDENT</h1>
=======
    <h1 class="mb-8 text-white text-2xl text-center">LIST STUDENT</h1>
>>>>>>> 59cdcb72b56f86e044f0e226ffb07d5e47228e61
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
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
<<<<<<< HEAD
   <?php 
   include('./modal.php');
   ?>
=======
    <div id="myModal" class="modal 
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
      </div>
      <div class="modal-container 
                  bg-white 
                  w-11/12 
                  md:max-w-md 
                  mx-auto 
                  rounded 
                  shadow-lg 
                  z-50 
                  overflow-y-auto">
        <!-- Modal content -->
        <div class="modal-content py-4 text-left px-6">
          <div class="modal-header">
            <h1 class="text-2xl font-semibold">Add Student</h1>
          </div>
          <div class="modal-body">
            <!-- Your PHP content goes here -->
            <form action="./create.php" method="post" class="
                  rounded-md 
                  py-8
                  max-width-500px
                  width-500px
                  mx-auto  
                  align-items-center
                  rounded-md 
                  ">
              <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                  <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information
                  </h2>
                  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                      <label for="name" class="block 
                                text-sm 
                                font-medium 
                                leading-6 
                                text-gray-900">
                        Name
                      </label>
                      <div class="mt-2">
                        <input type="text" name="name" id="name" class="block 
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
                                                    text-gray-900">
                        ID Student
                      </label>
                      <div class="mt-2">
                        <input id="id_student" name="id_student" type="text" class="block 
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
                                                text-gray-900">
                        Class
                      </label>
                      <div class="mt-2">
                        <input id="class" name="class" type="text" class="block 
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
                    </div><!---->
                  </div>
                </div>
              </div>
              <div class="modal-footer mt-4 bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <!-- Modal actions, buttons, etc. go here -->
                <button type="submit" class="inline-flex 
                    w-full 
                    justify-center 
                    rounded-md 
                    bg-green-600 
                    px-3 
                    py-2 
                    text-sm 
                    font-semibold 
                    text-white 
                    shadow-sm 
                    hover:bg-green-500 
<<<<<<< HEAD
                    sm:ml-3 sm:w-auto" >Add</button>
=======
                    sm:ml-3 sm:w-auto" onclick="closeModal()">Add</button>
>>>>>>> 59cdcb72b56f86e044f0e226ffb07d5e47228e61
                <button id="close-modal" type="button" class="mt-3 
                  inline-flex 
                  w-full 
                  justify-center 
                  rounded-md 
                  bg-white 
                  px-3 
                  py-2 
                  text-sm 
                  font-semibold 
                  text-gray-900 
                  shadow-sm 
                  ring-1 
                  ring-inset 
                  ring-gray-300 
                  hover:bg-gray-50 
<<<<<<< HEAD
                  sm:mt-0 sm:w-auto" >Cancel
=======
                  sm:mt-0 sm:w-auto" onclick="closeModal()">Cancel
>>>>>>> 59cdcb72b56f86e044f0e226ffb07d5e47228e61
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    <div id="myModalDeleted" class="modal 
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
            <h1 class="text-2xl font-semibold">This student was deleted</h1>
          </div><!---->
        </div><!---->
    </div><!---->
    </div> <!----><!-- /.box-body -->
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
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
<<<<<<< HEAD
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
=======
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
=======
                <a href="./edit.php?id=<?php echo $r['ID']; ?>" class="rounded-md 
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
                <a onclick="return confirm('Are you want to delete this student? ');" href="delete.php?id=<?php echo $r['ID'];?>" class="rounded-md 
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
                                                                                  inline-block">Delete</a>
>>>>>>> 59cdcb72b56f86e044f0e226ffb07d5e47228e61
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
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
<<<<<<< HEAD
  <script:src="/modal.js"></script>

=======
  <script>
      const openModal = () => {
        document.getElementById("myModal").classList.remove("hidden");
      }
      const closeModal = () => {
        document.getElementById("myModal").classList.add("hidden");
      }
      document.getElementById("open-modal").addEventListener("click", openModal);
      document.getElementById("close-modal").addEventListener("click", closeModal);
      const openModalDelete = () => {
        document.getElementById("myModalDelete").classList.remove("hidden");
      }
      const closeModalDelete = () => {
        document.getElementById("myModalDelete").classList.add("hidden");
      }
      document.getElementById("open-modal-delete").addEventListener("click", openModalDelete);
      document.getElementById("close-modal-delete").addEventListener("click", closeModalDelete);
      const openModalDeleted = () => {
        document.getElementById("myModalDelete").classList.add("hidden");
        document.getElementById("myModalDeleted").classList.remove("hidden");
      }
      const closeModalDeleted = () => {
        document.getElementById("myModalDeleted").classList.add("hidden");
      }
      document.getElementById("open-modal-deleted").addEventListener("click", openModalDeleted);
      document.getElementById("close-modal-deleted").addEventListener("click", closeModalDeleted);
    </script>
>>>>>>> 9699133107636483229c2410c68705da8b4e59fa
</body>

</html>