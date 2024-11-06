<?php
    $id = $_GET['id'];

    $sql = "delete from users where id=$id";

    mysqli_query($conn,$sql);

    echo "<script>
        window.location.href = 'index.php?halaman=data_user';
    </script>";