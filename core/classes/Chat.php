<?php
class Chat extends Core {
  public function fetchMessages(){
    $this->query("
    SELECT  `chat`.`message`,
            `users`.`username`,
            `users`. `user_id`
    FROM    'chat'
    JOIN    `users`
    ON      `chat`.`user_id`=`user`.`user_id`
    ORDER BY  `chat`.`timestamp`
    DESC
    ");
    // return rows
    return $this->rows();
  }

  public function FunctionName($value='')
  {
    // code...
  }
  function throwMessage($user_id, $message){
    // insert into db
    $this->query("
      INSER INTO `chat`(`user_id`,`message`,`timestamp`)
      VALUES(" . (int)$user_id . ", '" . $this->db->real_escape_string(htmlentities($message)) . "',UNIX_TIMESTAMP())
    ");
  }
}
