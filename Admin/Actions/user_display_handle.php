<?php
include '../../config.php';
    $table= '<table class="table">
    <thead>
      <tr>
        <th scope="col">Sl.No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">User Type</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>';
    $sql="SELECT * FROM `user_form`";   
    $result=mysqli_query($conn,$sql);
    $i = 1;
    while($row = mysqli_fetch_assoc($result)){
        $table .= '<tr>
          <th scope="row">'.$i.'</th>
          <td>'.$row['name'].'</td>
          <td>'.$row['email'].'</td>
          <td>'.$row['user_type'].'</td>
          <td >'.'<button id_name="'.$row['id'].'" class="btn btn-primary editBtn" data-bs-toggle="modal" data-bs-target="#usereditModal">edit</button>'." ".'<button id_name="'.$row['id'].'" class="btn btn-danger editBtn" data-bs-toggle="modal" data-bs-target="#userdeleteModal">delete</button>'.'</td>
        </tr>';
        $i++;
    }
    $table .= '</table>';
    echo $table;

?>