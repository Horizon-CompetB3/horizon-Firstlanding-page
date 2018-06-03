function scrollArt() {
  var element = document.getElementById("artiste");
  element.classList.add("scroll-artiste");

};

function scrollEnt() {
  var element = document.getElementById("entreprise");
  element.classList.add("scroll-entreprise");

};

function closeArtEnt() {
  var element = document.getElementById("artiste");
  element.classList.remove("scroll-artiste");
  var elementTwo = document.getElementById("entreprise");
  elementTwo.classList.remove("scroll-entreprise");


};
