<!-- KONEKSI DATABASE -->
<?php
$config=mysqli_connect("localhost", "root", "", "core");

// Select Query
function query($query){
    global $config;
    
    $result = mysqli_query($config, $query);
        $rows = [];
        while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;        
    }
    return $rows;
}

?>