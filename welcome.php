<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>

        <!-- <form class="searchFormInputField">
                    <div class="input-group" style="margin: 7px 15px 15px 12px;width:250px">
                        <input type="text" id="myInputText" class="form-control searchbar" size="20"
                            placeholder="Search Here" required="" autocomplete = "on">
                        <span class="input-group-btn">
                            <button class="btn btn-default searchicon" type="button">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </div>
                </form> -->
   </body>
   
</html>