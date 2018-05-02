<?

namespace application\core;

use application\lib\db;

abstract class Model
{

  public $db;

  function __construct()
  {
    $this->db = new db;
  //  var_dump($this->db);
  }

  public function getRecords($sql, $params)
  {
    $records = $this->db->getRow($sql, $params);
    return $records;
  }

  public function getRecord($sql, $params)
  {
    $record = $this->db->getColumn($sql, $params);
    return $record;
  }
}
