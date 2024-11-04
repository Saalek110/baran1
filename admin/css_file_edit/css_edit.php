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
#editor{
    direction: ltr;
}
</style>
</head>
<body>

<?php

    require "../../base/ccoonn.php";
     include "../../functions/functions.php"; 
     require_once "../../tools/jdf.php";

if ( $_SESSION["username"]== "admin")
{

$filename=$_GET['name'];
//$link_edit="../editor/edit_post98.php";



echo'<table style="border:1; width:100%;">';  // first table
echo'<tr>';
echo'<td style="background: #55ff99;">';
 $str=writeMsg(21) ;
echo $str;
echo'</td>';
echo'<td style="background: #00ff00;">';
echo"css file page";
echo'</td>';
echo'<td style="background: #ddff00;">';
  echo"<center><h4>".$the_date.$the_week.$hour."</h4></center>";                 

echo'</td>';
echo'<td style="background: #aaee00;">';

$count=counter("edit_css");
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

//------------------------------------------------



echo"<br>";
//echo"<center>";
echo "<br>filename= ".$filename;
$addr_file="../../css/".$filename;
//echo"<br>".$addr_file;
echo"<br><br>";




$my_string="";
$myfile = fopen($addr_file, "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
$a=fgets($myfile);
       //  $a = htmlspecialchars($a);
$my_string .=$a;
 // echo $a . "<br>";
  }
  fclose($myfile);


// echo  nl2br ($my_string);
 if(! isset($_POST['action1']))  
{
?>
 <form id='myform' action="<?php echo $_SERVER['PHP_SELF']; ?>"  method = 'POST'>

<textarea id="textarea_1" name="content" cols="68" rows="35">
 <?php  echo ($my_string);  ?>
 </textarea>
   <?php
   echo'<input type="hidden" id="custId" name="addr"  value='.$addr_file.'>';
   ?>
   <center>
     <input type="submit"  name='action1' value="Submit"  style=" font-size:40px; height:90px; width:150px">   </center>  

</form>
<?php
}   // namayesh form if not action
 if(isset($_POST['action1']))  
      {
echo"<br><br><br><center>edit anjam shod. bargardid.</center>";
         $content=test_input($_POST["content"]);   
        $addr=test_input($_POST["addr"]);
      //  echo"addr= ".$addr;
$myfile = fopen($addr, "w") or die("Unable to open file!");
fwrite($myfile, htmlspecialchars_decode($content)  );
fclose($myfile);

      }                                                                 
// ----------------------------------------------------

   echo"<center>";          
 $str=writeMsg(29) ;

  echo'<a href="../mng_css.php">bargash be liste file haye css</a>';
  
echo"<br><br>";

  echo'<a href="../../admin.php">'.$str.'</a>';

  echo"</center>";      







 }  // if admin   kole safheh    

     function test_input($data) {
                 $data = trim($data);
                $data = stripslashes($data);
                 $data = htmlspecialchars($data);
              return $data;
                     }
              ?>                                                    
</body>
</html>
