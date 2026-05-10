// ==================== BURGER MENU - js.js ====================
document.addEventListener('DOMContentLoaded', function () {
    const burger = document.getElementById('burger');
    const menu   = document.getElementById('menu');

    if (!burger || !menu) {
        console.warn('🍔 Burger elements not found!');
        return;
    }

    console.log('✅ Burger menu loaded successfully');

    function toggleMenu() {
        const isActive = menu.classList.toggle('active');
        burger.textContent = isActive ? '✕' : '☰';
    }

    burger.addEventListener('click', function (e) {
        e.stopImmediatePropagation();
        toggleMenu();
    });

    // Закрытие по ссылкам
    menu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 992) {
                menu.classList.remove('active');
                burger.textContent = '☰';
            }
        });
    });

    // Закрытие по клику вне меню
    document.addEventListener('click', function (e) {
        if (window.innerWidth <= 992 && 
            !menu.contains(e.target) && 
            e.target !== burger) {
            menu.classList.remove('active');
            burger.textContent = '☰';
        }
    });

    // Закрытие при ресайзе
    window.addEventListener('resize', () => {
        if (window.innerWidth > 992) {
            menu.classList.remove('active');
            burger.textContent = '☰';
        }
    });
});
