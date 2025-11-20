<?php

$records =  json_decode(file_get_contents("data.json"), true);
if(!is_array($records)){
    $records = [];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON CRUD</title>
</head>
<body>

<h2> DAY 23 : JSON CRUD</h2>

<a href="add.php"> Add New Record</a>
<hr>

<h3>All Records</h3>

<?php  if(count($records) === 0):?>
    <p> no records yet.</p>

    <?php else:?>

  
    <table border="1" cellpading="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($records as $recod):?>
            <tr>
                <td><?php echo $record['id']; ?></td>
                <td><?php echo htmlspecialchars($records["name"]);?></td>


                <td>
                    <a href="edit.php?id=<?php echo $record['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $record['id']; ?>"

                      onclick="return confirm('Delete this record?')">
                      delete


                    </a>
                      
                </td>

            </tr>

            <?php endforeach;?>


    </table>
   <?php endif; ?>

</body>
</html>