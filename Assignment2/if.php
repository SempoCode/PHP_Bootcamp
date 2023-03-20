<?php
// NUMBER ONE OF TWO
//variables
$mathScore = 80;
$english = 70;
$science = 90;
$socialStudies = 75;
$tot = $mathScore + $science + $socialStudies + $english;
$avScore = $tot / 4;

echo "<h2>Student Performance</h2>";

// if statement
if ($avScore >= 90)
{
    $grade = "A";
}
elseif ($avScore >= 80 && $avScore < 90)
{
    echo "The student's average score is {$avScore} and the final grade is B";
}
elseif ($avScore >= 70 && $avScore < 80)
{
    echo "The student's average score is {$avScore} and the final grade is C";
}
elseif ($avScore >= 60 && $avScore <70)
{
    echo "The student's average score is {$avScore} and the final grade is D.";
}
elseif ($avScore < 60)
{
    echo "The student's average score is {$avScore} and the final grade is F.";
}

// NOMBER TWO OF TWO
// Variables student data
$nationality = "Ugandan";
$is_orphan = false;
$a_level_points = 45;

// if statement
if ($nationality == 'Ugandan' && $is_orphan == false)
{
	$tuition = 10000;
}
elseif ($nationality != "Ugandan" && $is_orphan == false)
{
	$tuition = 20000;
}
elseif ($nationality == "Ugandan" && $is_orphan == true && $a_level_points >= 45)
{
	$tuition = 5000;
}
elseif ($nationality != "Ugandan" && $is_orphan == true && $a_level_points >= 45)
{
	$tuition = 15000;
}
elseif ($nationality != "Ugandan" && $is_orphan == true && $a_level_points >= 45)
{
	$tuition = 18000;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>CV</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='mystyle.css'>
        <script src='main.js'></script>
    </head>
    <body>
    	<table style="width: 50%">
    		<h2>Student's Data</h2>
            <tr>
                <th>Nationality</th>
                <th>Are you an orpan</th>
                <th>A Level Points</th>
            </tr>
            <tr>
                <td><?php echo $nationality ?></td>
                <td>
                	<?php  
                		if ($is_orphan == true)
                		{
                			echo "Yes";
                		}
                		else
                		{
                			echo "No";
                		}
                	?>
                </td>
                <td><?php echo $a_level_points ?></td>
            </tr>
        </table>
        <p>This student pays a tuition of <?php echo "\${$tuition}."?></p>
    </body>
</html>

