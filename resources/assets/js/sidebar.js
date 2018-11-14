window.onload = () => {
    const sideBar = document.querySelector('nav.sidebar');
    const menuBtn = document.querySelector('nav.sidebar>.menu-btn');

    menuBtn.addEventListener('click', () => {
        sideBar.classList.toggle('on');
    });

    console.log(menuBtn);
}