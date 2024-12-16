// Verifica se o modo escuro está ativado no armazenamento local
const isDarkModeEnabled = localStorage.getItem('darkMode') === 'enabled';
console.log(isDarkModeEnabled)

// Ativa o modo escuro se estiver habilitado no armazenamento local
if (isDarkModeEnabled) {
    document.body.classList.add('dark-mode');
}

const darkModeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;

darkModeToggle.addEventListener('click', () => {
    // Alternar entre modo claro e escuro
    body.classList.toggle('dark-mode');
    
    // Atualiza o estado do modo escuro no armazenamento local
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('darkMode', 'enabled');
    } else {
        localStorage.setItem('darkMode', 'disabled');
    }
});
