<?php
namespace CanerDB;

class Model
{

  protected $fileName = null;
  protected $columns = array();

  private $data = null;

  private function getHandle($mode = "r"){
    return fopen($this->fileName, $mode);
  }

  public function getLines() {
    if (!$this->data) {
      $fileSize = filesize($this->fileName);
      $handle = $this->getHandle();
      $this->data = $fileSize > 0 ? trim(fread($handle, $fileSize)) : "";
      fclose($handle);
    }

    return trim($this->data) != "" ? explode("\n", $this->data) : [];
  }

  public function indexOf($column, $value) {
    foreach ($this->getRows() as $key => $line) {
      if (isset($line[$column]) && $line[$column] === $value) return $key;
    }
    return -1;
  }

  public function find($column=null, $value=null) { #tested
    foreach ($this->getRows() as $key => $line) {
      if (isset($line[$column]) && $line[$column] === $value) print_r($line);
    }
    return null;
  }

  public function create($array) {
    $toAppend;
    if(count($array) == 3) {
      fwrite(  $this->getHandle("a"), implode(',',$array)."\n");
    }
  }

  public function count() { #tested
    return count($this->getLines());
  }

  public function __call($name, $args = []) {
    if (strpos($name, "findBy") === 0) {
      $column = strtolower(str_replace("findBy", "", $name));
      if (!in_array($column, $this->columns)) throw new Exception("Column $column not found");
      return $this->find($column, $args[0]);
    }
    throw new Exception("Method $name not found");

  }

  public function getRows() {
    $returnVal = [];
    foreach ($this->getLines() as $lineStr) {
      $lineData = explode(",", $lineStr);
      $row = [];
      foreach ($this->columns as $colIndex => $colName) {
        $row[$colName] = $lineData[$colIndex];
      }
      $returnVal[] = $row;
    }
    return $returnVal;
  }

  private function setColumnsFromFile(){
    $arr = file("$this->fileName");
    $columns;
    for($i = 0; $i < count($arr); $i++){
        $columnValues = explode(",",$arr[$i]);
        $columns[] = $columnValues;
      }
    return $columns;
  }

}
?>
