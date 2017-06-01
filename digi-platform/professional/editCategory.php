<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
      include '../functions.php';
if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) ){
  $id = $_GET['id'];
  
  $categories = retrieveCategoriesByProf($id); 
}
else{
  $id=0;
}
?>
<?php
      if (!isset($_SESSION['user'])){
        //session_start();
        //$_SESSION['name']='Bob';
        header("Location: http://econtact.digiverse.gr/digi-platform/");
        die();
      }

    ?>
<!DOCTYPE html>
<html lang="el">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>e-contact.gr Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">e-contact.gr</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="../dashboard.php">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="index.php">Professionals</a></li>
            <li><a href="../insProf.php">Insert Professional</a></li>
            <li class="active"><a href="#">Edit Professional</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Insert Categories</a></li>
            <li><a href="">Edit Categories</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Something Else</a></li>
            <li><a href="">Something Else</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Professional's Category</h1>

          
			     <?php
           while ($row = mysqli_fetch_row($categories)){
            echo "<div class='row' style='margin-bottom:20px;'>";
            echo "<div class='mainCat'><b>$row[0]</b></div>";
            echo "<div class='secCat'>$row[1]</div>";
            echo "<div class='deleteCat btn btn-danger' id='cate".$row[2]."' >Delete Category</div>";
            echo "</div>";
           }
            ?>
		      
            <div class="row">
              <h4> Add New Category </h4>
            </div>
            <div class="row">
              <div class="col-sm-10 cat1">
            <select name ="inputcat1">
              <option value="" disabled>Επιλέξτε Κατηγορία</option>
              <?php
                  $result = retrieveCategoryLevel1();
                  while ($row = mysqli_fetch_row($result)) {
                    if ($cat1==$row[0]){
                      echo "<option value='$row[0]' selected>".$row[0]."</option>";
                    }
                    else{
                      echo "<option value='$row[0]'>".$row[0]."</option>";
                    }
                   }
              ?>
            </select>
          </div>
            </div>
            <div class="row">
              <div class="cat2">
                <div class="col-sm-10 ">
                  <select name ="inputcat2" value="" id ="cateSec">
                     <?php echo "<option value='$cat2'>".$cat2."</option>"; ?>
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row" style='margin-top:10px;'>
              <div class="addCat btn btn-primary">Add Category</div>
            </div>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script>
    $(document).ready(function(){
      $(".deleteCat").click(function(){
        var r = confirm("Είστε σίγουροι;");
        if (r == true) {
            var del_id = $(this).attr('id');
            var catid = del_id.substring(4);
            $.ajax({
              type:'POST',
              url:'deleteCat.php?prof_id=<?php echo $id;?>',
              data:'cat_id='+catid, 
              success:function(data) {
                if(data) {   
                  alert("Η Διαγραφή ολοκληρώθηκε!");
                  //alert (data);
                  window.location="http://econtact.digiverse.gr/digi-platform/professional/editCategory.php?id=<?php echo $id;?>";
                } 
                else { alert("Η Διαγραφή δεν ολοκληρώθηκε!");
                }
              }
            });
        } 
        else {
            
        } 

         
      });
  });
    </script>
    <script>
    $(document).ready(function(){
      $(".addCat").click(function(){
        var r = confirm("Είστε σίγουροι;");
        if (r == true) {
            var add_id = $( "#cateSec" ).val();
            //var catid = del_id.substring(4);
            alert(add_id);
            $.ajax({
              type:'POST',
              url:'addCat.php?prof_id=<?php echo $id;?>',
              data:'cat_id='+add_id, 
              success:function(data) {
                if(data) {   
                  //alert("Η Εισαγωγή ολοκληρώθηκε!");
                  alert (data);
                  window.location="http://econtact.digiverse.gr/digi-platform/professional/editCategory.php?id=<?php echo $id;?>";
                } 
                else { alert("Η Εισαγωγή δεν ολοκληρώθηκε!");
                }
              }
            });
        } 
        else {
            
        } 

         
      });
  });
    </script>
    <script>
      $('.cat1 select').on('change', function() {
        //alert( this.value ); // or $(this).val()
        var cat1 = this.value;
        $('.cat2').show();
        $.post( "../postCat2.php", { catlevel1: cat1 })
  .done(function( data ) {
    //alert( "Data Loaded: " + data );
    //alert (cat1);
    $('.cat2 select').html(data);
  });
      });
    </script>

  </body>
</html>
