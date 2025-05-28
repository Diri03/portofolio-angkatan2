<?php 
    $query = mysqli_query($config, "SELECT * FROM testimoni ORDER BY id DESC");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];
        $query = mysqli_query($config, "DELETE FROM testimoni WHERE id='$id'");
        header("location:?page=testimonials&hapus=berhasil");
    }
?>

<div class="card-body">
    <div class="table-responsive">
        <div class="d-flex justify-content-end mb-3">
            <a href="?page=tambah-reviewer" class="btn btn-primary">+</a>
        </div>
        <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Rating</th>
                    <th>Quote</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($row as $key => $data):?> 
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><img src="../admin/uploads/<?php echo $data["photo"]; ?>" alt="" width="100"></td>
                        <td><?php echo $data["name"]; ?></td>
                        <td><?php echo $data["profesion"]; ?></td>
                        <td><?php echo $data["rating"]; ?></td>
                        <td><?php echo $data["quote"]; ?></td>
                        <td>
                            <a href="?page=tambah-reviewer&edit=<?php echo $data["id"]; ?>" class="btn btn-success btn-sm">Edit</a>
                            <a onclick="return confirm('Are you sure?')" href="?page=testimonials&delete=<?php echo $data["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>