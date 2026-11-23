<!DOCTYPE html> 
<html lang="en"> 
<head> 
 <title>Lab 5a Q1</title> 
</head> 
<body> 
    <?php
    echo "<h1>Profile</h1>";
    ?>
    <?php  
    $name = ": MUHAMMAD HAFIDZUL IMAN BIN MOHD SABAR"; 
    ?> 
    <?php
    $number = ": AI240026";
    ?>
    <?php
    $course = ": BIS";
    ?>
    <?php
    $Yearofstudy = ": 3";
    ?>
    <?php
    $address = ": Pasir Gdang, Johor";
    ?>

 <table> 
   <tr> 
     <td>Name</td> 
     <td><?php echo "$name"; ?></td>  
   </tr> 
   <tr> 
     <td>Number</td> 
     <td><?php echo "$number"; ?></td>  
   </tr> 
   <tr> 
     <td>Course</td> 
     <td><?php echo "$course"; ?></td>  
   </tr> 
   <tr> 
     <td>Year</td> 
     <td><?php echo "$Yearofstudy"; ?></td>  
   </tr> 
   <tr> 
     <td>Address</td> 
     <td><?php echo "$address"; ?></td>  
   </tr> 
 </table> 
</body> 
</html> 