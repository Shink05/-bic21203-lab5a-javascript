<!DOCTYPE html> 
<html lang="en"> 
   <head> 
      <title>Lab 5a Q1</title> 
   </head> 
    <body> 
    <?php
    echo "<h1>Profile student</h1>";
    ?>
    <?php  
    $student = [
       [
        "name" => " Alice",
        "program" => " BIP",
        "age" => " 21",
       ],
       [
        "name" => " Bob",
        "program" => " BIS",
        "age" => " 20",
       ],
       [
        "name" => " Charlie",
        "program" => " BIT",
      "age" => " 22",
       ]
    ]; 
    ?> 

    <table border="1">
     <tr>
       <th>Name</th>
       <th>Program</th>
       <th>Age</th>
     </tr>
     <?php foreach ($student as $profile): ?>
     <tr>
       <td><?php echo $profile['name']; ?></td>
       <td><?php echo $profile['program']; ?></td>
       <td><?php echo $profile['age']; ?></td>
     </tr>
     <?php endforeach; ?>
    </table> 
    </body> 
</html> 