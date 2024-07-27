window.onload = function () {
    // Extract the filename from the URL path
    var currentPage = window.location.pathname.split('/').pop();

    // Determine the button ID based on the filename
    var buttonId = "";
    switch (currentPage) {
      case "home.php":
        buttonId = "home";
        break;
      case "gallery.php":
        buttonId = "gallery";
        break;
      case "about.php":
        buttonId = "about";
        break;
      case "register.php":
        buttonId = "my_acc";
        break;
      case "contact.php":
        buttonId = "contact";
        break;
    }

    // Set the corresponding button to active
    if (buttonId) {
      var activeButton = document.getElementById(buttonId);
      if (activeButton) {
        activeButton.classList.add("active");
        // You might want to remove 'active' class from other buttons first
        // This can be done by removing the 'active' class from all buttons
        // And then adding it back only to the activeButton as shown above
      }
    }
  };