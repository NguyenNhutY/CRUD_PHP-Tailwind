const ajax = (id)=>{
    document.getElementById("myButton").addEventListener("click", function() {
        var userConfirmed = confirm("Are you sure you want to proceed?");
    
        if (userConfirmed) {
          // User clicked "OK," make an AJAX request to a PHP script
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "delete.php?id=", true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
              // Handle the response from the PHP script if needed
              console.log(xhr.responseText);
            }
          };
          xhr.send();
        } else {
          // User clicked "Cancel," do nothing or handle it as needed
        }
      });
}

