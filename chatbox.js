function sendMessage() {
    var messageInput = document.getElementById("message-input");
    var message = messageInput.value.trim();
  
    if (message !== "") {
      var chatMessages = document.getElementById("chat-messages");
      var messageElement = document.createElement("div");
      messageElement.textContent = message;
      chatMessages.appendChild(messageElement);
  
      // Clear input field after sending message
      messageInput.value = "";
  
      // Scroll to the bottom of the chat messages
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }
  }
  