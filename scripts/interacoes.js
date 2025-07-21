document.querySelectorAll('.menu-barra a').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      alert(`Você clicou em: ${link.textContent}`);
    });
  });
  