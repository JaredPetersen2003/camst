<?php
function getMainPosts(){
    $db = mysqli_connect("localhost","user", "pass","camst");
    $query = "SELECT * FROM posts ORDER BY date DESC LIMIT 20";
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result)){
        echo '<div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
        <div class="hover-overlay">
            <a href="#!">
            <img src="img/uploads/'.$row['image_name'].'" class="img-fluid" alt="" />
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">'.$row['title'].'</h5>
            <p class="card-text">
                '.$row['subtitle'].'
            </p>
            <a href="#!" class="btn btn-primary">Read</a>
        </div>
        </div>
    </div>';

    }
}

?>