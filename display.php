<?php
include 'display.php';
if(isset($_post['displaySend'])){
    $table='<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Sl no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Place</th>
      </tr>
    </thead>';
    $sql="Select * `crud`;
        $result=mysqli_query($con,$sql);
        while($row=mysql_fetch_assoc($result()){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $table.='<tr>,
        <td scope="row">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$emai.'</td>
        <td>'.$mobile.'</td>
        <td>'.$place.'</td>
        </tr>';
    }
    $table.='</table>';
    echo $table;
}
?>