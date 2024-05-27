let timeline = document.querySelector(".timeline-syarat");
const box = document.querySelectorAll(".box .num");
const card = document.querySelectorAll(".card-content");
if (timeline != null) {
    window.addEventListener("scroll", () => {
        let scrollY = window.scrollY;
        let sembilan = 9;
        const ketinggianElemen = (timeline.getBoundingClientRect().top + window.scrollY) - 100;

        // Menghitung persentase scroll
        scrollPercentage = Math.ceil((scrollY - ketinggianElemen) / 2);
        scrollPercentage = Math.min(70, Math.max(0, scrollPercentage));
        const circleposition = scrollPercentage / sembilan;

        timeline.style.height = `${scrollPercentage}%`;

        box.forEach(item => {
            if (circleposition <= 1 && circleposition >= 0) {

                box[0].classList.remove('active');
                box[1].classList.remove('active');
                box[2].classList.remove('active');
                box[3].classList.remove('active');

            }
            else if (circleposition <= 2.1 && circleposition >= 1) {
                box[0].classList.add('active');

                box[1].classList.remove('active');
                box[2].classList.remove('active');
                box[3].classList.remove('active');

            }
            else if (circleposition <= 5.5 && circleposition >= 2.1) {
                box[0].classList.add('active');
                box[1].classList.add('active');


                box[2].classList.remove('active');
                box[3].classList.remove('active');
            }
            else if (circleposition <= 7.6 && circleposition >= 5.5) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');

                box[3].classList.remove('active');

            }
            else if (circleposition <= 8.5 && circleposition >= 7.6) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');
                box[3].classList.add('active');
            }


        });

        card.forEach(item => {
            box.forEach(bx => {
                if (box[0].classList.contains('active')) {
                    card[0].classList.add('active');
                } else {
                    card[0].classList.remove('active');
                }

                if (box[1].classList.contains('active')) {
                    card[1].classList.add('active');
                } else {
                    card[1].classList.remove('active');
                }

                if (box[2].classList.contains('active')) {
                    card[2].classList.add('active');
                } else {
                    card[2].classList.remove('active');
                }

                if (box[3].classList.contains('active')) {
                    card[3].classList.add('active');
                } else {
                    card[3].classList.remove('active');
                }
            });

        });


    });

}


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


let timeline2 = document.querySelector(".timeline-syarat-2");
const box2 = document.querySelectorAll(".box i");
const card2 = document.querySelectorAll(".card-content-2");

if (timeline2 != null) {
    window.addEventListener("scroll", () => {
        let scrollY2 = window.scrollY;
        let sembilan = 9;
        const ketinggianElemen2 = (timeline2.getBoundingClientRect().top + window.scrollY) - 100;

        // Menghitung persentase scroll

        if (window.innerWidth < 450) {
            scrollPercentage2 = Math.ceil((scrollY2 - ketinggianElemen2) / 1);
        } else {
            scrollPercentage2 = Math.ceil((scrollY2 - ketinggianElemen2) / 2);
            
        }
        scrollPercentage2 = Math.min(76, Math.max(0, scrollPercentage2));
        const circleposition2 = scrollPercentage2 / 4;
        timeline2.style.height = `${scrollPercentage2}%`;


        box2.forEach(item => {
            if (circleposition2 <= 0.1 && circleposition2 >= 0) {

                box2[0].classList.remove('active');
                box2[1].classList.remove('active');
                box2[2].classList.remove('active');
                box2[3].classList.remove('active');

            }
            else if (circleposition2 <= 5.75 && circleposition2 >= 0.1) {
                box2[0].classList.add('active');

                box2[1].classList.remove('active');
                box2[2].classList.remove('active');
                box2[3].classList.remove('active');

            }
            else if (circleposition2 <= 12.75 && circleposition2 >= 5.75) {
                box2[0].classList.add('active');
                box2[1].classList.add('active');


                box2[2].classList.remove('active');
                box2[3].classList.remove('active');
            }
            else if (circleposition2 <= 18.25 && circleposition2 >= 12.75) {
                box2[0].classList.add('active');
                box2[1].classList.add('active');
                box2[2].classList.add('active');

                box2[3].classList.remove('active');

            }
            else if (circleposition2 <= 19 && circleposition2 >= 18.25) {
                box2[0].classList.add('active');
                box2[1].classList.add('active');
                box2[2].classList.add('active');
                box2[3].classList.add('active');
            }


        });

        card2.forEach(item => {
            box2.forEach(bx => {
                if (box2[0].classList.contains('active')) {
                    card2[0].classList.add('active');
                } else {
                    card2[0].classList.remove('active');
                }

                if (box2[1].classList.contains('active')) {
                    card2[1].classList.add('active');
                } else {
                    card2[1].classList.remove('active');
                }

                if (box2[2].classList.contains('active')) {
                    card2[2].classList.add('active');
                } else {
                    card2[2].classList.remove('active');
                }

                if (box2[3].classList.contains('active')) {
                    card2[3].classList.add('active');
                } else {
                    card2[3].classList.remove('active');
                }
            });

        });


    });

}


// timeline ke 3

let timeline3 = document.querySelector(".timeline-syarat-3");
const box3 = document.querySelectorAll(".box i");
const card3 = document.querySelectorAll(".card-content-3");

if (timeline3 != null) {
    window.addEventListener("scroll", () => {
        let scrollY3 = window.scrollY;
        const ketinggianElemen3 = (timeline3.getBoundingClientRect().top + window.scrollY) - 100;

        // Menghitung persentase scroll
        if (window.innerWidth < 450) {
            scrollPercentage3 = Math.ceil((scrollY3 - ketinggianElemen3) / 4);
        } else {
            scrollPercentage3 = Math.ceil((scrollY3 - ketinggianElemen3) / 12);
            
        }
        scrollPercentage3 = Math.min(85, Math.max(0, scrollPercentage3));
        const circleposition3 = scrollPercentage3 / 12;
        timeline3.style.height = `${scrollPercentage3}%`;

        box3.forEach(item => {
            if (circleposition3 <= 0 && circleposition3 <= 0) {

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
                box3[11].classList.remove('active');

            }
            else if (circleposition3 <= .59 && circleposition3 >= 0) {
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
                box3[11].classList.remove('active');

            }
            else if (circleposition3 <= 1.084 && circleposition3 >= .59) {
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
                box3[11].classList.remove('active');
            }
            else if (circleposition3 <= 1.67 && circleposition3 >= 1.084) {
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
                box3[11].classList.remove('active');

            }
            else if (circleposition3 <= 2.34 && circleposition3 >= 1.67) {
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
                box3[11].classList.remove('active');
            }
            else if (circleposition3 <= 3.08 && circleposition3 >= 2.34) {
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
                box3[11].classList.remove('active');

            }
            else if (circleposition3 <= 3.67 && circleposition3 >= 3.08) {
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
                box3[11].classList.remove('active');
            }
            else if (circleposition3 <= 4.4 && circleposition3 >= 3.67) {
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
                box3[11].classList.remove('active');
            }
            else if (circleposition3 <= 5.1 && circleposition3 >= 4.4) {
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
                box3[11].classList.remove('active');
            }
            else if (circleposition3 <= 5.76 && circleposition3 >= 5.1) {
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
                box3[11].classList.remove('active');
            }
            else if (circleposition3 <= 6.42 && circleposition3 >= 5.76) {
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
                box3[11].classList.remove('active');
            }
            else if (circleposition3 <= 7 && circleposition3 >= 6.42) {
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

                box3[11].classList.remove('active');

            }
            else if (circleposition3 <= 8 && circleposition3 >= 7) {
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
                box3[11].classList.add('active');
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

                if (box3[11].classList.contains('active')) {
                    card3[11].classList.add('active');
                } else {
                    card3[11].classList.remove('active');
                }
            });

        });


    });

}

// timeline ke 3