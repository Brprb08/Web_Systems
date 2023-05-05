document.querySelector('.nav-btn').addEventListener('click', function() {
    document.querySelector('nav').classList.toggle('nav-open');
  });

images = [
  {"name":"img1", "src":"../images/lure1.jpeg", "alt":"Lure 1"},
  {"name":"img1", "src":"../images/lure2.jpeg", "alt":"Lure 2"},
  {"name":"img1", "src":"../images/lure3.jpeg", "alt": "Lure3"}
];
imgIndex = 0;

function changeImg() {
  document.getElementById("slideshow").src=images[imgIndex].src
  document.getElementById("slideshow").alt=images[imgIndex].alt
  if (images.length > imgIndex+1){
    imgIndex++;
  } else {
    imgIndex = 0;
  }
}

changeImg();
setInterval(changeImg,2000);