<?php 
    $query = mysqli_query($config, "SELECT * FROM services ORDER BY id DESC");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];
        $query = mysqli_query($config, "DELETE FROM services WHERE id='$id'");
        header("location:?page=service&hapus=berhasil");
    }
?>

<div class="card-body">
    <div class="table-responsive">
        <div class="d-flex justify-content-end mb-3">
            <a href="?page=tambah-service" class="btn btn-primary">+</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Konten</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $i = 1; ?> -->
                <?php foreach ($row as $key => $data):?>     
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $data["icon"]; ?></td>
                        <td><?php echo $data["title"]; ?></td>
                        <td><?php echo $data["content"]; ?></td>
                        <td>
                            <a href="?page=tambah-service&edit=<?php echo $data["id"]; ?>" class="btn btn-success btn-sm">Edit</a>
                            <a onclick="return confirm('Are you sure?')" href="?page=service&delete=<?php echo $data["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>