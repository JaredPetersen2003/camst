<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Cape Academy</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel= "stylesheet">
    <!-- Icons -->
    <link href="css/all.css" rel="stylesheet">
    <link href="css/brands.css" rel="stylesheet">
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <!-- jQuery (necessary for Bootstrap’s JavaScript plugins) -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/script.js"></script>
    <script src="js/scrollreveal.js"></script>
  
    <link rel="icon" href="img/favicon.svg">

    <style>
        body {
  
                background-repeat: no-repeat;
                background-size: cover;
                background-color: #ffffff;
        }
        
        </style>
        
    </head>
    <body class="background">
        <?php include("nav.php");?>
        <div class= "form">
            <h1 class="text-center">Post Article</h1>
            <form class="container" action="InsertPost.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                <div class="form-group col-md-6 mb-3">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" id="inputTitle" placeholder="Title" name="title">
                </div>
                <div class="form-group col-md-6 mb-3">
                <label for="inputsubtitle">Subtitle</label>
                <input type="text" class="form-control" id="inputsubtitle" placeholder="subtitle" name="subtitle">
                </div>
                </div>
                <div class="form-group mb-3">
                <label for="inputContent">Content</label>
                <textarea class="form-control" rows="15" id="inputContent" placeholder="Post Content" name="content"></textarea>
                </div>
                <div class="form-group mb-3">
                <label for="inputPhoto">Cover Photo</label>
                <input type="file" class="form-control-file" id="inputPhoto" name="image"><br>
                </div>
                <input class="mb-5" type="submit" />
                
            </form>
            
        </div>

    </body>
</html>