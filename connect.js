document.getElementById("request").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form data
    var formData = new FormData(this);
  
    // Send form data to the server using Fetch API
    fetch("connect.php", {
      method: "POST",
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      // Handle the response from the server
      console.log(data);
    })
    .catch(error => {
      // Handle errors, if any
      console.log(error);
    });
  });
  