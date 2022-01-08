document.getElementById("opcion1").onclick = function () {
  location.href = "Vista/AgendarVueloBundle/destinos.php";
};

document.getElementById("opcion2").onclick = function () {
  location.href = "Vista/ActualizarVueloBundle/vuelos.php";
};

document.getElementById("opcion3").onclick = function () {
  location.href = "Vista/CancelarVueloBundle/cancelar.php";
};

document.getElementById("opcion4").onclick = function () {
  location.href = "Vista/CatalogoBundle/catalogo.php";
};

document.getElementById("opcion5").onclick = function () {
  location.href = "Vista/ListaDeVuelosBundle/lista_vuelos.php";
};

document.getElementById("opcion6").onclick = function () {
  location.href = "Vista/VueloPorDiaBundle/vuelo_dia.php";
};

function play() {
  var audio = document.getElementById("audio");
  audio.play();
}

// =================================-------------> Color Blanco

document.getElementById("opcion1").addEventListener("mouseover", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.1)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion1").addEventListener("mouseout", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion2").addEventListener("mouseover", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.1)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion2").addEventListener("mouseout", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion3").addEventListener("mouseover", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.1)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion3").addEventListener("mouseout", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion4").addEventListener("mouseover", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.1)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion4").addEventListener("mouseout", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion5").addEventListener("mouseover", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.1)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion5").addEventListener("mouseout", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion6").addEventListener("mouseover", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.1)';
  document.getElementById("men").style.transition = "all 1s";
});

document.getElementById("opcion6").addEventListener("mouseout", function () {
  document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
  document.getElementById("men").style.transition = "all 1s";
});

// =================================-------------> Colores propios

// document.getElementById("opcion1").addEventListener("mouseover", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(201, 247, 38, 0.2)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion1").addEventListener("mouseout", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion2").addEventListener("mouseover", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(250, 192, 85, 0.2)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion2").addEventListener("mouseout", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion3").addEventListener("mouseover", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(247, 52, 38, 0.2)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion3").addEventListener("mouseout", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion4").addEventListener("mouseover", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(248, 54, 151, 0.2)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion4").addEventListener("mouseout", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion5").addEventListener("mouseover", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(255, 104, 3, 0.2)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion5").addEventListener("mouseout", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion6").addEventListener("mouseover", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(38, 247, 230, 0.2)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// document.getElementById("opcion6").addEventListener("mouseout", function () {
//   document.getElementById("men").style.backgroundColor = 'rgba(240, 248, 255, 0.5)';
//   document.getElementById("men").style.transition = "all 1s";
// });

// let test = document.getElementById("opcion1");

// // This handler will be executed only once when the cursor
// // moves over the unordered list
// test.addEventListener("mouseenter", function( event ) {
//   // highlight the mouseenter target
//   event.target.style.color = "purple";

//   // reset the color after a short delay
//   setTimeout(function() {
//     event.target.style.color = "";
//   }, 500);
// }, false);

// // This handler will be executed every time the cursor
// // is moved over a different list item
// test.addEventListener("mouseover", function( event ) {
//   // highlight the mouseover target
//   event.target.style.color = "red";

//   // reset the color after a short delay
//   setTimeout(function() {
//     event.target.style.color = "";
//   }, 500);
// }, false);