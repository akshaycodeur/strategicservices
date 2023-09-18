
document.addEventListener('DOMContentLoaded', () => {
    const mobileButton = document.getElementById('mobileButton');
    const mobileNav = document.getElementById('mobileNav');
    
    mobileButton.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
    });
    
    const dropdrownx = document.querySelector('.dropdown');
    const dropdrownItems = document.querySelector('.dropdown-items');
    
    dropdrownx.addEventListener('click', () => {
        dropdrownItems.classList.toggle('hidden');
    });
    
    dropdrownItems.addEventListener('click', (e) => {
        e.classList.toggle('hidden');
    });
    

});

