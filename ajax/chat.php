<?php

require '../core/init.php';
if (isset($_POST['method']) === true && empty ($_POST['method']) === false) {

  $chat = new Chat();
  $method = trim($_POST['method']);
  if($method == 'fetch'){
    $messages = $chat->fetchMessages();
    if(empty($messages)===true){
      echo 'No messages';
    }else{
      foreach($messages as $message){
        ?>
          <div class="message">
            <a href="#"><?php echo $message['username']; ?></a> says:
            <p><?php echon12br( $message['message']); ?></p>
          </div>
        <?php
      }
    }

  }else if($method == 'throw' && isset($_POST['message']) === true){
    $message = trim($_POST['message']);
    if(empty($message) == false){
      //throw
      $caht->throwMessage($_SEESION['user'],$message);

    }    //throw message into database

  }
  // code...
}
