<?php
    $conn = mysqli_connect("localhost","root","","mahasiswa");
    if ($conn->connect_errno != 0) {
        echo $conn->connect_error;
        exit();
        # code...
    }

    $sql = "SELECT * FROM jadwal";
    $results = $conn->query($sql);
    while($product = $results->fetch_assoc()){
        $products[] = $product;
    }

    $encoded_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents('data.json', $encoded_data);
?>