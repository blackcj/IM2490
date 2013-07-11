// Used for IM3420
$values = "7 8 9 4 5 6 1 2 3 0 . =";
$keys = explode(" ", $values);
for($counter = 0; $counter < sizeof($keys); $counter ++)
{
    echo "<button class='num'>" . $keys[$counter] . "</button>";
	if(($counter + 1) % 3 == 0)
		echo "</br>";
}
