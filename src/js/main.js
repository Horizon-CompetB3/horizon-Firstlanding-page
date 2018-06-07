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

function sizeWindow(){
  document.body.height = window.innerHeight;
}
sizeWindow();

var loarderVar;

function loader() {
  loarderVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("section-first").style.display = "block";
}
