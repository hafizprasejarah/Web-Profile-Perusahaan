// script untuk file iidbc 
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
const carousel = document.querySelector(".carousel");
if (carousel != null) {
    const firstCardWidth = carousel.querySelector(".card").offsetWidth;
    arrowIcons = document.querySelectorAll(".container-slide i");
    const carouselChildrens = [...carousel.children];

    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

    carouselChildrens.slice(0, cardPerView).forEach(card => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });



    arrowIcons.forEach(icon => {
        document.addEventListener("keydown", (e) => {
            if (e.key === "ArrowLeft") {
                carousel.scrollLeft -= card;
            } else if (e.key === "ArrowRight") {
                carousel.scrollLeft += card;
            } else {
                carousel.scrollLeft = carousel.scrollLeft;
            }
        });

        let card = firstCardWidth + 14;
        icon.addEventListener("click", () => {
            carousel.scrollLeft += icon.id == "left" ? -card : card;
        });



    });

    const loop = () => {
        if (carousel.scrollLeft === 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
            carousel.classList.remove("no-transition");



        } else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }


    }
    carousel.addEventListener("scroll", loop);

    const timeline = document.querySelector(".timeline-syarat");
    const box = document.querySelectorAll(".box i");
    const card = document.querySelectorAll(".card-content");
    window.addEventListener("scroll", () => {
        let scrollY = window.scrollY;
        const ketinggianElemen = (timeline.getBoundingClientRect().top + window.scrollY) - (window.innerHeight - 100);
        const tinggiElemen = timeline.offsetHeight;

        // Menghitung persentase scroll


        scrollPercentage = Math.ceil((scrollY - ketinggianElemen) / 9);
        scrollPercentage = Math.min(85, Math.max(0, scrollPercentage));

        timeline.style.height = `${scrollPercentage}%`;
        const circleposition = scrollPercentage / 9;
        box.forEach(item => {

            if (circleposition <= 0.2 && circleposition >= 0) {
                box[0].classList.remove('active');
                box[1].classList.remove('active');
                box[2].classList.remove('active');
                box[3].classList.remove('active');
                box[4].classList.remove('active');
                box[5].classList.remove('active');
                box[6].classList.remove('active');
                box[7].classList.remove('active');
                box[8].classList.remove('active');
            }
            else if (circleposition <= 1.1 && circleposition >= 0.2) {
                box[0].classList.add('active');

                box[1].classList.remove('active');
                box[2].classList.remove('active');
                box[3].classList.remove('active');
                box[4].classList.remove('active');
                box[5].classList.remove('active');
                box[6].classList.remove('active');
                box[7].classList.remove('active');
                box[8].classList.remove('active');
            }
            else if (circleposition <= 2.3 && circleposition >= 1.1) {
                box[0].classList.add('active');
                box[1].classList.add('active');


                box[2].classList.remove('active');
                box[3].classList.remove('active');
                box[4].classList.remove('active');
                box[5].classList.remove('active');
                box[6].classList.remove('active');
                box[7].classList.remove('active');
                box[8].classList.remove('active');
            }
            else if (circleposition <= 3.5 && circleposition >= 2.3) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');

                box[3].classList.remove('active');
                box[4].classList.remove('active');
                box[5].classList.remove('active');
                box[6].classList.remove('active');
                box[7].classList.remove('active');
                box[8].classList.remove('active');
            }
            else if (circleposition <= 4.8 && circleposition >= 3.5) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');
                box[3].classList.add('active');

                box[4].classList.remove('active');
                box[5].classList.remove('active');
                box[6].classList.remove('active');
                box[7].classList.remove('active');
                box[8].classList.remove('active');
            }
            else if (circleposition <= 6.1 && circleposition >= 4.8) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');
                box[3].classList.add('active');
                box[4].classList.add('active');

                box[5].classList.remove('active');
                box[6].classList.remove('active');
                box[7].classList.remove('active');
                box[8].classList.remove('active');
            }
            else if (circleposition <= 7.1 && circleposition >= 6.1) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');
                box[3].classList.add('active');
                box[4].classList.add('active');
                box[5].classList.add('active');

                box[6].classList.remove('active');
                box[7].classList.remove('active');
                box[8].classList.remove('active');
            }
            else if (circleposition <= 8.2 && circleposition >= 7.1) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');
                box[3].classList.add('active');
                box[4].classList.add('active');
                box[5].classList.add('active');
                box[6].classList.add('active');

                box[7].classList.remove('active');
                box[8].classList.remove('active');

            }
            else if (circleposition <= 9.3 && circleposition >= 8.2) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');
                box[3].classList.add('active');
                box[4].classList.add('active');
                box[5].classList.add('active');
                box[6].classList.add('active');
                box[7].classList.add('active');


                box[8].classList.remove('active');

            }
            else if (circleposition <= 10 && circleposition >= 9.3) {
                box[0].classList.add('active');
                box[1].classList.add('active');
                box[2].classList.add('active');
                box[3].classList.add('active');
                box[4].classList.add('active');
                box[5].classList.add('active');
                box[6].classList.add('active');
                box[7].classList.add('active');
                box[8].classList.add('active');
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

                if (box[4].classList.contains('active')) {
                    card[4].classList.add('active');
                } else {
                    card[4].classList.remove('active');
                }

                if (box[5].classList.contains('active')) {
                    card[5].classList.add('active');
                } else {
                    card[5].classList.remove('active');
                }

                if (box[6].classList.contains('active')) {
                    card[6].classList.add('active');
                } else {
                    card[6].classList.remove('active');
                }

                if (box[7].classList.contains('active')) {
                    card[7].classList.add('active');
                } else {
                    card[7].classList.remove('active');
                }

                if (box[8].classList.contains('active')) {
                    card[8].classList.add('active');
                } else {
                    card[8].classList.remove('active');
                }
            });

        });


    });


}
