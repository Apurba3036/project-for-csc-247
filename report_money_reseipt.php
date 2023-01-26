
<?php 
$bdhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_project";

$connection = mysqli_connect($bdhost, $dbuser, $dbpass, $dbname);

if ( !$connection ) {
    die("Fail Connection. " . mysqli_error($connection) );
}?>
<?php function find_report_by_id ($report_id) {
        global $connection;

        $safe_report_set = mysqli_real_escape_string($connection, $report_id);


        $query  = "SELECT * ";
        $query .= "FROM report ";
        $query .= "WHERE id = '{$safe_report_set}' ";
        $query .= "LIMIT 1";

        $report_set = mysqli_query($connection, $query);
        //conform_query ($report_set);
        if ($report = mysqli_fetch_assoc($report_set)) {
            return $report;
        } else {
            return null;
        }
    }
?>
<?php

$report = find_report_by_id ($_GET["id"]);
if (!$report) {
    redirect_to ("report.php");
    
}
?>





<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div id="print">
<center>

    <h2><strong> Bank Loan Management System </strong></h2>
    <p>|- Dhaka-1206, Bangladesh -|</p>
    <p><strong>Contact: 01922033436</strong></p>
    <p>====================================</p>
    <h3>Loan Receipt </h3>
    <br>
    <table>
        <tr>
            <td>Name: </td>
            <td> </td>
            <td><?php echo $report['name'];?>. </td>
        </tr>

        <tr>
            <td>Contact: </td>
            <td> </td>
            <td><?php echo $report['contact'];?>. </td>
        </tr>

        <tr>
            <td>Loan Amount: </td>
            <td> </td>
            <td><?php echo $report['loan_amount'];?>. </td>
        </tr>

       
        <tr>
            <td>Return date: </td>
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $report['return_date']; ?></td>
        </tr>
    </table><br>
    
    



    <p>====================================</p>

    



    <p><strong>Received By: </strong></p>
    <div style="margin-left: 200px">
    <p><?php echo $report['loan_issuer'];?></p>
    <p>------------</p>
    </div>


    <br>
</center>
</div>
<center>
    <button id = "print" onclick= "javascript:printlayer('print')">Print </button>
    <a href="report.php">
        <button>Back </button>
    </a>

</center>
<script type = "text/javascript">
    function printlayer(layer)
    {

        var generator = window.open("", "", "width=800,height=1400");
        var layetext = document.getElementById(layer);
        generator.document.write(layetext.innerHTML.replace("Print Me"));

        generator.document.close();
        generator.print();
        generator.close();

    }
</script>

</body>
</html>