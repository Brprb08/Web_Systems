document.querySelector('.nav-btn').addEventListener('click', function() {
    document.querySelector('nav').classList.toggle('nav-open');
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