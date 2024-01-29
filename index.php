<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="https://github.com/user/repo/issues/new" method="post" enctype="multipart/form-data">
        <input type="hidden" name="title" value="New Image Upload">
        <input type="hidden" name="labels" value="image-upload">
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <input type="submit" value="Upload Image">
    </form>
</body>
</html>
