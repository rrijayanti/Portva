<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Get Your Free Flower Care Guide</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="jquery.js"></script>
  <title>Rita Rijayanti Portofolio</title>
</head>
<body>


<header>
  <section class="head1">
  </section> 
</header>
<nav>
  <a href="index.php?page=home">About Me</a>
  <a href="index.php?page=samples">Work Samples</a>
  <a href="index.php?page=tools">Tools & Skills</a>
  <a href="index.php?page=contact">Contact Me</a>
</nav> 

<?PHP
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                include "pages/about-me.php";
                break;
            case 'samples':
                include "pages/sample-work.php";
                break;
            case 'tools':
                include "pages/tools.php";
                break;
            case 'contact':
                include "pages/contact.php";
                break;			
             default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }else{
        include "pages/about-me.php";   
    }

?>



      
<footer>
  &copy; 2025 @rrijayanti
</footer>

</body>
</html>
