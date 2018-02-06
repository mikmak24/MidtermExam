<?php
 include 'include/dbconnection.php';
?>
<html>

<head>
	<title>Book Information</title>
    <link href="assets/css/reg.css" rel="stylesheet">
</head>

<body>
	<form action="insert.php" method="post">
	<h1>Library Database</h1>
	<fieldset>
		<legend>Book Information</legend>
		<label>Title:</label> <input type="text" name="title" required/><br />
		<label>Pages:</label> <input type="number" min=1 name="pages" required/><br />
		<label>Author:</label> <input type="text" name="author" required/><br />
		<label>Published Year:</label> <input type="text" name="year" required/>
        
        <div><br/></div>
    <input style="float:right" type="submit" value="Add Book" onClick="return submit_form();" name="submit"/>
    </fieldset>
    <h3>List of Stored Books</h3>
    <table border="2" align="center" cellpadding=5>
            <thead>
                <tr><th>Title</th>
                    <th>Pages</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                 <?php
          
           require 'include/dbconnection.php';
         
           $sql = "Select * FROM demo ORDER BY ID desc";
           $result = mysqli_query($dbconn, $sql);
         
         
         
           while($row = mysqli_fetch_array($result)){?>
               <tr>
                <td><?php echo $row['Title'];?></td>
                <td><?php echo $row['Pages'];?></td>
                <td><?php echo $row['Author'];?></td>
                <td><?php echo $row['publishedyear'];?></td>
               </tr>
               
               
               
         <?php      
           }
         
         ?>
            </tbody>
        </table>
	</form>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		function submit_form(){
			alert("A new book has been successfully added!");
		}
	</script>
<?php 
    $dbconn->close();
    ?>
</body>
</html>