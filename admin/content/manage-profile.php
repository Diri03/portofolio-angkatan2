<?php 
    if (isset($_POST["simpan"])) {
        $photo = $_FILES["photo"]["name"];
        $tmp_name = $_FILES["photo"]["tmp_name"];
        $filename = uniqid() . "_" . basename($photo);
        $filepath = "uploads/" . $filename;
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

            // Check if photo is uploaded
            if (!empty($photo)) {
                // If photo is uploaded, move it to the uploads directory
                unlink("uploads/" . $rowProfile["photo"]);
                move_uploaded_file($tmp_name, $filepath);

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
                photo='$filename',
                detailTitle='$detailTitle' WHERE id='$id'");
                header("location:?page=manage-profile&ubah=berhasil");
            } else {
                // If no photo is uploaded, keep the existing photo
                
                $photo = $rowProfile["photo"];
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
                detailTitle='$detailTitle' WHERE id='$id'");
                header("location:?page=manage-profile&ubah=berhasil");
            }

        }else{
            if (!empty($photo)) {
                move_uploaded_file($tmp_name, $filepath);
                $insertQ = mysqli_query($config, "INSERT INTO about (content, title, birthday, website, phone, city, degree, email, freelance, photo, detailTitle) VALUES 
                ('$content', '$title', '$birthday', '$website', '$phone', '$city', '$degree', '$email', '$freelance', '$filename', '$detailTitle')");
            
                if ($insertQ) {
                    header("location:?page=manage-profile&tambah=berhasil");
                }
            }else {
                move_uploaded_file($tmp_name, $filepath);
                $insertQ = mysqli_query($config, "INSERT INTO about (content, title, birthday, website, phone, city, degree, email, freelance, detailTitle) VALUES 
                ('$content', '$title', '$birthday', '$website', '$phone', '$city', '$degree', '$email', '$freelance', '$detailTitle')");
            
                if ($insertQ) {
                    header("location:?page=manage-profile&tambah=berhasil");
                }
            }
        }
    }


    $selectProfile = mysqli_query($config, "SELECT * FROM about");
    $rowProfile = mysqli_fetch_assoc($selectProfile);
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
        <label class="form-label">Photo</label>
        <input type="file" class="form-control" name="photo" value="">
        <img src="uploads/<?php echo isset($rowProfile["photo"]) ? $rowProfile["photo"] : "" ?>" alt="" width="200">
    </div>
    <div class="mb-3">
        <label class="form-label">Judul <span class="text-danger">*</span></label>
        <input required type="text" class="form-control" name="title" value="<?php echo isset($rowProfile["title"]) ? $rowProfile["title"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Konten <span class="text-danger">*</span></label>
        <textarea required id="summernote" name="content" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["content"]) ? $rowProfile["content"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Birthday <span class="text-danger">*</span></label>
        <input required type="date" class="form-control" name="birthday" value="<?php echo isset($rowProfile["birthday"]) ? $rowProfile["birthday"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Website <span class="text-danger">*</span></label>
        <input required type="text" class="form-control" name="website" value="<?php echo isset($rowProfile["website"]) ? $rowProfile["website"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Phone <span class="text-danger">*</span></label>
        <input required type="text" class="form-control" name="phone" value="<?php echo isset($rowProfile["phone"]) ? $rowProfile["phone"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">City <span class="text-danger">*</span></label>
        <input required type="text" class="form-control" name="city" value="<?php echo isset($rowProfile["city"]) ? $rowProfile["city"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Degree <span class="text-danger">*</span></label>
        <input required type="text" class="form-control" name="degree" value="<?php echo isset($rowProfile["degree"]) ? $rowProfile["degree"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email <span class="text-danger">*</span></label>
        <input required type="email" class="form-control" name="email" value="<?php echo isset($rowProfile["email"]) ? $rowProfile["email"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Freelance <span class="text-danger">*</span></label>
        <input required type="text" class="form-control" name="freelance" value="<?php echo isset($rowProfile["freelance"]) ? $rowProfile["freelance"] : "" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Detail Title <span class="text-danger">*</span></label>
        <textarea required name="detailTitle" class="form-control" cols="30" rows="10"><?php echo isset($rowProfile["detailTitle"]) ? $rowProfile["detailTitle"] : "" ?></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>
</form>