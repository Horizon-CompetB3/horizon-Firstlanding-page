function openMenu() {
    if ($('#Calque_7').hasClass('Calque_7-open')) {
        var menu = document.getElementById("Calque_7");
        menu.classList.remove("Calque_7-open");
        document.getElementById("a-menu").classList.remove("a-menu-visible");
        document.getElementById("a-menu-2").classList.remove("a-menu-visible");
    } else {
        var menu = document.getElementById("Calque_7");
        menu.classList.add("Calque_7-open");
        document.getElementById("a-menu").classList.add("a-menu-visible");
        document.getElementById("a-menu-2").classList.add("a-menu-visible");
    }
}
;
