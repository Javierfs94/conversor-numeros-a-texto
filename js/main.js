document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");
  const input = document.getElementById("numero");

  form.addEventListener("submit", (e) => {
    const value = input.value.trim();

    // Solo números con punto decimal opcional y hasta 2 cifras decimales
    const regex = /^\d+(\.\d{1,2})?$/;

    if (!regex.test(value)) {
      e.preventDefault();
      alert("Por favor, introduce un número válido en formato: 1234.56");
    }
  });
});
