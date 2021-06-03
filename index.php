<?php
if(isset($_GET['FirstName'])){ //data exists, show it
  echo $_GET['FirstName'] . ' ' . $_GET['LastName'];
} else{//no data, show form
    echo '
    <form action="">
    First Name: <input type="text" name="FirstName" /><br />
    Last Name: <input type="text" name="LastName" /><br />
    <input type="submit" />
    </form>
    ';
}
