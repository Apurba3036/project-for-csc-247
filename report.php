
<?php 

$bdhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_project";

$connection = mysqli_connect($bdhost, $dbuser, $dbpass, $dbname);

if ( !$connection ) {
    die("Fail Connection. " .mysqli_error($connection) );
}

?>

<?php function find_all_report () {
        global $connection;

        $query  = "SELECT * ";
        $query .= "FROM report ";
        $query .= "ORDER BY id";

        $report_set = mysqli_query($connection, $query);
        // confirm_query ($report_set);
        return $report_set;
    } 
?>

<?php
$report_set = find_all_report ();
?>
<!DOCTYPE html>
<html>
<title>Home Page</title>

 <head>
    <link type="text/css" rel="stylesheet" href="Home%20page.css"> 
    </head>
    <body>
    <header>
        <div class="Navbar">
            <p style="font-size:36px;padding-top:13px;margin-top:-10px;">Bank Loan Management System</p>
        </div>
        <nav class="navclass">
            <ul>
                <li class=""><a href="Home%20page.html"><b>Home</b></a></li>
                <li class="view"><a href="#"><b>View </b>
                    <ul class="dropdown">
                    <li><a href="Donorview.php"><b>Client Registration</b></a></li>
                    <li><a href="Donationview.php"><b>Bank Information</b></a></li>
                    <li><a href="projectview.php"><b>Empioyee Information</b></a></li>
                    </ul>
                    </a></li>
                <li class="insert"><a href="#"><b>Insert</b>
                    <ul class="dropup">
                    <li><a href="Donor%20Form.html"><b>Client Information</b></a></li>
                    <li><a href="Donation%20Form.html"><b>Bank Form</b></a></li>
                    <li><a href="Project%20Form.html"><b>Employee Form</b></a></li>
                    </ul></a></li>
                <li><a href="Search%20page.html"><b><img src="search_box_icon.png" style="padding-right: 8px;" >     Search</b></a></li>
				<li class="" ><a href="report.php"><b>Report</a></li>
            </ul>
        </nav>
    </header> 



<p><h1 align=center>Bank Loan Management System</h1></p>



    <div align = center>
        <div align=center>
            <h2>View Report</h2>

        </div>
        <!-- table Start -->
        <table border=1em>
            <thead>
            <tr>
                <th>Id </th>
                <th>Name </th>
                <th>Contact </th>
                <th>Loan Amount </th>
                <th>Loan Receiver</th>
                <th>Return Date </th>
               
                <th>Action </th>
            </tr>
            </thead>

            <tbody>
            <?php while($report = mysqli_fetch_assoc($report_set)) { ?>
                <tr>
                    <td><?php  echo $report['id']; ?></td>
                    <td><?php  echo $report['name']; ?></td>
                    <td><?php  echo $report['contact']; ?></td>
                    <td><?php  echo $report['loan_amount']; ?></td>
                    <td><?php  echo $report['loan_issuer']; ?></td>
                    <td><?php  echo $report['return_date']; ?></td>
                    
                    <td>
                        <a href="report_money_reseipt.php?id=<?php echo $report['id']; ?>">Print</a>
                    </td>
                </tr>

            <?php  } ?>


            </tbody>
        </table>

        <!-- Table End -->
    </div>
            </body>
</html>

<?php mysqli_close($connection); ?>





    
