<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanzeus gym | Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="footer_and_header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
  body{
    overflow-x: hidden;
  }
  .main-container{
    background-color: rgba(0, 0, 0, 0.5);
    margin: 20px 0 20px 0;
    border-radius: 10px;
    color: white;
  }
  body{
    background-color: rgb(174, 200, 255);
    font-family: "Roboto Condensed", sans-serif;
  }
  #chat-container {
    width: 300px;
    height: 400px;
    border: 1px solid #ccc;
    display: flex;
    flex-direction: column;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
  }
  #chat-header {
    background-color: #007bff;
    color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 12px;
}

#chat-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
}

#messages {
    display: flex;
    flex-direction: column;
}

.message {
    margin: 5px 0;
    padding: 10px;
    border-radius: 5px;
}

.message.sent {
    align-self: flex-end;
    background-color: #dcf8c6;
}

.message.received {
    align-self: flex-start;
    background-color: #ececec;
}

#chat-footer {
    padding: 10px;
    display: flex;
    align-items: center;
}

#message-input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#send-message {
    margin-left: 10px;
    padding: 10px;
    border: none;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

#send-message:hover {
    background-color: #0056b3;
}

#close-chat {
    background: none;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
}
#msg{
  height: 140px;
}
.form-container{
  margin: 0;
}
.form-container button{
    position: absolute;
    border: 0;
    border-radius: 7px;
    padding: 10px 15px;
    
    background-color: rgb(0,82,153) !important;
      
      
      
      color: white !important;
      font-size: 20px;
      
      cursor: pointer;
      box-shadow: 10px 10px 16px rgba(0, 0, 0, 0.9); /* Box shadow around the button */
      /* Box shadow added */
      transition: background 0.3s, transform 0.3s;
  }
    .form-container button:hover {
      background:rgb(233,0,15) !important;
      transform: scale(1.05);
    }
</style>
</head>
<body>
<?php include('header.php') ?>

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="main-container col-sm-8">
      
      <div class="col-sm-7">
        <br>
        <h2>Find us</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.145918387884!2d79.88833157568119!3d6.873113819000452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a46ae9c6171%3A0xd0478ba261b17fa3!2sSanzeus!5e0!3m2!1sen!2slk!4v1722008998881!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br><br><br>
      </div>
      <div class="form-container col-sm-5">
        <br><br><br><br>
        <form>
          <h2>Ask away any question.</h2>
          <br>
          <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
                    <label for="f_name">First name:</label>
                    <input type="text" class="form-control" id="f_name" name="f_name">
                  </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                    <label for="l_name">Last name:</label>
                    <input type="text" class="form-control" id="l_name" name="l_name">
                  </div>
            </div>
                  
          </div>
          <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
                    <label for="email">Email: *</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                  </div>
            </div>
                  
          </div>
          <div class="row">
            <div class="col-sm-12">
            <div class="form-group">
                    <label for="msg">Message</label>
                    <input type="text" class="form-control" id="msg" name="msg">
                  </div>
          </div>
            </div>
          <button type="submit">Submit</button>
        </form>
        </div>
        <div id="chat-container">
          <div id="chat-header">
              <h2>Chat with us!</h2>
              <button id="close-chat">X</button>
          </div>
          <div id="chat-body">
              <div id="messages"></div>
          </div>
          <div id="chat-footer">
              <input type="text" id="message-input" placeholder="Type a message...">
              <button id="send-message">Send</button>
          </div>
      </div>
      </div>
      
    </div>
    <div class="col-sm-2"></div>
  </div>

    <!-- Footer -->
    <?php include('footer.php') ?>
  <script src="header.js"></script>
  <script>
    document.getElementById('send-message').addEventListener('click', function() {
    sendMessage();
});

document.getElementById('message-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

document.getElementById('close-chat').addEventListener('click', function() {
    document.getElementById('chat-container').style.display = 'none';
});

function sendMessage() {
    const input = document.getElementById('message-input');
    const message = input.value.trim();
    if (message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', 'sent');
        messageElement.innerText = message;
        document.getElementById('messages').appendChild(messageElement);
        input.value = '';
        // Simulate a response
        setTimeout(function() {
            const responseElement = document.createElement('div');
            responseElement.classList.add('message', 'received');
            responseElement.innerText = 'Thank you for your message!';
            document.getElementById('messages').appendChild(responseElement);
            document.getElementById('chat-body').scrollTop = document.getElementById('chat-body').scrollHeight;
        }, 1000);
        document.getElementById('chat-body').scrollTop = document.getElementById('chat-body').scrollHeight;
    }
}

  </script>
</body>
</html>