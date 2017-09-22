<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UPC Lookup</title>
         <script type='text/javascript' src='http://code.jquery.com/jquery-1.4.4.min.js'></script>
        <style>
        body {
            background: #fff;
        }
#upcnumber {
  font-size: 100%;
  outline: none;
  width: 300px;
  height: 30px;
  display: table-cell; 
  vertical-align: middle;
  border: 1px solid #ccc;
}
#button {
    width: 75px;
    height: 30px;
}
table.upctable tr, td {
border: 1px solid #ccc;
}
a:hover {
background-color: #F2DE41;
color: #fff;
text-decoration: none;
font-size: 150%;
}
a:link {
text-decoration: none;
font-size: 150%;
}
        </style>
    </head>
        <body>
        <a href = "http://yoursite.com/"><img src = "/images/yourlogo.jpg"></a>

    <br><br>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
     <?php require_once 'scripts/fileupload.php';?>
    <?php
if (isset($_POST["submit"]) ) {
if (isset($_POST["all"])){
    include 'scripts/all.php';
 }elseif (isset($_POST['walmart'], $_POST['amazon'])){
        require_once 'scripts/walmart-amazon-only-upload.php';
       }elseif (isset($_POST['walmart'], $_POST['ebay'])){
        require_once 'scripts/walmart-ebay-only-upload.php';
       }elseif (isset($_POST['amazon'], $_POST['ebay'])){
        require_once 'scripts/amazon-ebay-only-upload.php';
       }
  }
if (isset($_POST["submit"]) ) {
if (isset($_POST["walmart"])){
    include 'scripts/walmart.php';
 }elseif (isset($_POST['walmart'], $_POST['amazon'])){
        require_once 'scripts/walmart-amazon-only-upload.php';
       }elseif (isset($_POST['walmart'], $_POST['ebay'])){
        require_once 'scripts/walmart-ebay-only-upload.php';
       }
}
if (isset($_POST["submit"]) ) {
if (isset($_POST["amazon"])){
    include 'scripts/amazon.php';
 }elseif (isset($_POST['walmart'], $_POST['amazon'])){
        require_once 'scripts/walmart-amazon-only-upload.php';
       }elseif (isset($_POST['amazon'], $_POST['ebay'])){
        require_once 'scripts/amazon-ebay-only-upload.php';
       }
}

if (isset($_POST["submit"]) ) {
if (isset($_POST["ebay"])){
    include 'scripts/ebay.php';
 }elseif (isset($_POST['walmart'], $_POST['ebay'])){
        require_once 'scripts/walmart-ebay-only-upload.php';
       }elseif (isset($_POST['amazon'], $_POST['ebay'])){
        require_once 'scripts/amazon-ebay-only-upload.php';
       }
}

?>
    <strong>Select file</strong>:  <input type="file" name="file" id="file" /><br>
<br>
<input type="submit" name="submit" id="upload" value="Process File" />
<br><br>
<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
        <p><font size = "4"><strong>Data to Return: <input id="all" type="checkbox" name="all" value="all" autofocus checked>ALL <input id="walmart" type="checkbox" name="walmart" value="walmart">Walmart <input id="amazon" type="checkbox" name="amazon" value="amazon">Amazon <input id="ebay" type="checkbox" name="ebay" value="ebay">eBay</strong></font></p>
    <font size = "5"><strong>UPC: </strong><input type="text" id="upcnumber" placeholder = "Type in UPC" name="upc">   
<input type="submit" id="button" value="SEARCH"></font> 
    <?php if(isset($_POST["upc"])){
    require_once 'scripts/singlelookup.php';
    } 
    if (isset($_POST['walmart'], $_POST['amazon'])){
        require_once 'scripts/walmart-amazon-only.php';
       }

      if (isset($_POST['walmart'], $_POST['ebay'])){
        require_once 'scripts/walmart-ebay-only.php';
      }
      if (isset($_POST['amazon'], $_POST['ebay'])){
        require_once 'scripts/amazon-ebay-only.php';
      }
    ?>
    <br><br>
</form><div align = "right">
          <a href = "mailto:youremail@email.com?subject=UPC Lookup Feedback">Feedback?</a>
        </div>


    </form>
<script = "text/javascript">
$('input[type=checkbox][name=all]').change(function(){
    if($(this).is(':checked')){
$('input[type=checkbox]').attr('disabled',true);
    $(this).attr('disabled','');
}
else{
$('input[type=checkbox]').attr('disabled','');
}
});
</script>
    </body>
</html>

 
 

