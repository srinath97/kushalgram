<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>List</title>
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
	
	
	<div id="form_container">
		
		<h1><a></a></h1>
		<div class="form_description" style="margin: 10px">
				<h2>List</h2>
				<p> Please click on the respective Names to view full details.</p>
			</div>	
			<ul>
			
		<table class="table table-bordered table-hover table-striped" style="width: 95%;">
            <tbody>
                <tr>
                    <td><b>S.No</b></td>
                    <td><b>Form No.</b></td>
                    <td><b>Name</b></td>
                    <td><b>Village Name</b></td>
                    <td><b>Occupation 1(Level)</b></td>
                    <td><b>Occupation 2(Level)</b></td>
                    <td><b>Occupation 3(Level)</b></td>
                    
                </tr>
                <?php
                	require_once('db.php');
                    $query="SELECT * from form WHERE village!='Dayal' and village!='Ranivada'";
                    $result=mysqli_query($stat,$query); 
                    $i=1;
                    while($rows=mysqli_fetch_array($result))
                    {   
                        ?>  <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $rows['form'] ?></td>
                                <td><a href = "listpeople.php?id=<?php echo $rows['id'];?>"><?php echo $rows['name'] ?></a></td>
                                <td><?php echo $rows['village'] ?></td>
                                <td>
                                    <?php 
                                    if($rows['rank1']=="")
                                        echo "NONE";
                                    else
                                        echo $rows['rank1'];
                                    echo " - ".$rows['level1'] ; ?>
                                </td>
                                <td>
                                    <?php 
                                    if($rows['rank2']=="")
                                        echo "NONE";
                                    else
                                        echo $rows['rank2'];
                                    echo " - ".$rows['level2'] ; ?>
                                </td>
                                <td>
                                    <?php 
                                    if($rows['rank3']=="")
                                        echo "NONE";
                                    else
                                        echo $rows['rank3'];
                                    echo " - ".$rows['level3'] ; ?>
                                </td>
                            </tr>
                            <?php    
                            $i++;
                    }
                    ?>
            </tbody>
        </table>
        <form name="export_excel" method="post" action="excel.php"> 
            <button class="btn btn-success" name="submit">Export To Excel</button>
        </form>
        
        <br><br>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
    <script src="jquery-1.12.0.min.js"></script>
    <script src="jquery-migrate-1.2.1.min.js"></script>
	
	<script src="form.js"></script>	

</html>