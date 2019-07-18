<?php
    require'cnn.php';

    $sq="select * from athletes";
    $rst=$cnn->query($sq);

    while ($row=$rst->fetch_assoc()) {
        
    }

?>