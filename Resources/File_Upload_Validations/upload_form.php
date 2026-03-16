<!DOCTYPE html>
<html>
<head>
    <title>Simple File Upload</title>
</head>
<body>

<h2>Upload File</h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    Select file:
    <input type="file" name="fileToUpload" required>
    <br><br>

    <input type="submit" name="submit" value="Upload File">
</form>

</body>
</html>