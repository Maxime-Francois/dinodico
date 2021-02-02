<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bd25e66059.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Dinodico</title>
</head>
<body>
<section class="navigation">
      <div class="nav-container">
        <div class="brand">
        <a href="<?=$router->generate('home')?>">Dinodico</a>
        </div>
        <nav>
          <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
          <ul class="nav-list">
           <li>
              <a  href="<?=$router->generate('home')?>">Liste</a>
            </li>
            <li>
            <a href="<?=$router->generate('types')?>">Types</a>
            <li>
              <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
              </li>
            
            
          </ul>
        </nav>
      </div>
    </section>