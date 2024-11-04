<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl">

<head>
<title>css</title>
<style>
body
{
background-color:rgba(220,220,200,1);
}
</style>
</head>
<body>

<?php

    require "../base/ccoonn.php";
     include "../functions/functions.php"; 
     require_once "../tools/jdf.php";

if ( $_SESSION["username"]== "admin")
{


//$link_edit="../editor/edit_post98.php";



echo'<table style="border:1; width:100%;">';  // first table
echo'<tr>';
echo'<td style="background: #55ff99;">';
 $str=writeMsg(21) ;
echo $str;
echo'</td>';
echo'<td style="background: #00ff00;">';
echo"css admin page";
echo'</td>';
echo'<td style="background: #ddff00;">';
  echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";                 

echo'</td>';
echo'<td style="background: #aaee00;">';

$count=counter("mng_css");
 $str=writeMsg(12);
    echo $str;
     echo $count;

echo'</td>';

echo'</tr>';
echo'</table>';

echo'<table style="border:1;width:100%;text-align:center;">';// 2th table----------
echo'<tr>';
echo'<td style="background: #aa8888;">';
 
      writeMsg3("welcome");
      
echo'</td>';
echo'</tr>';
echo'</table>';//-----------------
//------------------list gir ---------------------
//------------------------------------------------
echo"<br>";
echo"<center>";
echo"list of css folder";
$fileList = glob('./../css/*');
     echo'<table border="1">';
     foreach($fileList as $filename){//99
      echo'<tr><td>';
      if(is_file($filename)){//88
//  echo"<br>naame file hast: ".$filename;
     $filename=  str_replace("./../css/","",$filename);
 echo"<br>".$filename;
                                                                  echo"<br>";
                                                                      echo '<a href="css_file_edit/css_edit.php?name='.$filename.'">'.$filename.'</a>'; 
                                                                      
     //---------------
 if (file_exists($filename)) {//777

//echo'<a href="../admin.php">'.$str.'</a>';

                              }//777
                     echo'</td></tr>';
                                  }//88   
                              }//99
               echo'</table>';
echo"</center>";

// ----------------------------------------------------

   echo"<center>";          
 
 $str=writeMsg(29) ;
  echo'<a href="../admin.php">'.$str.'</a>';

  echo"</center>";      





            }  // if admin   kole safheh                                
              ?>                                                    
</body>
</html>
