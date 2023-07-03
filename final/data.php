<?php

    require_once('connectionArtikel.php');

    if(empty($_GET)){
        $query = mysqli_query( $connection, "SELECT * FROM artikel_api");

        $result = array ();
        while($row = mysqli_fetch_array($query)) {
            array_push($result, array(
                'id' => $row['id'],
                'judul' => $row['judul'],
                'link' => $row['link'],
                'image' => $row['image'],
                'summary' => $row['summary']
            ));
        }

        echo json_encode(
            array ( 'result' => $result)
        );
    

    }else{
    $query = mysqli_query( $connection, "SELECT * FROM artikel_api WHERE id= ". $_GET ['id']);

    $result = array();
    while($row = $query -> fetch_assoc()){
        $result = array(
            'id' => $row['id'],
            'judul' => $row['judul'],
            'link' => $row['link'],
            'image' => $row['image'],
            'summary' => $row['summary']
        );

        echo json_encode (
            $result 
        );
    }


    }
?>