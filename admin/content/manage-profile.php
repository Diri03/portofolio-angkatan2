<?php 
    include "config/koneksi.php";

    if (isset($_POST["simpan"])) {
        $photo = $_FILES["photo"]["name"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $birthday = $_POST["birthday"];
        $website = $_POST["website"];
        $phone = $_POST["phone"];
        $city = $_POST["city"];
        $degree = $_POST["degree"];
        $email = $_POST["email"];
        $freelance = $_POST["freelance"];
        
        $queryProfile = mysqli_query($config, "SELECT * FROM about ORDER BY id DESC");
        
        if (mysqli_num_rows($queryProfile) > 0) {
            $rowProfile = mysqli_fetch_assoc($queryProfile);
            $id = $rowProfile["id"];
            $update = mysqli_query($config, "UPDATE about SET 
            content='$content',
            title='$title',
            birthday='$birthday',
            website='$website',
            phone='$phone',
            city='$city',
            degree='$degree',
            email='$email',
            freelance='$freelance',
            photo='$photo' WHERE id='$id'");
            header("location:?page=manage-profile&ubah=berhasil");
        }else{
            if (!empty($photo)) {
                $insertQ = mysqli_query($config, "INSERT INTO about (content, title, birthday, website, phone, city, degree, email, freelance, photo) VALUES 
                ('$content', '$title', '$birthday', '$website', '$phone', '$city', '$degree', '$email', '$freelance', '$photo')");
            
                if ($insertQ) {
                    header("location:?page=manage-profile&tambah=berhasil");
                }
            }else {
                $insertQ = mysqli_query($config, "INSERT INTO about (content, title, birthday, website, phone, city, degree, email, freelance) VALUES 
                ('$content', '$title', '$birthday', '$website', '$phone', '$city', '$degree', '$email', '$freelance')");
            
                if ($insertQ) {
                    header("location:?page=manage-profile&tambah=berhasil");
                }
            }
        }

        // if ($photo["error"] == 0) {
        //     $filename = uniqid() . "_" . basename($photo["name"]);
        //     $filepath = "uploads/" . $filename;
        //     move_uploaded_file($photo["tmp_name"], $filepath);
        // }

        // $insertQ = mysqli_query($config, "INSERT INTO profiles (profile_name, profesion, description, photo) VALUES ('$profile_name', '$profesion', '$description', '$filename')");
        // if ($insertQ) {
        //     header("location:dashboard.php?page=manage-profile");
        // }
    }


    // $selectProfile = mysqli_query($config, "SELECT * FROM profiles");
    // $row = mysqli_fetch_assoc($selectProfile);
    // if (isset($_GET["del"])) {
    //     $isDel = $_GET["del"];
    //     $selectPhoto = mysqli_query($config, "SELECT * FROM profiles WHERE id=$isDel");
    //     $rowPhoto = mysqli_fetch_assoc($selectPhoto);
    //     unlink("uploads/" . $rowPhoto["photo"]);
    //     $delete = mysqli_query($config, "DELETE FROM profiles WHERE id=$isDel");
    //     if ($delete) {
    //         header("location:dashboard.php?page=manage-profile");
    //     }

    // }

    // $selectProfile = mysqli_query($config, "SELECT * FROM profiles");
    // $row = mysqli_fetch_assoc($selectProfile);
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
        <label class="form-label">Photo</label>
        <input type="file" class="form-control" name="photo" value="<?php echo isset($row["photo"]) ? $row["photo"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="title" value="<?php echo isset($row["title"]) ? $row["title"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Konten</label>
        <textarea name="content" class="form-control" cols="30" rows="10"><?php echo isset($row["content"]) ? $row["content"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Birthday</label>
        <input type="date" class="form-control" name="birthday" value="<?php echo isset($row["birthday"]) ? $row["birthday"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Website</label>
        <input type="text" class="form-control" name="website" value="<?php echo isset($row["website"]) ? $row["website"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" value="<?php echo isset($row["phone"]) ? $row["phone"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" class="form-control" name="city" value="<?php echo isset($row["city"]) ? $row["city"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Degree</label>
        <input type="text" class="form-control" name="degree" value="<?php echo isset($row["degree"]) ? $row["degree"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo isset($row["email"]) ? $row["email"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Freelance</label>
        <input type="text" class="form-control" name="freelance" value="<?php echo isset($row["freelance"]) ? $row["freelance"] : "" ?>">
    </div>
    <div class="mb-3">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>