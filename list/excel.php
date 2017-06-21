<?php
            if(isset($_POST['submit']))
            {
                require_once('db.php');
                $out='';
                $query1="SELECT * from form WHERE village!='Dayal' and village!='Ranivada'";
                $result1=mysqli_query($stat,$query1);
                if(mysqli_num_rows($result1)>0) 
                {
                    $out.= '<table class="table" bordered="2">
                                <tr>
                                    <th>S.No</th>
                                    <th>Form No.</th>
                                    <th>Village</th>
                                    <th>Name</th>
                                    <th>Parent`s Name</th>
                                    <th>Number of members in household</th>
                                    <th>Address</th>
                                    <th>Mobile Number</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Education</th>
                                    <th>MNREGA Card No.</th>
                                    <th>Aadhar Card No.</th>
                                    <th>Ration Card</th>
                                    <th>SHG Group</th>
                                    <th>Primary Occupation</th>
                                    <th>Secondary Occupation</th>
                                    <th>Tertiary Occupation</th>
                                    <th>Migration Activity</th>
                                    <th>Migrated Place</th>
                                    <th>Problems in Occupation</th>
                                    <th>Earnings per year</th>
                                    <th>Most Proffitable Occupation</th>
                                    <th>Dream/Aspiration </th>
                                    <th>Willing to learn?</th>
                                    <th>Previous Occupation</th>
                                    <th>Willing to take advanced training?</th>
                                    <th>Beleive in skilling?</th>
                                    <th>Willing Time Duration</th>
                                    <th>Willing Time Period</th>
                                    <th>Willing Distance to travel</th>
                                    <th>Intendation</th>
                                    <th>Occupation 1</th>
                                    <th>Level</th>
                                    <th>Occupation 2</th>
                                    <th>Level</th>
                                    <th>Occupation 3</th>
                                    <th>Level</th>
                                    <th>Deprivation</th>
                                </tr>
                    ';
                    $s=1;
                    while($row=mysqli_fetch_array($result1))
                    {
                        $dep="";
                        for($j=1;$j<=7;$j++)
                        {
                            if($row['D'.$j]==TRUE)
                                $dep.="D".$j." ";
                        }
                        for($j=1;$j<=5;$j++)
                        {
                            if($row['A'.$j]==TRUE)
                                $dep.="A".$j." ";
                        }
                        if($dep=="")
                            $dep="NONE";
                        $out.='
                        <tr>
                            <td>'. $s++ .'</td>
                            <td>'. $row["form"] .'</td>
                            <td>'. $row["village"] .'</td>
                            <td>'. $row["name"] .'</td>
                            <td>'. $row["parent"] .'</td>
                            <td>'. $row["member"] .'</td>
                            <td>'. $row["address"] .'</td>
                            <td>'. $row["mobile"] .'</td>
                            <td>'. $row["date"] .'</td>
                            <td>'. $row["gender"] .'</td>
                            <td>'. $row["education"] .'</td>
                            <td>'. $row["mnrega"] .'</td>
                            <td>'. $row["aadhar"] .'</td>
                            <td>'. $row["ration"] .'</td>
                            <td>'. $row["shg"] .'</td>
                            <td>'. $row["primaryq"] .'</td>
                            <td>'. $row["secondaryq"] .'</td>
                            <td>'. $row["tertiaryq"] .'</td>
                            <td>'. $row["activity"] .'</td>
                            <td>'. $row["place"] .'</td>
                            <td>'. $row["problem"] .'</td>
                            <td>'. $row["earning"] .'</td>
                            <td>'. $row["profit"] .'</td>
                            <td>'. $row["dream"] .'</td>
                            <td>'. $row["train"] .'</td>
                            <td>'. $row["previous"] .'</td>
                            <td>'. $row["advanced"] .'</td>
                            <td>'. $row["help"] .'</td>
                            <td>'. $row["time"] .'</td>
                            <td>'. $row["period"] .'</td>
                            <td>'. $row["distance"] .'</td>
                            <td>'. $row["intend"] .'</td>
                            <td>'. $row["rank1"] .'</td>
                            <td>'. $row["level1"] .'</td>
                            <td>'. $row["rank2"] .'</td>
                            <td>'. $row["level2"] .'</td>
                            <td>'. $row["rank3"] .'</td>
                            <td>'. $row["level3"] .'</td>
                            <td>'. $dep .'</td>
                        </tr>
                        ';
                    }
                    $out.='</table>';
                    header("Content-Type: application/xls");
                    header("Content-Disposition: attachment; filename=Kushalgram.xls");
                    echo $out;
                }
            }
            else
            {
                header("refresh:0,url=index.php");
            } 
        ?>  