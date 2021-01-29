const nilaiAktif = document.querySelector(".stop");
if (nilaiAktif != null) {
    function scrollWin() {
        var selected = document.querySelector(".stop");
        var el = document.querySelector(".menu");
        const scrollable = selected.offsetTop;
        const datascroll = scrollable - 74;
        const hasilscroll = datascroll - 74 * (2 + 1);
        const total = hasilscroll + 50;
        console.log(total);
        el.scrollTo(0, total);
    }
    scrollWin();
}

const menu = document.querySelectorAll("h2 a");
const submenu = document.querySelectorAll("div.collapse");
menu.forEach(function(el) {
    //el.removeAttribute("href");
    el.addEventListener("click", function(e) {
        //console.log(e.target);
        //console.log(el.parentElement.parentElement.nextElementSibling);

        const selectedAtribute = el.parentElement.parentElement.nextElementSibling.getAttribute('id');

        if (!sessionStorage.getItem("id_menu")) {
            // Store
            sessionStorage.setItem("id_menu", selectedAtribute);
        } else {
            // Retrieve
            const idmenu = sessionStorage.getItem("id_menu");
            if (idmenu == selectedAtribute) {
                el.parentElement.parentElement.nextElementSibling.classList.toggle('show');
                el.parentElement.parentElement.nextElementSibling.classList.toggle('menu');
                console.log(el.parentElement.parentElement.nextElementSibling);
                e.preventDefault();
            } else {
                // Store
                sessionStorage.setItem("id_menu", selectedAtribute);
                submenu.forEach(function(list) {
                    if (list.classList.contains('show')) {
                        list.classList.remove('show');
                    }
                    if (list.classList.contains('menu')) {
                        list.classList.remove('menu');
                    }
                });
                el.parentElement.parentElement.nextElementSibling.classList.toggle('show');
                el.parentElement.parentElement.nextElementSibling.classList.toggle('menu');
                console.log(el.parentElement.parentElement.nextElementSibling);
                e.preventDefault();
            }
        }
    });

});

// const menu = document.querySelectorAll("h2 a");
// const submenu = document.querySelectorAll("div.collapse");
// menu.forEach(function(el) {
//     //el.removeAttribute("href");
//     el.addEventListener("click", function(e) {
//         //console.log(e.target);
//         //console.log(el.parentElement.parentElement.nextElementSibling);
//         submenu.forEach(function(list) {
//             if (list.classList.contains('show')) {
//                 list.classList.remove('show');
//             }
//             list.classList.add('menu');
//         });
//         el.parentElement.parentElement.nextElementSibling.classList.toggle('show');
//         e.preventDefault();
//     });
// });

// const menuUtama = document.querySelector('div.collapse.show');
// if (menuUtama != null) {
//     const selectedMenu = '#' + menuUtama.getAttribute('id');
//     const linkMenuUtama = document.querySelectorAll('a.btn.btn-light.btn-block.text-left.p-3.rounded-0');
//     for (let i = 0; i < linkMenuUtama.length; i++) {
//         if (linkMenuUtama[i].getAttribute('data-target') == selectedMenu) {
//             linkMenuUtama[i].onclick = function() {
//                 menuUtama.classList.toggle('show');
//                 linkMenuUtama[i].removeAttribute('href');
//             };
//         }
//     }
// }