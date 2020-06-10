
<?php
$connect = new PDO('mysql:host=localhost;dbname=handshake', 'root','');
$data = array();
$query= "SELECT evenementId,title,start,end
FROM evenement ORDER BY evenementId";
$statement= $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row)
{
    $data[]= array(
        'id'    => $row["evenementId"],
        'title' => $row["title"],
        'start' => $row["start"],
        'end'   => $row["end"]

    );
}
echo json_encode($data);
?>