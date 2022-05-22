<?php 
  require "pokedex.php";

  if (isset($_GET['id']) && isset($pokedex[$_GET['id'] - 1])) {
    $pokemon = $pokedex[$_GET['id'] - 1];
  } else {
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokedex - Bulbasaur</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <main class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4 my-5 text-center"><?php echo $pokemon['name']; ?></h1>
        <div class="mb-3 row">
          <div class="col">
            <img class="p-3 img-fluid" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/<?php echo $pokemon['id']; ?>.png" alt="<?php echo $pokemon['name']; ?>">
          </div>
          <div class="col"> 
            <h2>Abilities</h2>
            <ul>
              <?php foreach ($pokemon['abilities'] as $ability) : ?>
              <li><?php echo $ability; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="text-center">
          <?php if ($_GET['id'] > 1) : ?>
          <a class="btn btn-outline-primary" href="?id=<?php echo $_GET['id'] - 1; ?>">Prev</a>
          <?php else: ?>
          <a class="btn btn-outline-primary disabled">Prev</a>
          <?php endif; ?>
          
          <a class="btn btn-outline-primary" href="index.php">Home</a>

          <?php if ($_GET['id'] < count($pokedex)) : ?>
          <a class="btn btn-outline-primary" href="?id=<?php echo $_GET['id'] + 1; ?>">Next</a>
          <?php else: ?>
          <a class="btn btn-outline-primary disabled">Next</a>
          <?php endif; ?>
      </div>
    </div>  
  </main>
</body>
</html>