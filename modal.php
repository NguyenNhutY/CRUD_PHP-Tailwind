<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./dist/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="security.js"></script>
  <link rel="stylesheet" href="./dist/body.css">
</head>
<body>
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
                    sm:ml-3 sm:w-auto" >Add</button>
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
                  sm:mt-0 sm:w-auto" >Cancel
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
</body>
</html>