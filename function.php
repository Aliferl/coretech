<!-- KONEKSI DATABASE -->
<?php
$config = mysqli_connect("localhost", "root", "", "core");

// Select Query
function query($query)
{
    global $config;

    $result = mysqli_query($config, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//Function Insert

function tambah($data)
{
    global $config;

    $brand = htmlspecialchars($data["brand"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $price = htmlspecialchars($data["price"]);
    $des = htmlspecialchars($data["des"]);
    $no = htmlspecialchars($data["no"]);
    $img = htmlspecialchars($data["img"]);

    $query = "INSERT INTO laptop
                VALUES(
                    '', '$brand', '$tipe', '$price', '$des', '$no', '$img'
                )
                ";

    mysqli_query($config, $query);

    return mysqli_affected_rows($config);
}

function cari($search){
    $query = "SELECT * FROM laptop WHERE brand LIKE '%$search%'
                OR tipe  LIKE '$search' OR des  LIKE '$search' ";
    return query($query);
}


?>
