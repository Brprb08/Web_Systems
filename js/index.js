document.querySelector('.nav-btn').addEventListener('click', function () {
  const nav = document.querySelector('nav');
  const googleMap = document.querySelector('#googleMap');

  nav.classList.toggle('nav-open');

  if (nav.classList.contains('nav-open')) {
    googleMap.style.display = 'none';
  } else {
    googleMap.style.display = 'block';
  }
});