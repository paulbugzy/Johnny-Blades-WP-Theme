document.addEventListener('DOMContentLoaded', function() {
  const toggleDarkMode = document.querySelector('#toggle-dark-mode');
  toggleDarkMode.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
  });

  const directionsForm = document.getElementById('directions-form');
  if (directionsForm) {
    directionsForm.addEventListener('submit', function(event) {
      event.preventDefault();
      const userAddress = document.getElementById('user-address').value;
      const destination = '3833/5 W Lawrence Ave Chicago, Illinois';
      const directionsUrl = `https://www.google.com/maps/dir/?api=1&origin=${encodeURIComponent(userAddress)}&destination=${encodeURIComponent(destination)}`;
      window.open(directionsUrl, '_blank');
    });
  }
});
