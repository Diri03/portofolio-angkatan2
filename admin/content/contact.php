<?php 
    $query = mysqli_query($config, "SELECT * FROM contacts ORDER BY id DESC");
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    // if (isset($_GET["delete"])) {
    //     $id = $_GET["delete"];
    //     $query = mysqli_query($config, "DELETE FROM contacts WHERE id='$id'");
    //     header("location:?page=contact&hapus=berhasil");
    // }
?>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subjek</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $i = 1; ?> -->
                <?php foreach ($row as $key => $data):?>     
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $data["name"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td><?php echo $data["subject"]; ?></td>
                        <td><?php echo $data["message"]; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>