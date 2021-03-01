<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        Full Name: <input type="text" name="fname" required placeholder="Enter Your Name......."><br><br>

        Email: <input type="email" name="email" required placeholder="Enter Your Email......."><br><br>

        <input type="radio" name="gender" value="Female" checked> Female
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Others"> Others

        <br>
        <br>

        Language You Speak: <input type="checkbox" name="lang[]" value="Nepali" checked>Nepali
        <input type="checkbox" name="lang[]" value="English">English
        <input type="checkbox" name="lang[]" value="Hindi">Hindi

        <br>
        <br>

        Date of Birth: <input type="datetime-local" name="dob" required>

        <br>
        <br>

        Place of Birth:
        <select name="place_of_birth">
            <option value="KTM">Kathmandu</option>
            <option value="BKT">Bhaktapur</option>
            <option value="LTP">Lalitpur</option>
            <option value="Chitwan">Chitwan</option>
        </select>

        <br>
        <br>

        <p>About:</p>
        <textarea name="about" rows="5" style="resize: none; width:300px;"></textarea>

        <br><br>

        Image Upload: <input type="file" name="image" required accept="image/*">

        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>