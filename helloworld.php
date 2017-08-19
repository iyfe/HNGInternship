<?php
$db = 
mysqli_connect('localhost','root','root','helloworld')
or die('Error connecting to MySQL server');
?>

<!DOCTYPE html>
<html>
<head>
  <title> My first PHP code</title>
</head>
<body>
<h1> Hello World in PHP. </h1>
<p> Learning new things :) </p>
<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'helloworld';
$dbuser = 'root';
$dbpass = 'root';
$dbhost = 'localhost';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);


 if (! $conn) {
        die('Error Connecting to Database');
    }
 $result = mysqli_query($conn, "select * from sayhello");
if ($result) {
        // Looping through the records to show them on the page.
        // For easy way to view, we will use a html table here
        echo '<table> <tr> <th> firstname</th> <th>lastname</th><th>Gender</th</tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr> 
            <td>' . $row['firstname'] . '</td>'; 
            echo '<td>' . $row['lastname'] . '</td>'; 
            echo '<td>' . $row['Gender'] . '</td>
            </tr>'; 
        }

        echo '</table>';
    }
?>

<p> Awesome sauce! </p>
</body>
</html>