const toggleBtns = document.querySelectorAll('.toggle-btn');
const sidebar = document.querySelector('.sidebar');

toggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        sidebar.classList.toggle('show');
    });
});