<?php

session_start();

// 2. Unset all the session variables
unset($_SESSION['MEMBER_ID']);	
unset($_SESSION['MEMBER_NAMA']);	

?>
<script type="text/javascript">
    alert("Successfully logout!");
    window.location = "index.php";
</script>
