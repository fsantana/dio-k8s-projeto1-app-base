<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'conexao.php';
$return = [];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comentario'])){

  $id =  rand(1, 999);
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $comentario = $_POST["comentario"];

  $query = "INSERT INTO mensagens (id, nome, email, comentario) VALUES ('$id', '$nome', '$email', '$comentario')";


  if ($connection->query($query) === TRUE) {
    echo "Mensagem gravada ";
  } else {
    echo "Error: " . $link->error;
  }


}