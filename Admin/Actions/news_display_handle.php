<?php
include '../../config.php';
    $table= '<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl.No</th>
        <th scope="col">Name</th>
        <th scope="col">File Name</th>
      </tr>
    </thead>';
    $sql="SELECT * FROM `user_form`";   
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $table .= '<tr>
          <th scope="row">'.$row['id'].'</th>
          <td>'.$row['name'].'</td>
          <td>'.$row['file_name'].'</td>
          <td>'.$row['user_type'].'</td>
          <td>'.'Operation here'.'</td>
        </tr>';
    }
    $table .= '</table>';
    echo $table;

?>