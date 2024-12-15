// Scroll to the top button functionality
const scrollButton = document.createElement('button');
scrollButton.innerText = 'Back to Top';
scrollButton.style.position = 'fixed';
scrollButton.style.bottom = '20px';
scrollButton.style.right = '20px';
scrollButton.style.padding = '10px 15px';
scrollButton.style.backgroundColor = '#007bff';
scrollButton.style.color = '#fff';
scrollButton.style.border = 'none';
scrollButton.style.borderRadius = '5px';
scrollButton.style.cursor = 'pointer';
scrollButton.style.display = 'none';  // Initially hidden
document.body.appendChild(scrollButton);

// Show or hide the scroll button based on scroll position
window.addEventListener('scroll', () => {
  if (window.scrollY > 500) {
    scrollButton.style.display = 'block';
  } else {
    scrollButton.style.display = 'none';
  }
});

// Scroll back to top functionality
scrollButton.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
