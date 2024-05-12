document.addEventListener("DOMContentLoaded", () => {
    eventListeners();
    darkMode();
});

const darkMode = () => {
    const prefiereDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

    prefiereDarkMode
        ? document.body.classList.add("dark-mode")
        : document.body.classList.remove("dark-mode");

    prefiereDarkMode.addEventListener("change", () => {
        prefiereDarkMode
            ? document.body.classList.add("dark-mode")
            : document.body.classList.remove("dark-mode");
    });

    const botonDarkMode = document.querySelector(".dark-mode-boton");

    botonDarkMode.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
};

const eventListeners = () => {
    const mobileMenu = document.querySelector(".mobile-menu");

    mobileMenu.addEventListener("click", navegacionResponsive);

    // Muestra campos condicionales
    const metodoContacto = document.querySelectorAll(
        'input[name="contacto[contacto]"]'
    );
    metodoContacto.forEach((input) =>
        input.addEventListener("click", mostrarMetodosContactos)
    );
};

const navegacionResponsive = () => {
    const navegacion = document.querySelector(".navegacion");

    navegacion.classList.contains("mostrar")
        ? navegacion.classList.remove("mostrar")
        : navegacion.classList.add("mostrar");
};

const mostrarMetodosContactos = (e) => {
    const contactoDiv = document.querySelector("#contacto");

    console.log(e.target.value);

    if (e.target.value === "telefono") {
        contactoDiv.innerHTML = `
            <label for="telefono">Numero de Teléfono:</label>
            <input type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]">

            <p>Elija la fecha y hora para la llamada</p>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="contacto[fecha]">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">
        `;
    } else {
        contactoDiv.innerHTML = `
            <label for="email">E-mail:</label>
            <input type="email" placeholder="Tu Email" id="email" name="contacto[email]" required>
        `;
    }
};
