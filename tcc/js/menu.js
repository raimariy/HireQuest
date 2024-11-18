const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')
})
// Seleciona o checkbox do modo escuro/claro
const darkModeToggle = document.getElementById("dark-mode-toggle");

// Evento para alternar entre os temas
darkModeToggle.addEventListener("change", () => {
  document.body.classList.toggle("light-theme", darkModeToggle.checked);
});
