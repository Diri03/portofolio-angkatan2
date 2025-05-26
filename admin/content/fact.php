<?php 
    $query = mysqli_query($config, "SELECT * FROM fakta ORDER BY id DESC");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if (isset($_GET["delete"])) {
        $id = $_GET["delete"];
        $query = mysqli_query($config, "DELETE FROM fakta WHERE id='$id'");
        header("location:?page=fact&hapus=berhasil");
    }
?>

<div class="card-body">
    <div class="table-responsive">
        <div class="d-flex justify-content-end mb-3">
            <a href="?page=tambah-fact" class="btn btn-primary">+</a>
        </div>
        <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Fakta</th>
                    <th>Jumlah</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $i = 1; ?> -->
                <?php foreach ($row as $key => $data):?>     
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $data["name"]; ?></td>
                        <td><?php echo $data["count"]; ?></td>
                        <td>
                            <a href="?page=tambah-fact&edit=<?php echo $data["id"]; ?>" class="btn btn-success btn-sm">Edit</a>
                            <a onclick="return confirm('Are you sure?')" href="?page=fact&delete=<?php echo $data["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>