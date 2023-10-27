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
    <h1 class="mb-8 text-white text-2xl text-center">LIST STUDENT</h1>
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
                    sm:ml-3 sm:w-auto" onclick="closeModal()">Add</button>
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
                  sm:mt-0 sm:w-auto" onclick="closeModal()">Cancel
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    <script>
      const openModal = () => {
        document.getElementById("myModal").classList.remove("hidden");
      }
      const closeModal = () => {
        document.getElementById("myModal").classList.add("hidden");
      }
      document.getElementById("open-modal").addEventListener("click", openModal);
      document.getElementById("close-modal").addEventListener("click", closeModal);
    </script>
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
              </div>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>