document.addEventListener('DOMContentLoaded', function() {
  const toggleDarkMode = document.querySelector('#toggle-dark-mode');
  toggleDarkMode.addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
  });
});
