<?php
    if(defined("IS_LEWAT_INDEX") == false){
        die("Oops...");
    }
    
    $sql = "select * from users";

    $q = mysqli_query($conn,$sql);
?>

<h5>Data Pengguna</h5>

<a href="index.php?halaman=form_user" class="btn btn-primary">Tambah User</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Nama</th>
        <th>#</th>
    </tr>
    <?php
        while($row = mysqli_fetch_assoc($q))
        {
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['nama']."</td>
                <td>
                    <a href='index.php?halaman=form_edit_user&id=".$row['id']."' class='btn btn-primary btn-sm'>Edit</a> 
                    <a href='index.php?halaman=hapus_user&id=".$row['id']."' class='btn btn-danger btn-sm'>Hapus</a>
                </td>
            </tr>";
        }
    ?>
</table>