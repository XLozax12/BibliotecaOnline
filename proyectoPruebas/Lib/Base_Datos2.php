<?php
// sin heredar
namespace Lib;
use PDO;

class Base_Datos2 {
  
  private PDO $conexion;
  private mixed $resultado;
  
  function __construct(
    private string $servidor = SERVIDOR,
    private string $usuario = USUARIO,
    private string $pass = PASS,
    private string $base_datos= BASE_DATOS
  ) {
    $this->conexion = $this->conectar();
  }
  
  private function conectar(): PDO {
    try {
      $conexion = new PDO("mysql:host={$this->servidor};dbname={$this->base_datos}", $this->usuario, $this->pass);
      return $conexion;
    } catch(PDOException $e){
      die('Error: '. $e->getMessage());
    }
  }

  public function consulta(string $consultaSQL) {
      $this->resultado = $this->conexion->query($consultaSQL);
      return $this->resultado;
  }
  public function prepara($pre){
    return $this->conexion->prepare($pre);
  }
  
  public function extraer_registro(): mixed {
    return ( $fila = $this->resultado->fetch(PDO::FETCH_ASSOC ))? $fila:false;
  }

  public function extraer_todos(): array {
    return $this->resultado->fetchAll(PDO::FETCH_ASSOC);
    // fetch_assoc le dices que lo ponga en array
  }
  public function extraer_todos2(): array {
    return $this->resultado->fetchAll(PDO::FETCH_OBJ);
    // fetch_assoc le dices que lo ponga en array
  }

  

  public function filasAfectadas(): int{
    return $this->resultado->rowCount();
  }

  public function ultimoIdInsertado(): int{
    return $this->conexion->lastInsertId;
  }

}