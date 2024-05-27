// form search
const searchForm = document.querySelector('.form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    if (dropdown !== 0) {
        dropdown.classList.remove('active');
        btndrpdwn.classList.remove('active');
    }

}

// navbar menu
const navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    if (dropdown !== 0) {
        dropdown.classList.remove('active');
        btndrpdwn.classList.remove('active');
    }
}


//dropdown
const dropdownItems = document.querySelectorAll('.dropdown');
let dropdown = 0;
let btndrpdwn = 0;
dropdownItems.forEach(item => {
    const dropdownButton = item.querySelector('.btn-drpdwn');
    const dropdownMenu = item.querySelector('.dropdown-menu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('active');
        dropdownButton.classList.toggle('active');
        searchForm.classList.remove('active');
        dropdownItems.forEach(otherItem => {
            const otherDropdownMenu = otherItem.querySelector('.dropdown-menu');
            const otherDropdownbtn = otherItem.querySelector('.btn-drpdwn');
            if (otherDropdownMenu !== dropdownMenu && otherDropdownbtn !== dropdownButton) {
                otherDropdownMenu.classList.remove('active');
                otherDropdownbtn.classList.remove('active');
            }
            dropdown = dropdownMenu;
            btndrpdwn = dropdownButton;
        });
    });
});

// header scroll behavior
scrolly = 0;
const header = document.querySelector('.header .header-1');

window.onscroll = () => {
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    if (dropdown !== 0) {
        dropdown.classList.remove('active');
        btndrpdwn.classList.remove('active');
    }


    if (window.scrollY > 10) {
        if (scrolly > window.scrollY) {
            header.classList.remove('active');
        } else {
            header.classList.add('active');
        }
    } else {
        header.classList.remove('active');
    }
    const dragStart = () => {
        scrolly = window.scrollY;
    }
    window.addEventListener('scroll', dragStart);

}


// timeline ke 3

let timeline3 = document.querySelector(".timeline-syarat-3");
const box3 = document.querySelectorAll(".box i");
const card3 = document.querySelectorAll(".card-content-3");

if (timeline3 != null) {
    window.addEventListener("scroll", () => {
        let scrollY3 = window.scrollY;
        const ketinggianElemen3 = (box3[0].getBoundingClientRect().top + window.scrollY);
        const ketinggianbox = (box3[10].getBoundingClientRect().bottom + window.scrollY) - 200;
        scrollPercentage3 = (scrollY3 - ketinggianElemen3) + 400;
        console.log();



        scrollPercentage3 = Math.min(ketinggianbox - ketinggianElemen3 + 150, Math.max(0, scrollPercentage3));
        timeline3.style.height = `${scrollPercentage3}px`;
        let tambahan = scrollPercentage3 - 400;

        box3.forEach(item => {


            if (scrollPercentage3 <= 0 && scrollPercentage3 <= 0) {

                box3[0].classList.remove('active');
                box3[1].classList.remove('active');
                box3[2].classList.remove('active');
                box3[3].classList.remove('active');
                box3[4].classList.remove('active');
                box3[5].classList.remove('active');
                box3[6].classList.remove('active');
                box3[7].classList.remove('active');
                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');

            }
            else if (scrollPercentage3 <= box3[1].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[0].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');

                box3[1].classList.remove('active');
                box3[2].classList.remove('active');
                box3[3].classList.remove('active');
                box3[4].classList.remove('active');
                box3[5].classList.remove('active');
                box3[6].classList.remove('active');
                box3[7].classList.remove('active');
                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');

            }
            else if (scrollPercentage3 <= box3[2].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[1].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');


                box3[2].classList.remove('active');
                box3[3].classList.remove('active');
                box3[4].classList.remove('active');
                box3[5].classList.remove('active');
                box3[6].classList.remove('active');
                box3[7].classList.remove('active');
                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');
            }
            else if (scrollPercentage3 <= box3[3].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[2].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');

                box3[3].classList.remove('active');
                box3[4].classList.remove('active');
                box3[5].classList.remove('active');
                box3[6].classList.remove('active');
                box3[7].classList.remove('active');
                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');

            }
            else if (scrollPercentage3 <= box3[4].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[3].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');
                box3[3].classList.add('active');


                box3[4].classList.remove('active');
                box3[5].classList.remove('active');
                box3[6].classList.remove('active');
                box3[7].classList.remove('active');
                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');
            }
            else if (scrollPercentage3 <= box3[5].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[4].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');
                box3[3].classList.add('active');
                box3[4].classList.add('active');


                box3[5].classList.remove('active');
                box3[6].classList.remove('active');
                box3[7].classList.remove('active');
                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');

            }
            else if (scrollPercentage3 <= box3[6].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[5].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');
                box3[3].classList.add('active');
                box3[4].classList.add('active');
                box3[5].classList.add('active');



                box3[6].classList.remove('active');
                box3[7].classList.remove('active');
                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');
            }
            else if (scrollPercentage3 <= box3[7].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[6].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');
                box3[3].classList.add('active');
                box3[4].classList.add('active');
                box3[5].classList.add('active');
                box3[6].classList.add('active');


                box3[7].classList.remove('active');
                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');
            }
            else if (scrollPercentage3 <= box3[8].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[7].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');
                box3[3].classList.add('active');
                box3[4].classList.add('active');
                box3[5].classList.add('active');
                box3[6].classList.add('active');
                box3[7].classList.add('active');


                box3[8].classList.remove('active');
                box3[9].classList.remove('active');
                box3[10].classList.remove('active');
            }
            else if (scrollPercentage3 <= box3[9].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[8].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');
                box3[3].classList.add('active');
                box3[4].classList.add('active');
                box3[5].classList.add('active');
                box3[6].classList.add('active');
                box3[7].classList.add('active');
                box3[8].classList.add('active');

                box3[9].classList.remove('active');
                box3[10].classList.remove('active');
            }
            else if (scrollPercentage3 <= box3[10].getBoundingClientRect().top + tambahan && scrollPercentage3 >= box3[9].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');
                box3[3].classList.add('active');
                box3[4].classList.add('active');
                box3[5].classList.add('active');
                box3[6].classList.add('active');
                box3[7].classList.add('active');
                box3[8].classList.add('active');
                box3[9].classList.add('active');

                box3[10].classList.remove('active');
            }
            else if (scrollPercentage3 >= box3[10].getBoundingClientRect().top + tambahan) {
                box3[0].classList.add('active');
                box3[1].classList.add('active');
                box3[2].classList.add('active');
                box3[3].classList.add('active');
                box3[4].classList.add('active');
                box3[5].classList.add('active');
                box3[6].classList.add('active');
                box3[7].classList.add('active');
                box3[8].classList.add('active');
                box3[9].classList.add('active');
                box3[10].classList.add('active');

            }



        });

        card3.forEach(item => {
            box3.forEach(bx => {
                if (box3[0].classList.contains('active')) {
                    card3[0].classList.add('active');
                } else {
                    card3[0].classList.remove('active');
                }

                if (box3[1].classList.contains('active')) {
                    card3[1].classList.add('active');
                } else {
                    card3[1].classList.remove('active');
                }

                if (box3[2].classList.contains('active')) {
                    card3[2].classList.add('active');
                } else {
                    card3[2].classList.remove('active');
                }

                if (box3[3].classList.contains('active')) {
                    card3[3].classList.add('active');
                } else {
                    card3[3].classList.remove('active');
                }

                if (box3[4].classList.contains('active')) {
                    card3[4].classList.add('active');
                } else {
                    card3[4].classList.remove('active');
                }

                if (box3[5].classList.contains('active')) {
                    card3[5].classList.add('active');
                } else {
                    card3[5].classList.remove('active');
                }

                if (box3[6].classList.contains('active')) {
                    card3[6].classList.add('active');
                } else {
                    card3[6].classList.remove('active');
                }

                if (box3[7].classList.contains('active')) {
                    card3[7].classList.add('active');
                } else {
                    card3[7].classList.remove('active');
                }

                if (box3[8].classList.contains('active')) {
                    card3[8].classList.add('active');
                } else {
                    card3[8].classList.remove('active');
                }

                if (box3[9].classList.contains('active')) {
                    card3[9].classList.add('active');
                } else {
                    card3[9].classList.remove('active');
                }

                if (box3[10].classList.contains('active')) {
                    card3[10].classList.add('active');
                } else {
                    card3[10].classList.remove('active');
                }

            });

        });


    });

}

// timeline ke 3