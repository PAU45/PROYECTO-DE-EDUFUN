const palabras = ['become', 'eat', 'have', 'read', 'swim','speak','sleep','teach','accept','compare','dance','enjoy','hurry'
,'jump'];

const imagenesAhorcado = [
  'img/ahorcado_6.png',
  'img/ahorcado_5.png',
  'img/ahorcado_4.png',
  'img/ahorcado_3.png',
  'img/ahorcado_2.png',
  'img/ahorcado_1.png',
  'img/ahorcado_0.png'  
];

const MAX_INTENTOS_FALLIDOS = 6;

let palabraSeleccionada = '';   

let letrasAdivinadas = [];   
 
let intentosFallidos = 0;

function seleccionarPalabra() {
  palabraSeleccionada = palabras[Math.floor(Math.random() * palabras.length)];
}
 
function mostrarPalabra() {
  const wordContainer = document.getElementById('word-container');
  wordContainer.textContent = letrasAdivinadas.join(' '); 
}

function mostrarLetras() {
  const lettersContainer = document.getElementById('letters-container');
  lettersContainer.innerHTML = '';
  
  for (let letra of 'abcdefghijklmnopqrstuvwxyz') {
    const letraButton = document.createElement('button');
    letraButton.classList.add('letter');
    letraButton.textContent = letra;
    letraButton.addEventListener('click', () => intentarAdivinar(letra));
    lettersContainer.appendChild(letraButton);
  }
}

function intentarAdivinar(letra) {

  if (!palabraSeleccionada.includes(letra)) {

    intentosFallidos++;

    if(intentosFallidos >= MAX_INTENTOS_FALLIDOS) {
      alert('¡Máximo de intentos! La palabra era: '+ palabraSeleccionada);
      reiniciarJuego();
    }

  } else {

    for (let i = 0; i < palabraSeleccionada.length; i++) {
      if (palabraSeleccionada[i] === letra) {
        letrasAdivinadas[i] = letra;
      }
    }
    
    mostrarPalabra();
    
    if (!letrasAdivinadas.includes('_')) {
      alert('¡Felicidades! Has adivinado la palabra.');
      reiniciarJuego();
    }

  }

  mostrarImagenAhorcado();

}

function mostrarImagenAhorcado() {
  const imagenAhorcado = document.getElementById('imagen-ahorcado');
  const imagenPath = imagenesAhorcado[intentosFallidos]; 
  imagenAhorcado.src = imagenPath;
}

function reiniciarJuego() {
  intentosFallidos = 0;
  seleccionarPalabra();
  letrasAdivinadas = Array(palabraSeleccionada.length).fill('_');
  mostrarPalabra();
  mostrarLetras();
  mostrarImagenAhorcado();
}

document.addEventListener('DOMContentLoaded', iniciarJuego);

function iniciarJuego() {
  seleccionarPalabra();
  reiniciarJuego();
}