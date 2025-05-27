<?php 
    if ($_SESSION["LEVEL"] != 1) {
        // echo "<h1>Anda tidak berhak ke halaman ini!!</h1>";
        // echo "<a href='dashboard.php' class='btn btn-warning'>Kembali</a>";
        // die;
        header("location:dashboard.php?access=failed");
    }

    $query = mysqli_query($config, "SELECT levels.name_level, users.* FROM users 
    LEFT JOIN levels ON levels.id = users.id_level
    ORDER BY users.id DESC");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];
        $query = mysqli_query($config, "DELETE FROM users WHERE id='$id'");
        header("location:?page=user&hapus=berhasil");
    }
?>

<div class="card-body">
    <div class="table-responsive">
        <div class="d-flex justify-content-end mb-3">
            <a href="?page=tambah-user" class="btn btn-primary">+</a>
        </div>
        <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Level</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $i = 1; ?> -->
                <?php foreach ($row as $key => $data):?>     
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $data["name_level"]; ?></td>
                        <td><?php echo $data["name"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td>
                            <a href="?page=tambah-user&edit=<?php echo $data["id"]; ?>" class="btn btn-success btn-sm">Edit</a>
                            <a onclick="return confirm('Are you sure?')" href="?page=user&delete=<?php echo $data["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>