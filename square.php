<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Square</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
        <body>
        <?php include 'shape.php' ?>
            <div class="container">
                <h2>Square</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="form-group">
                        <label for="rad">Width:</label>
                        <input type="number" class="form-control" id="width" placeholder="Enter width" name="width">
                    </div>

                    <div class="form-group">
                        <label for="rad">Height:</label>
                        <input type="number" class="form-control" id="height" placeholder="Enter height" name="height">
                    </div>

                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" id="color" placeholder="Enter color" name="color">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                </form>
            </div>
        <hr>

        <?php
             include 'shapeabstract.php';

            if(isset($_POST['submit'])){
                $width=$_POST['width'];
                $height=$_POST['height'];
                $color=$_POST['color'];

                $rec=new Square($width,$height,$color);
                $area = $rec->getArea();
                $para = $rec->getParameter();
                $col = $rec->get_Color();

                showInfo($area,$para,$col);
            }


        ?>
        
        </body>
</html>
