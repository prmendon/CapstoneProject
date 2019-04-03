<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <link rel="stylesheet" href="style.css">
    <header>
        <link rel="stylesheet" href="header.css">
    </header>
    <?php session_start(); ?>
</head>
<title>HRTMApproval</title>
<body>
	<div class="Menu">
        <?php
        if(isset($_SESSION['user'])) {
            echo '<a style="float: right" href="userProfile.php">Hi,'. $_SESSION["user"] . '</a>';
        }
        else
        {
            echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
        }
        ?>
    </div>
    <div class="main_body">
        <div class="sidebar">
            <a href="#home">Home</a>
            <a class="active" href="#training">Training Management</a>
            <a  href="#groupManagement">Group Management</a>
            <a href="#userManagement">User Management</a>
            <a href="logout.php">Log Out</a>
        </div>
        <div class="content">
            <h1> Learning System Management</h1>
            <div class="content_body">


                                  <!-- Prajna -->

               

        <div class= "navbar">
          

                <div class="topnav" id="myTopnav">
  
 
  <a  href="#contact">Active Trainings</a>
  <div class="dropdown">
    <button class=" active dropbtn" >Approvals 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#" >Approved Reviews</a>
      <a href="#">Denied Reviews</a> 
    </div>
  </div> 
  <a href="#about">Archived Trainings</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>





        </div>
<button type="submit" id="btnExport" name='Export' value = "Export to Excel" class="btn-info">Export to Excel</button>


    <br /><br />
<br>
<br>
<br>


    <h3>Training List:</h3>
    
    <article>
    <table>
        <center>
            <tr>
                <th>Training Name</th>
                <th>Employee Name</th>
                <th>Completed on</th>
                <th>Action</th>
            </tr>
            <tr>
               <td></td>
                <td></td>
                <td></td>
                <td><input type="submit" name="review" value="Review"></td>              
            </tr>
        </center>
    </table>
    </article>

                                 <!-- Prajna -->

        </div>
    </div>
</div>

</body>
<footer >

    <link rel="stylesheet" href="footer.css">

	
</footer>
</html>