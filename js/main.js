document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  let result = document.getElementById("result1");
  result.innerHTML = "Sending...";

  let formData = new FormData(this);

  fetch("contact-send.php", {
    method: "POST",
    headers: { "X-Requested-With": "XMLHttpRequest" },
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if(data.type === "message") {
      result.innerHTML = `<div class="alert alert-success">${data.text}</div>`;
      this.reset();
    } else {
      result.innerHTML = `<div class="alert alert-danger">${data.text}</div>`;
    }
  })
  .catch(error => {
    result.innerHTML = `<div class="alert alert-danger">Something went wrong. Please try again.</div>`;
  });
});