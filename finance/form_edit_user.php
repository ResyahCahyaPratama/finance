<?php
    $id = $_GET['id'];
    $sql = "select * from users where id=".$id;

    $q = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($q);
?>


<h5>Form Edit User</h5>
<form action="index.php?halaman=simpan_user&id=<?php echo $id;?>" method="post">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" value="<?php echo $row['username'];?>" name="username" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" value="<?php echo $row['password'];?>" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama User</label>
        <input type="text" name="nama" value="<?php echo $row['nama'];?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update Data</button>
</form>