function burgerOpenClose() {
    const nav = document.getElementById('navigation')
    if (nav.style.visibility == 'visible') {
        nav.style.visibility = 'hidden';
        nav.style.opacity = '0';
    }else {
        nav.style.visibility = 'visible';
        nav.style.opacity = '1';
    }
}