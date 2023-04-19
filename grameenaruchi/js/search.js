const findBtn = document.querySelector('.find-btn');
let findActive = false;
findBtn.addEventListener('click', () => {
    if (!findActive) {
        findBtn.classList.add('active');
        findActive = true;
    } else {
        findBtn.classList.remove('active');
        findActive = false;
    }
});