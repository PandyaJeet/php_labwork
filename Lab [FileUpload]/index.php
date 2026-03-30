<?php
    class db{
        private $con;
        function __construct(){
            $dsn = "mysql:host=localhost;dbname=hello;";
            $usn = "root";
            $pass = "";
            $this->con=new PDO ($dsn,$usn,$pass);
        }
        function UploadFile($file){
            $filename = $file['name'];
            $fileTmpPath = $file['tmp_name'];
            $dir = "uploads/";
            if (!is_dir($dir)){
                mkdir($dir,0777,true);
            }
            $path = $dir . basename($filename);
            if (move_uploaded_file($fileTmpPath,$path)){
                $p = "INSERT INTO img_db (name,path) VALUES (:nm,:pth)";
                $stmt = $this->con->prepare($p);
                $stmt->bindParam(":pth",$path);
                $stmt->bindParam(":nm",$filename);
                $stmt->execute();
            }
        }
        function display(){
            $p = "SELECT * FROM img_db";
            $stmt = $this->con->prepare($p);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }
    $obj = new db();
    $photos = $obj->display();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload & Gallery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .form-section {
            padding: 40px;
            border-bottom: 2px solid #f0f0f0;
        }

        .form-group {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .form-group input[type="file"] {
            flex: 1;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .form-group input[type="file"]:hover {
            border-color: #667eea;
        }

        .form-group input[type="submit"] {
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .form-group input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        .form-group input[type="submit"]:active {
            transform: translateY(0);
        }

        .gallery-section {
            padding: 40px;
        }

        .gallery-section h2 {
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            background: #f9f9f9;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .no-images {
            text-align: center;
            color: #999;
            padding: 40px 20px;
            font-size: 1.1em;
        }

        @media (max-width: 600px) {
            .form-group {
                flex-direction: column;
            }

            .form-group input[type="file"],
            .form-group input[type="submit"] {
                width: 100%;
            }

            .gallery {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 1.5em;
            }

            .form-section,
            .gallery-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📸 Image Gallery</h1>
            <p>Upload and view your photos</p>
        </div>

        <div class="form-section">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" name="file" accept="image/*" required>
                    <input type="submit" value="Upload" name="btnupload">    
                </div>
            </form>
        </div>

        <div class="gallery-section">
            <h2>Gallery</h2>
            <?php
                if (count($photos) > 0) {
                    echo '<div class="gallery">';
                    foreach ($photos as $photo) {
                        ?>
                        <div class="gallery-item">
                            <img src="<?php echo htmlspecialchars($photo['path']); ?>" alt="<?php echo htmlspecialchars($photo['name']); ?>">
                        </div>
                        <?php
                    }
                    echo '</div>';
                } else {
                    echo '<div class="no-images">No images uploaded yet. Upload one to get started!</div>';
                }
            ?>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['btnupload'])){
        if($_SERVER['REQUEST_METHOD']==='POST' && isset($_FILES['file'])){
            $obj->UploadFile($_FILES['file']);
        }
    }
?>