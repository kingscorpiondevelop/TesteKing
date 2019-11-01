<?php
            $usuario_autenticado = false;
            $usuario_id = null;
            $usuario_perfil_id = null;

            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $db = "kingscorpion";
            $conn = mysqli_connect($servidor, $usuario, $senha, $db);
            if (!$conn) {
                  die("Falha ao conectar com o servidor: " . mysqli_connect_error());
            }
            else {
            echo "Conexão efetuada com sucesso!";

                  echo "<br>";
                  
                  $login = $_GET['loginC'];//"gabriel@teste.com.br";//$_POST['email'];
                  $senha = $_GET['senhaC'];//"1234";//$_POST['senha'];
                  
                  echo $login;
                  echo "<br>";
                  echo $senha;
                  echo "<br>";

                  $query = "SELECT id,login,senha from usuario where login = '$login' and senha = '$senha'";
                  var_dump($query);
                  echo "<br>";
                  echo "Vardump query: <br>";
                  $result = mysqli_query($conn ,$query);
                  var_dump($result);
                  echo "<br>";
                  echo "Vardump result: <br>";
                  $row = mysqli_fetch_array($result, MYSQLI_NUM);
                  var_dump($row);
                  echo "<br>";
                  echo "Vardump row: <br>";

                  
                  $query2 = "SELECT * from chamados";
                  $testeselect = mysqli_query($conn ,$query2);
                  $testeresult = mysqli_fetch_array($testeselect, MYSQLI_NUM);
                  var_dump($testeresult);
                  

                  //verifica quantas linhas retornaram // caso não tenha retorno falha a entrada
                  echo "<br>";
                  echo $row[0];
                  echo "<br>";
                  echo $row[1];
                  echo "<br>";
                  echo $row[2];

            }
?>
