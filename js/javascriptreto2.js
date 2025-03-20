

function activarLupa(imageElement, magnifierElement) {
    imageElement.addEventListener("mousemove", (e) => {
        const rect = imageElement.getBoundingClientRect();
        const zoomFactor = 2;
        const offsetX = e.clientX - rect.left;
        const offsetY = e.clientY - rect.top;

        magnifierElement.style.display = "block";
        magnifierElement.style.left = `${offsetX - magnifierElement.offsetWidth / 2}px`;
        magnifierElement.style.top = `${offsetY - magnifierElement.offsetHeight / 2}px`;

        const img = magnifierElement.querySelector("img");
        img.style.left = `-${offsetX * zoomFactor - magnifierElement.offsetWidth / 2}px`;
        img.style.top = `-${offsetY * zoomFactor - magnifierElement.offsetHeight / 2}px`;
    });

    imageElement.addEventListener("mouseleave", () => {
        magnifierElement.style.display = "none";
    });
}

const image1 = document.getElementById("image1");
const magnifier1 = document.getElementById("magnifier1");
const image2 = document.getElementById("image2");
const magnifier2 = document.getElementById("magnifier2");

activarLupa(image1, magnifier1);
activarLupa(image2, magnifier2);

function verificarDiferencias() {
    const respuesta = document.getElementById("respuesta").value;
    const resultado = document.getElementById("resultado");

    const diferenciasCorrectas = 5; 

    if (respuesta.trim() === "") {
        resultado.style.color = "red";
        resultado.textContent = "Por favor, ingresa un número antes de validar.";
        return;
    }

    if (isNaN(respuesta)) {
        resultado.style.color = "red";
        resultado.textContent = "La respuesta debe ser un número. Intenta de nuevo.";
        return;
    }

    if (parseInt(respuesta) === diferenciasCorrectas) {
        clearInterval(interval);
        resultado.style.color = "green";
        resultado.textContent = "¡Correcto! Has encontrado todas las diferencias.";
    } else if (parseInt(respuesta) < diferenciasCorrectas) {
        resultado.style.color = "red";
        resultado.textContent = "Te faltan diferencias por encontrar. Sigue buscando.";
    } else {
        resultado.style.color = "red";
        resultado.textContent = "Has encontrado demasiadas diferencias. Intenta de nuevo.";
    }
}
