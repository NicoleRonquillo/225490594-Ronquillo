<?php
    include 'db.php';


    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $price =$_POST['price'];

        if(!empty($name))$$ !empty($price){
            $sql="INSERT INTO items (name, price) VALUES('$name','$price')";
            

            if ($conn->query($sql)=== TRUE) {
                echo "New Item Added Successfully!!";

        }
        else {
            echo "Failed to Add New Item :(";
    }
else {
    echo "Please Fill in all the Fields";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item </title>
</head>
<body>
    <h2>Add an New Item </h2>

    <form method = "post" action="add.php">
        Name: <input type="text" name="name"><br><br>
        Price: <input type="text" name="price">
        <input type="Submit" value = "Add Item">
    


    </form>  

<a href="index.php">Back to Price List</a>
</body>
</html>