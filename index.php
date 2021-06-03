<?php
if(isset($_GET['FirstName'])){ //data exists, show it
  echo $_GET['FirstName'];
} else{//no data, show form
    echo '
    <form action="">
    Name: <input type="text"
    name="FirstName" /><br />
    <input type="submit" />
    </form>
    ';
}