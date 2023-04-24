<link rel="stylesheet" href="./style.css">
    <?php include ("./components.php/connection.php");
     $sql= "SELECT * FROM FEED ";
     $res= $conn->query($sql);
     if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            ?>
            <div class="box">
            <div class="photo">
            <div class="title"><h2><?php echo $row['title']; ?>:</h2>
            <div class="author">
                -<?php echo $row['author']; ?></div> </div>
                <img src="<?php echo $row["img"];?>" alt="image">
            </div>
            <div class="desc"><?php echo $row['content']; ?></div>
            </div>
            <?php
        }
     }
     $conn->close();
     ?>