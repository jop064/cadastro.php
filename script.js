// Selecionando os elementos
const menuBtn = document.getElementById('menuBtn');
const closeBtn = document.getElementById('closeBtn');
const sidebar = document.getElementById('sidebar');
const mainContent = document.getElementById('mainContent');

// Função para abrir a sidebar
menuBtn.addEventListener('click', () => {
  sidebar.style.left = '0';
  mainContent.style.marginLeft = '250px'; // Desloca o conteúdo para a direita
});

// Função para fechar a sidebar
closeBtn.addEventListener('click', () => {
  sidebar.style.left = '-250px';
  mainContent.style.marginLeft = '0';
});
