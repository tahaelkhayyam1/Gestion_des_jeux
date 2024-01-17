<?php
 

$gamesController = new GameController();
$games = $gamesController->getAllGames();

if (isset($_POST['submit'])) {
    // Assuming you want to delete a game, pass the game ID to the DeleteGame method
    $gameId = $_POST['id'];
    $gamesController->deleteGame($gameId); // Make sure the deleteGame method exists
}

include('views/includes/alerts.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des games | Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="upf.jpg">
 
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Liste des Jeux</h5>
        </div>
        <div class="card-body">
            <table class="table" id="example">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Miniature</th>
                    <th scope="col">Titre</th>
                    <th scope="col">AppStore Link</th>
                    <th scope="col">PlayStore Link</th>
                    <th scope="col">#</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($games as $game) { ?>
                    <tr>
                        <td><?php echo $game['id'] ?></td>
                        <td><?php echo "<img  src='data:image/jpeg;base64," . base64_encode($game['image']) . "' class='rounded-circle'  style='height:100px; width:100px;'>" ?></td>
                        <td><?php echo $game['nom'] ?></td>
                        <td>
                            <?php echo ($game['AppStore']) ?
                                '<a href="' . $game['playstore'] . '">' . $game['AppStore'] . '</a>' :
                                '<span class="badge badge-danger">Non publié</span>';
                            ?>
                        </td>
                        <td>
                            <?php echo ($game['playstore']) ?
                                '<a href="' . $game['playstore'] . '">' . $game['playstore'] . '</a>' :
                                '<span class="badge badge-danger">Non publié</span>';
                            ?>
                        </td>
                        <td class="flex-row flex">
                            <form action="editgame" method="post" class="mr-1">
                                <input type="hidden" name="id" value="<?php echo $game['id'] ?>">
                                <button class="btn btn-sm btn-warning" type='submit'><i class="fas fa-edit"></i>
                                </button>
                            </form>
                            <button class="btn btn-sm btn-danger" onclick="showConfirmationPopup(<?php echo $game['id'] ?>)"
                                    type="button">
                                <span><i class="fa fa-trash"></i></span>
                            </button>
                            <form class="mr-1" method="post">
                                <div class="confirmation-card" id="confirmation-<?php echo $game['id'] ?>">
                                    <input type="hidden" name="id" value="<?php echo $game['id'] ?>">
                                    <div class="card-header">
                                        <h3>Confirmation</h3>
                                        <button class="close-button" type="button"
                                                onclick="hideConfirmationPopup(<?php echo $game['id'] ?>)">X
                                        </button>
                                    </div>
                                    <div class="card-body">
    <p>Vous voulez vraiment supprimer <?php echo $game['nom'] ?>  ?</p>
    <button id="confirm-yes" name="submit" onclick="hideConfirmationPopup(<?php echo $game['id'] ?>)">Yes</button>
    <button id="confirm-no" type="button" onclick="hideConfirmationPopup(<?php echo $game['id'] ?>)">No</button>
  </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

<style >
.confirmation-card {
  display: none;
  position: fixed;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  width: 300px;
}

.card-header {
  background-color: #f2f2f2;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.card-header h3 {
  margin: 0;
}

.close-button {
  border: none;
  background-color: transparent;
  font-size: 1.2em;
  cursor: pointer;
}

.card-body {
  padding: 20px;
}

.confirmation-card p {
  margin-top: 0;
}

#confirm-yes {
  background-color: green;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px;
}

#confirm-no {
  background-color: red;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
  </style>

<script>
    // JavaScript functions for showing/hiding confirmation popups
    function showConfirmationPopup(gameId) {
        const confirmationPopup = document.getElementById(`confirmation-${gameId}`);
        confirmationPopup.style.display = 'block';
    }

    function hideConfirmationPopup(gameId) {
        const confirmationPopup = document.getElementById(`confirmation-${gameId}`);
        confirmationPopup.style.display = 'none';
    }
</script>

</body>
</html>
