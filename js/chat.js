var chat ={}

chat.fetcMessage = function(){
  $.ajax({
    url:'ajax/chat.php',
    type: 'post',
    data: { method: 'fetch'},
    success: function(data){
      $('.chat .messages').html(data);
    }
  });
}

chat.throwMessage = function (message){
  if($.trim(message).length != 0){
    $.ajax({
      url:'ajax/chat.php',
      type: 'post',
      data: { method: 'fetch',message: message},
      success: function(data){
        chat.fetchMessages();
        chat.entry.val('');
      }
    });
  }
}


chat.entry = $('.chat .entry');
chat.entry.bind('keydown', finction(e)){
  if(e.key == 13 && e.shiftKey == false){
    chat.throwMessage($(this).val());
    e.preventDefault();
  }
}

chat.interval = setInterval(chat.fetchMessages, 4000);
chat.fetchMessages();
