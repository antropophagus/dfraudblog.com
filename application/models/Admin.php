<?

namespace application\models;
use application\core\Model;

class Admin extends Model
{
  public function loginValidate($forms)
  {
    $var = require 'application/config/admin.php';
    if ($forms["login"] != $var["login"] or $forms["password"] != $var["pass"]) return false;
    else return true;
  }

  public function createState($forms)
  {

    $params = [
      'title' => $forms["title"],
      'primary_text' => $forms["primary_text"],
      'maintext' => $forms["text"],
      'category' => $forms["category"],
      'image' => $forms["image"],
    ];
    $sql = "INSERT INTO `states`(`id`, `title`, `primary_text`, `text`, `category_id`, `date`, `image`) VALUES ('',:title ,:primary_text ,:maintext,:category,NOW(),:image)";
    $result = $this->db->insertRecord($sql, $params);
    return $result;
  }

  public function deleteState($id)
  {
    $params = [
      'id' => $id,
    ];
    $sql = "DELETE FROM `states` WHERE id= :id";
    $result = $this->db->deleteRecord($sql, $params);
    return $result;
  }

  public function deleteSlide($id)
  {
    $params = [
      'id' => $id,
    ];
    $sql = "DELETE FROM `slides` WHERE id= :id";
    $result = $this->db->deleteRecord($sql, $params);
    return $result;
  }

  public function createSlide($forms)
  {
    $params = [
      'title' => $forms["title"],
      'maintext' => $forms["text"],
      'image' => $forms["image"],
      'id_state' => $forms["id_state"]
    ];
    $sql = "INSERT INTO `slides`(`id`, `state_id`, `title`, `text`, `image`) VALUES ('',:id_state ,:title ,:maintext,:image)";
    $result = $this->db->insertRecord($sql, $params);
    return $result;
  }

}
