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
        $detailTitle = $_POST["detailTitle"];

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
            photo='$photo',
            detailTitle='$detailTitle' WHERE id='$id'");
            header("location:?page=manage-profile&ubah=berhasil");
        }else{
            if (!empty($photo)) {
                $insertQ = mysqli_query($config, "INSERT INTO about (content, title, birthday, website, phone, city, degree, email, freelance, detailTitle) VALUES 
                ('$content', '$title', '$birthday', '$website', '$phone', '$city', '$degree', '$email', '$freelance', '$detailTitle')");
            
                if ($insertQ) {
                    header("location:?page=manage-profile&tambah=berhasil");
                }
            }else {
                $insertQ = mysqli_query($config, "INSERT INTO about (content, title, birthday, website, phone, city, degree, email, freelance, photo, detailTitle) VALUES 
                ('$content', '$title', '$birthday', '$website', '$phone', '$city', '$degree', '$email', '$freelance', '$photo', '$detailTitle')");
            
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


    $selectProfile = mysqli_query($config, "SELECT * FROM about");
    $rowProfile = mysqli_fetch_assoc($selectProfile);
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
        <input type="file" class="form-control" name="photo" value="<?php echo isset($rowProfile["photo"]) ? $rowProfile["photo"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="title" value="<?php echo isset($rowProfile["title"]) ? $rowProfile["title"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Konten</label>
        <textarea name="content" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["content"]) ? $rowProfile["content"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Birthday</label>
        <input type="date" class="form-control" name="birthday" value="<?php echo isset($rowProfile["birthday"]) ? $rowProfile["birthday"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Website</label>
        <input type="text" class="form-control" name="website" value="<?php echo isset($rowProfile["website"]) ? $rowProfile["website"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" value="<?php echo isset($rowProfile["phone"]) ? $rowProfile["phone"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" class="form-control" name="city" value="<?php echo isset($rowProfile["city"]) ? $rowProfile["city"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Degree</label>
        <input type="text" class="form-control" name="degree" value="<?php echo isset($rowProfile["degree"]) ? $rowProfile["degree"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo isset($rowProfile["email"]) ? $rowProfile["email"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Freelance</label>
        <input type="text" class="form-control" name="freelance" value="<?php echo isset($rowProfile["freelance"]) ? $rowProfile["freelance"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Detail Title</label>
        <textarea name="detailTitle" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["detailTitle"]) ? $rowProfile["detailTitle"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>