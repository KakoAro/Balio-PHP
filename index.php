<!DOCTYPE html>
<html>
<head>
    <title>Personal Profile Generator</title>
</head>
<body>

<h2>Personal Profile Generator</h2>

<form action="profile.php" method="POST" enctype="multipart/form-data">

    <!-- NAME -->
    <label> Full Name:</label><br>
    <input type="text" name="fullname" required><br><br>

    <!-- AGE -->
    <label>Age:</label><br>
    <input type="number" name="age" required><br><br>

    <!-- COURSE -->
    <label>Course / Program:</label><br>
    <input type="text" name="course" required><br><br>

    <!-- E-MAIL -->
    <label>Email Address:</label><br>
    <input type="email" name="email" required><br><br>

    <!-- GENDER -->
    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Prefer not to say"> Prefer not to say
    <input type="radio" name="gender" value="Other"> Other
    <br><br>

    <!-- HOBBIES -->
    <label>Hobbies:</label><br>
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
    <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
    <input type="checkbox" name="hobbies[]" value="Cooking"> Cooking
    <br><br>

    <!-- BIOGRAPHY -->
    <label>Short Biography:</label><br>
    <textarea name="bio" rows="5" cols="40"></textarea><br><br>

    <!-- PROFILE IMAGE -->
    <label>Upload Profile Image:</label><br>
    <input type="file" name="profile_image" required><br><br>

    <!-- SUBMIT -->
    <button type="submit">Generate Profile</button>

</form>

</body>
</html>
