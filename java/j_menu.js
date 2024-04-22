const toggleBtn = document.querySelector('.toggle');
const sidePanel = document.querySelector('.side-panel');

toggleBtn.addEventListener('click', () => {
    toggleBtn.classList.toggle('active');
    sidePanel.classList.toggle('active');
});