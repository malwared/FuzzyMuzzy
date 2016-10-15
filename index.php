<html> 
    <head> 
        <title>Fuzzy Muzzy v0.1</title> 
   </head> 
  <body> 
<?php 
$_SESSION['count'] = 0;
session_start();
if ($_SESSION['count'] == 11){
$_SESSION['count'] = 0;
}else{
$_SESSION['count'] = $_SESSION['count'] + 1;

 $arr = array(
    "test/fuzz-1.html",
    "test/fuzz-2.html",
    "test/fuzz-3.html",
    "test/fuzz-4.html",
    "test/fuzz-5.html",
    "test/fuzz-6.html",
    "test/fuzz-7.html",
    "test/fuzz-8.html",
    "test/fuzz-9.html",
    "test/fuzz-10.html",
    "sys.php"

);?>

<?php echo $arr[$_SESSION['count']]; ?>
<iframe src="<?php echo $arr[$_SESSION['count']]; ?>" height="200" width="300"></iframe>
<?php  } ?>
 <meta http-equiv="refresh" content="1">
   </body>
</html>
