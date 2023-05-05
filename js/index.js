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

images = [
  {"name":"img1", "src":"../images/lure1.jpeg"},
  {"name":"img1", "src":"../images/lure2.jpeg"},
  {"name":"img1", "src":"../images/lure3.jpeg"}
];
imgIndex = 0;

function changeImg() {
  document.getElementById("slideshow").src=images[imgIndex].src
  if (images.length > imgIndex+1){
    imgIndex++;
  } else {
    imgIndex = 0;
  }
}

changeImg();
setInterval(changeImg,2000);
