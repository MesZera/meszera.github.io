<!doctype html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Portfolio</title>
<!-- fancybox CSS library -->
<link rel="stylesheet" type="text/css" href="/fancybox/jquery.fancybox.css">

<link rel="stylesheet" type="text/css" href="/css/main.css">

<link rel="stylesheet" type="text/css" href="/css/nav.css">

<link rel="stylesheet" type="text/css" href="/css/fonts.css">
    
<!-- JS library -->
<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- fancybox JS library -->
<script src="/fancybox/jquery.fancybox.js"></script>
    
<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>
</head>

<body>
    <header>
<a href="index.php"><img src="/images/misc/MesZera.png"/></a>
        <nav>
            <ul>
              <li><a class="active" href="index.php">HOME</a></li>
              <li><a href="">EXAMPLE</a></li>
              <li><a href="">EXAMPLE</a></li>
              <li><a href="">EXAMPLE</a></li>
            </ul>
      </nav>
</header>
    <main>
        <section class="section" id="logo">
            
            <div class="container">
                <div class="gallery">
                    <?php
                    //Include database configuration file
                    include('dbConfig.php');

                    //get images from database
                    $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

                    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){
                            $imageThumbURL = '/images/thumb/'.$row["file_name"];
                            $imageURL = '/images/'.$row["file_name"];
                    ?>
                        <a href="<?php echo $imageURL; ?>" data-fancybox="group" data-caption="<?php echo $row["title"]; ?>" >
                            <img src="<?php echo $imageThumbURL; ?>" alt="" />
                        </a>
                    <?php }
                    } ?>
                </div>
            </div>
            
        </section>
        
        <section class="section" id="new-media">
            
            
        </section>
        
        <section class="section" id="editorial">
            
        </section>
        
        
        
        <footer>
            
        </footer>
    </main>


    
</body>
    
</html>