
document.addEventListener("DOMContentLoaded", function() {
    const lazyBackgrounds = document.querySelectorAll('[data-background-src]');

    const observerOptions = {
        root: null, // relative to the viewport
        rootMargin: '0px',
        threshold: 0.1 // Trigger when 10% of the element is visible
    };

    const backgroundObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const section = entry.target;
                const imageUrl = section.getAttribute('data-background-src');
                if (imageUrl) {
                    section.style.backgroundImage = `url(${imageUrl})`;
                    // Remove the data attribute once loaded to prevent re-loading
                    section.removeAttribute('data-background-src');
                }
                observer.unobserve(section); // Stop observing once loaded
            }
        });
    }, observerOptions);

    lazyBackgrounds.forEach(section => {
        backgroundObserver.observe(section);
    });
});
/*document.getElementById("contactForm").addEventListener("submit", function(e) {
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
});*/