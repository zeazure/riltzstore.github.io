window.addEventListener("scroll", function() {
  var element = document.getElementById("scrollDiv");
  var elementPosition = element.getBoundingClientRect().top;

  if (elementPosition < window.innerHeight) {
    element.classList.add("scrolled");
  } else {
    element.classList.remove("scrolled");
  }

  if (window.scrollY === 0) {
    element.classList.remove('scrolled');
  }
});

var indexValue = 0;
//memberikan fungsi dan nilai pada variabel x
//serta mengatur kotak slide
function layar() {
  var x;
  const gambar = document.getElementsByClassName("item");

  for (x = 0; x < gambar.length; x++) {
    gambar[x].style.display = "none";
  }

  indexValue++;
  if (indexValue > gambar.length) { indexValue = 1 }
  gambar[indexValue - 1].style.display = "block";
}
layar();

var nilaislide = 1;
tampilan(nilaislide);
function nextslide(n) {
  tampilan(nilaislide += n);
}

function dotslide(n) {
  tampilan(nilaislide = n);
}

function tampilan(n) {
  //menambah memberi fungsi pada variabel 'y'
  //memberikan fungsi pada tombol
  var y; //Variabel dapat teman-teman ubah sesuai kebutuhan, namun perlu diingat teman-teman harus mengubah semua command yang terkait varibel tersebut
  var isi = document.getElementsByClassName("item");
  var garis = document.getElementsByClassName("line");

  if (n > isi.length) {
    nilaislide = 1;
  }

  if (n < 1) {
    nilaislide = isi.length;
  }

  for (y = 0; y < isi.length; y++) {
    isi[y].style.display = "none";
  }

  for (y = 0; y < isi.length; y++) {
    garis[y].className = garis[y].className.replace(" active", "")
  }

  isi[nilaislide - 1].style.display = "block";
  garis[nilaislide - 1].className += " active";
}

const menu = document.getElementById('tema');
const cont = document.getElementById('container');



menu.addEventListener('click', function(){
   cont.classList.toggle('color');
    console.log('OK');
}) 
