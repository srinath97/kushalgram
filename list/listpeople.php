<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Questionnaire</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<link href="bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>	
</head>
<style type="text/css">
	body
	{
		background-color: #336699;
	}

</style>
<body id="main_body" >
	<?php
        $id=$_GET['id'];
        require_once('db.php');
        $query="SELECT * from form WHERE id='$id'";
        $result=mysqli_query($stat,$query); 
        if($rows=mysqli_fetch_array($result))
        {
    ?>
	
	<div id="form_container">
		
		<h1><a></a></h1>
		<div class="form_description" style="margin: 10px">
				<h2><?php echo $rows['name']; ?></h2>
		</div>	
		<ul>
		<br>	
		<table class="table table-bordered table-hover table-striped" style="width: 95%;">
            <tbody>
                <tr>
                    <td><b>Form No.</b></td>
                    <td><?php echo $rows['form'] ?></td>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><?php echo $rows['name'] ?></td>
                </tr>
                <tr>
                    <td><b>Village Name</b></td>
                    <td><?php echo $rows['village'] ?></td>
                </tr>
                <tr>
                    <td><b>Parent's Name</b></td>
                    <td><?php echo $rows['parent'] ?></td>
                </tr>
                <tr>
                    <td><b>Number of members in household</b></td>
                    <td><?php echo $rows['member'] ?></td>
                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td><?php echo $rows['address'] ?></td>
                </tr>
                <tr>
                    <td><b>Mobile Number</b></td>
                    <td><?php echo $rows['mobile'] ?></td>
                </tr>
                <tr>
                    <td><b>Date of Birth</b></td>
                    <td><?php echo $rows['date'] ?></td>
                </tr>
                <tr>
                    <td><b>Gender</b></td>
                    <td><?php echo $rows['gender'] ?></td>
                </tr>
                <tr>
                    <td><b>Education</b></td>
                    <td><?php echo $rows['education'] ?></td>
                </tr>
                <tr>
                    <td><b>MNREGA Card No.</b></td>
                    <td><?php echo $rows['mnrega'] ?></td>
                </tr>
                <tr>
                    <td><b>Aadhar Card No.</b></td>
                    <td><?php echo $rows['aadhar'] ?></td>
                </tr>
                <tr>
                    <td><b>Ration Card</b></td>
                    <td><?php echo $rows['ration'] ?></td>
                </tr>
                <tr>
                    <td><b>SHG Group</b></td>
                    <td><?php echo $rows['shg'] ?></td>
                </tr>
                <tr>
                    <td><b>Primary Occupation</b></td>
                    <td><?php echo $rows['primaryq'] ?></td>
                </tr>
                <tr>
                    <td><b>Secondary Occupation</b></td>
                    <td><?php echo $rows['secondaryq'] ?></td>
                </tr>
                <tr>
                    <td><b>Tertiary Occupation</b></td>
                    <td><?php echo $rows['tertiaryq'] ?></td>
                </tr>
                <tr>
                    <td><b>Migration Activity</b></td>
                    <td><?php echo $rows['activity'] ?></td>
                </tr>
                <tr>
                    <td><b>Migrated Place</b></td>
                    <td><?php echo $rows['place'] ?></td>
                </tr>
                <tr>
                    <td><b>Problems in Occupation</b></td>
                    <td><?php echo $rows['problem'] ?></td>
                </tr>
                <tr>
                    <td><b>Earnings per year</b></td>
                    <td><?php echo $rows['earning'] ?></td>
                </tr>
                <tr>
                    <td><b>Most Proffitable Occupation</b></td>
                    <td><?php echo $rows['profit'] ?></td>
                </tr>
                <tr>
                    <td><b>Dream/Aspiration </b></td>
                    <td><?php echo $rows['dream'] ?></td>
                </tr>
                <tr>
                    <td><b>Willing to learn?</b></td>
                    <td><?php echo $rows['train'] ?></td>
                </tr>
                <tr>
                    <td><b>Previous Occupation</b></td>
                    <td><?php echo $rows['previous'] ?></td>
                </tr>
                <tr>
                    <td><b>Willing to take advanced training?</b></td>
                    <td><?php echo $rows['advanced'] ?></td>
                </tr>
                <tr>
                    <td><b>Beleive in skilling?</b></td>
                    <td><?php echo $rows['help'] ?></td>
                </tr>
                <tr>
                    <td><b>Willing Time Duration</b></td>
                    <td><?php echo $rows['time'] ?></td>
                </tr>
                <tr>
                    <td><b>Willing Time Period</b></td>
                    <td><?php echo $rows['period'] ?></td>
                </tr>
                <tr>
                    <td><b>Willing Distance to travel</b></td>
                    <td><?php echo $rows['distance'] ?></td>
                </tr>
                <tr>
                    <td><b>Intendation</b></td>
                    <td><?php echo $rows['intend'] ?></td>
                </tr>
                <tr>
                    <td><b>Occupation 1</b></td>
                    <td><?php echo $rows['rank1'] ?></td>
                </tr>
                <tr>
                    <td><b>Level</b></td>
                    <td><?php echo $rows['level1'] ?></td>
                </tr>
                <tr>
                    <td><b>Occupation 2</b></td>
                    <td><?php echo $rows['rank2'] ?></td>
                </tr>
                <tr>
                    <td><b>Level</b></td>
                    <td><?php echo $rows['level2'] ?></td>
                </tr>
                <tr>
                    <td><b>Occupation 3</b></td>
                    <td><?php echo $rows['rank3'] ?></td>
                </tr>
                <tr>
                    <td><b>Level</b></td>
                    <td><?php echo $rows['level3'] ?></td>
                </tr>
                <tr>
                    <td><b>Deprivation</b></td>
                    <td>
                    <?php 
                        $dep="";
                        for($j=1;$j<=7;$j++)
                        {
                            if($rows['D'.$j]==TRUE)
                                $dep.="D".$j." ";
                        }
                        for($j=1;$j<=5;$j++)
                        {
                            if($rows['A'.$j]==TRUE)
                                $dep.="A".$j." ";
                        }
                        if($dep=="")
                            $dep="NONE";
                        echo $dep;
                    ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <br><br>
	</div>
    <?php
    }
    ?>
	<img id="bottom" src="bottom.png" alt="">
	</body>
    <script src="jquery-1.12.0.min.js"></script>
    <script src="jquery-migrate-1.2.1.min.js"></script>
	
	<script src="form.js"></script>	

</html>