<?php 
    $query = mysqli_query($config, "SELECT * FROM picture_project ORDER BY id DESC");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];
        $queryPhoto = mysqli_query($config, "SELECT * FROM picture_project WHERE id='$id'");
        $rowPhoto = mysqli_fetch_assoc($queryPhoto);
        $query = mysqli_query($config, "DELETE FROM picture_project WHERE id='$id'");
        unlink("../admin/uploads/" . $rowPhoto["photo"]);
        header("location:?page=picture_project&hapus=berhasil");
    }
?>

<div class="card-body">
    <div class="table-responsive">
        <div class="d-flex justify-content-end mb-3">
            <a href="?page=tambah-picture_project" class="btn btn-primary">+</a>
        </div>
        <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($row as $key => $data):?> 
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><img src="../admin/uploads/<?php echo $data["photo"]; ?>" alt="" width="100"></td>
                        <td>
                            <a href="?page=tambah-picture_project&edit=<?php echo $data["id"]; ?>" class="btn btn-success btn-sm">Edit</a>
                            <a onclick="return confirm('Are you sure?')" href="?page=picture_project&delete=<?php echo $data["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>