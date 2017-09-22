<?php
  if ( isset($_FILES["file2"])) {

            //if there was an error uploading the file
        if ($_FILES["file2"]["error"] > 0) {
            //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

        }
        else {
   /* removed this part - not really needed  - if you want to see it, just uncomment    
              //Print file details
             echo "Upload: " . $_FILES["file2"]["name"] . "<br />";
             echo "Type: " . $_FILES["file2"]["type"] . "<br />";
             echo "Size: " . ($_FILES["file2"]["size"] / 1024) . " Kb<br />";
             echo "Temp file: " . $_FILES["file2"]["tmp_name"] . "<br />";
 	*/		 
             $storagename = "sku_file.csv";
             move_uploaded_file($_FILES["file2"]["tmp_name"], "../upload/" . $storagename);
             
            /*****
                 //if file already exists
             if (file_exists("../upload/" . $_FILES["file"]["name"])) {
            echo $_FILES["file2"]["name"] . " already exists. ";
             }
             else {
                    //Store file in directory "upload" with the name of "uploaded_file.txt"
            $storagename = "sku_file.csv";
            move_uploaded_file($_FILES["file2"]["tmp_name"], "../upload/" . $storagename);
            // echo "Stored in: " . "../upload/" . $_FILES["file"]["name"] . "<br />";
            }
          
            *****/
        }
     } else {
            // echo "No file selected <br />";
     }
?>