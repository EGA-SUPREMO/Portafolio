function lazyload(id) {
  var image = document.querySelectorAll(".lazy#portfolioModalImg"+id)[0];
  if(image==undefined) {
    return;
  }
  image.src = image.dataset.src;
  image.classList.remove("lazy");
}