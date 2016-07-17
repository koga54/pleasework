
<?php
include('dbconnect.php');

if ($_POST['id']) //they've entered an ID number into the box
{

$id = $_POST['id']; //set this variable to what they entered

$result = mysql_query("SELECT id, Player_Name FROM mapdata WHERE id='$id'")
or die ('cannot select the player because: ' . mysql_error());

//now we need particular information from that result put into our $row variable
$row = mysql_fetch_assoc($result);

//now we can access the values in our $row variable using the name of the field we want
echo "Hello, you Have selected: " . $row['Player_Name'];

}
?>

<form action="#" method="post">
Enter an ID number: <input type="text" name="id" value="<?php echo $_POST['id']; ?>" />
<input type="submit" name="submit" value="Click Me!" />
</form>

<?php
include('dbconnect.php');

//I always change this variable to loop so it's easier to read
$loop = mysql_query("SELECT id, Player_Name FROM mapdata")
or die ('cannot select the PLAYER ID because: ' . mysql_error());

//now we want all the information that $row finds, not just the top value
while ($row = mysql_fetch_assoc($loop))

{
echo "PLAYER: " . $row['id'] . " - " . $row['Player_Name'] . "<br/>";

}
?>

