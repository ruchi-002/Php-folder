<?php
// Starting session
session_start();
?>
<html>
<body>


<script>
// Check if the sessionStorage object exists
if(sessionStorage) {
    // Store data
    sessionStorage.setItem("last_name", "Parker");
    
    // Retrieve data
    alert("Hi, " + localStorage.getItem("first_name") + " " + sessionStorage.getItem("last_name"));
} else {
    alert("Sorry, your browser do not support session storage.");
}
</script>
</body>
</html>