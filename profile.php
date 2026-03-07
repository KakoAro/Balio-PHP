<?php

// Retrieve form data 
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$course = $_POST['course'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];

$hobbies = "";
if(isset($_POST['hobbies'])){
    $hobbies = implode(", ", $_POST['hobbies']);
}

// Image upload 
$imageName = $_FILES['profile_image']['name'];
$tempName = $_FILES['profile_image']['tmp_name'];

$uploadFolder = "uploads/";

if(!file_exists($uploadFolder)){
    mkdir($uploadFolder);
}

$targetPath = $uploadFolder . $imageName;

// Move uploaded image
move_uploaded_file($tempName, $targetPath);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>

<h2>User Profile</h2>

<img src="<?php echo $targetPath; ?>" width="200"><br><br>

<p><b>1. Full Name:</b> <?php echo $fullname; ?></p>
<p><b>2. Age:</b> <?php echo $age; ?></p>
<p><b>3. Course / Program:</b> <?php echo $course; ?></p>
<p><b>4. Email:</b> <?php echo $email; ?></p>
<p><b>5. Gender:</b> <?php echo $gender; ?></p>
<p><b>6. Hobbies:</b> <?php echo $hobbies; ?></p>
<p><b>7. Short Biography:</b> <?php echo $bio; ?></p>

</body>
</html>
