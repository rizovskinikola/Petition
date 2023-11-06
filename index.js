const validateForm = (event) => {
  event.preventDefault(); // Prevent form submission
  
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phoneNumber = document.getElementById("phone").value;
  
  const errors = [];
  
  // Name validation
  if (name === "") {
      errors.push("Name is required.");
  }
  
  // Email validation
  if (email === "") {
      errors.push("Email is required.");
  } else {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
          errors.push("Invalid email format.");
      }
  }
  
  // Phone number validation
  if (phoneNumber === "") {
      errors.push("Phone number is required.");
  } 
  
  // Display errors or submit form using AJAX
  if (errors.length > 0) {
      const errorContainer = document.getElementById("error");
      errorContainer.innerHTML = errors.join("<br>");
  } else {
      const xhr = new XMLHttpRequest();
      const formData = new FormData(event.target);
      
      xhr.open('POST', event.target.action, true);
      xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
              // Handle successful form submission
              document.getElementById("hide").style.display = "none";
              document.getElementById("success").innerHTML = "Thank you for your registratiton"
              console.log(xhr.responseText);
          }
      };
      
      xhr.send(formData);
  }
};