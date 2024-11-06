<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    if(isset($_GET['id']))
    {
        // ini update
        $id = $_GET['id'];
        $sql = "update users set 
            username='$username',
            nama='$nama',
            password='$password' where id=$id";
    }
    else
    {
        $sql = "insert into users (id,username,password,nama) values ";
        $sql .= "(null,'$username','$password','$nama')";
    }

    mysqli_query($conn,$sql);

    echo "<script>
        window.location.href = 'index.php?halaman=data_user';
    </script>";
?>