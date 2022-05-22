<?php require "pokedex.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokedex</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <main class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4 my-5 text-center">Pokedex</h1>
        <div class="d-flex flex-wrap justify-content-center">
          <?php foreach ($pokedex as $pokemon) : ?>
          <a class="m-3 text-decoration-none" href="pokemon.php?id=<?php echo $pokemon['id']; ?>">
            <img class="p-3 border border-1" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?php echo $pokemon['id']; ?>.png" alt="<?php echo $pokemon['name']; ?>"><br>
            <p class="text-center text-black"><?php echo $pokemon['name']; ?></p>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </main>
</body>
</html>