<?php
  
  require_once 'header.php';

  echo "<div class='center'>Welcome to Social Red,";

  if ($loggedin) echo "$user, you are logged in";
  else           echo 'please sign up or log in';

  echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
      <h4 class= 'text'>Web App from <i><a href='http://localhost/Beta%20programs/Sistema/'
      target='_blank'>Web Development</a></i></h4>
    </div>
  </body>
</html>
_END;        

?>