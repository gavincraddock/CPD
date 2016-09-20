<?php
include 'inc_database.php';

$inp = $_GET['inp'];

for ($x = 1; $x <= $inp; $x++) {
	$name1 = "sessiontitle".$x;
	$name2 = "sessionvenue".$x;
	$name3 = "sessionroom".$x;
	$name4 = "sessionfacilitator".$x;
	$name5 = "sessiondate".$x;
	$name6 = "starttime".$x;
	$name7 = "endtime".$x;
	$name8 = "sessionnotes".$x;
?><strong>Session <?php echo($x);?> </strong><br>
          </span>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="16%"><span class="style2">Session title </span></td>
              <td width="84%"><span class="style2">
                <input name = "sessiontitle<?php echo($x);?>" type="text" id="sessiontitle<?php echo($x);?>" size="30" maxlength="50">
              </span></td>
            </tr>
            <tr>
              <td><span class="style2">Session venue </span></td>
              <td><select name="sessionvenue<?php echo($x);?>" id="sessionvenue<?php echo($x);?>">
                <?php

	$sql = "SELECT * FROM tblcentres";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc())
	{
		#set the default school to be the one that is initially selected
		if ($row['default'] == 1) {$selected = " SELECTED";}
		else {$selected = "";}
	
		echo "<option value=", $row['centrecode'], $selected, ">", $row['centrename'], "</option>";
	}
?>
                                          </select></td>
            </tr>
            <tr>
              <td><span class="style2">Session room </span></td>
              <td><span class="style2">
                <input name = "sessionroom<?php echo($x);?>" type="text" id="sessionroom<?php echo($x);?>" size="30" maxlength="30">
              </span></td>
            </tr>
            <tr>
              <td><span class="style2">Session facilitator </span></td>
              <td><select name="sessionfacilitator<?php echo($x);?>" id="sessionfacilitator<?php echo($x);?>">
                <option value="" SELECTED>Choose a user...</option>
                <?php
	$sql = "SELECT * FROM tblusers, tblcentres WHERE tblusers.centrecode = tblcentres.centrecode ORDER BY surname";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc())
	{	
		echo "<option value=", $row['username'],">", $row['surname'], ", ", $row['firstname'], " (", $row['centrename'], ")</option>";
	}
?>
              </select></td>
            </tr>
            <tr>
              <td><span class="style2">Date</span></td>
              <td><span class="style2">
                <input name = "sessiondate<?php echo($x);?>" type="text" class="datepicker" id="sessiondate<?php echo($x);?>" size="10" maxlength="10">
              </span></td>
            </tr>
            <tr>
              <td class="style2">Start time </td>
              <td><span class="style2">
                <input name="starttime<?php echo($x);?>" type="text" id="starttime<?php echo($x);?>" size="10" maxlength="10">
                <img src="images/transp1x1.png" alt="blank" width="30" height="1"><span class="style2">End time</span>
                <input name="endtime<?php echo($x);?>" type="text" id="endtime<?php echo($x);?>" size="10" maxlength="10">
              </span></td>
            </tr>
            <tr>
              <td class="style2">Notes</td>
              <td><textarea name="sessionnotes<?php echo($x);?>" cols="50" rows="3" id="sessionnotes<?php echo($x);?>"></textarea></td>
            </tr>
          </table>

<?php
}
?>

<input name="sessionnum" type="hidden" id="sessionnum" value="<?php echo($inp);?>">