<?php
session_start();
include './auth.php';
$re = mysql_query("select * from user where username = '".$_SESSION['username']."'  AND password = '".$_SESSION['password']."' " );
echo mysql_error();
if(mysql_num_rows($re) > 0)
{

} 
else
{

session_destroy();
header("location: index.php");
}
$id  = $_POST['room_id'];
$total = "";
$bed = "";
$size ="";
$rate ="";
$desc ="";
$capacity ="";
$room_name ="";

	$room_name = $_POST['room_name'];
	if(isset($_POST['total_room'])){
	$total =$_POST['total_room'];}
	if(isset($_POST['bed'])){
	$bed = $_POST['bed'];}
	if(isset($_POST['size'])){
	$size = $_POST['size'];}
	if(isset($_POST['rate'])){
	$rate =$_POST['rate'];}
	if(isset($_POST['desc'])){
	$desc =$_POST['desc'];}
	if(isset($_POST['capacity'])){
	$capacity =$_POST['capacity'];}
	
if(isset($_FILES['img']['name']) && !empty($_FILES['img']['name']))
{
$imgpath = "";
$imageFileType = pathinfo($imgpath,PATHINFO_EXTENSION);
$uploadDir = "../img/";
$imagename= $_FILES['img']['name'];
$imgpath = $uploadDir.$imagename.$imageFileType;
$uploadDirForSql = "img/";
$imgpathForSQL = $uploadDirForSql.$imagename.$imageFileType;


	
	$sql = "UPDATE room
	SET total_room='".$total."', occupancy='".$occupancy."', size='".$size."', view ='".$view."', view ='".$view."', room_name ='".$room_name."', descriptions ='".$desc."', rate ='".$rate."', imgpath ='".$imgpathForSQL."'
	WHERE room_id='".$id."';";
	$result = mysql_query($sql);
	echo mysql_error();
	move_uploaded_file($_FILES["img"]["tmp_name"], $imgpath);
	header('Refresh: 3;url=room.php');
	echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
echo "\n";
echo "    <!-- Bootstrap core CSS -->\n";
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "    <!-- Custom styles for this template -->\n";
echo "    <link href=\"css/dashboard.css\" rel=\"stylesheet\">\n";
echo "	<link href=\"css/style.css\" rel=\"stylesheet\">\n";
echo "	<link rel=\"stylesheet\" href=\"css/fontello.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"css/animation.css\"><!--[if IE 7]><link rel=\"stylesheet\" href=\"css/fontello-ie7.css\"><![endif]-->\n";
echo "    \n";
echo "<body>\n";
echo "<div class=\"container\">\n";
echo "	<div class=\"row\">\n";
echo "		<div class=\"col-xs-3\">\n";
echo "		</div>\n";
echo "		<div class=\"col-xs-6 \">\n";
echo "		<h4> Success. Please wait few seconds for redirection...<i class=\"icon-spin4 animate-spin\" style=\"font-size:28px;\"></i></h4>\n";
echo "		\n";
echo "		</div>\n";
echo "		<div class=\"col-xs-3\">\n";
echo "		</div>\n";
echo "	</div>\n";
echo "</div>\n";
echo "\n";
echo "\n";
echo "</body></html>";

}else
{
	
	$sql2 = "UPDATE room
	SET total_room='".$total."', capacity='".$capacity."', size='".$size."', bed ='".$bed."', bed ='".$bed."', room_name ='".$room_name."', descriptions ='".$desc."', rate ='".$rate."'
	WHERE room_id='".$id."';";
	$result2 = mysql_query($sql2);
	echo mysql_error();
	header('Refresh: 3;url=room.php');
	echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
echo "\n";
echo "    <!-- Bootstrap core CSS -->\n";
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "    <!-- Custom styles for this template -->\n";
echo "    <link href=\"css/dashboard.css\" rel=\"stylesheet\">\n";
echo "	<link href=\"css/style.css\" rel=\"stylesheet\">\n";
echo "	<link rel=\"stylesheet\" href=\"css/fontello.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"css/animation.css\"><!--[if IE 7]><link rel=\"stylesheet\" href=\"css/fontello-ie7.css\"><![endif]-->\n";
echo "    \n";
echo "<body>\n";
echo "<div class=\"container\">\n";
echo "	<div class=\"row\">\n";
echo "		<div class=\"col-xs-3\">\n";
echo "		</div>\n";
echo "		<div class=\"col-xs-6 \">\n";
echo "		<h4> Success. Please wait few seconds for redirection...<i class=\"icon-spin4 animate-spin\" style=\"font-size:28px;\"></i></h4>\n";
echo "		\n";
echo "		</div>\n";
echo "		<div class=\"col-xs-3\">\n";
echo "		</div>\n";
echo "	</div>\n";
echo "</div>\n";
echo "\n";
echo "\n";
echo "</body></html>";
	


}

?>