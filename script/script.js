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

// card slider
const carousel = document.querySelector(".carousel"),
    firstCardWidth = carousel.querySelector(".child-slider").offsetWidth;
arrowIcons = document.querySelectorAll(".wrapper-slider i");
const carouselChildrens = [...carousel.children];

let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});


let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff, prevPageY, positionDiffY;

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
    let card = firstCardWidth + 16;
    icon.addEventListener("click", () => {
        carousel.scrollLeft += icon.id == "left" ? -card : card;
    })


})


const dragStart = (e) => {
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevPageY = e.pageY || e.touches[0].pageY;
    prevScrollLeft = carousel.scrollLeft;
    carousel.classList.add("dragging");

}

const dragging = (e) => {
    if (!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    positionDiffY = (e.pageY || e.touches[0].pageY) - prevPageY;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    if (Math.abs(positionDiffY) > Math.abs(positionDiff)) {
        isDragStart = false;
        carousel.classList.remove("dragging");
        isDragging = false;

    }
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");
    if (!isDragging) return;
    isDragging = false;
}

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


// list-slider berbentuk dot

const dotsContainer = document.querySelector(".dots");
const slideItems = document.querySelectorAll('.dot');
const sliderlist = document.querySelectorAll(".dot");


const childItems = carousel.querySelectorAll('.child-slider');
let currentIndex = 0; // Indeks item yang sedang aktif

function updateActiveSlide(index) {
    updateActiveDot(index);

}

// Inisialisasi
updateActiveSlide(currentIndex);

// Event listener untuk perubahan indeks
carousel.addEventListener("scroll", () => {
    const firstVisibleIndex = Math.floor(carousel.scrollLeft / childItems[0].offsetWidth);
    currentIndex = firstVisibleIndex;
    updateActiveSlide(currentIndex);

});


function updateActiveDot(index) {
    const dots = dotsContainer.querySelectorAll(".dot");
    dots.forEach((dot, i) => {
        if (i === index) {
            dot.classList.add("active");
        } else if ((i + 4) === index) {
            dot.classList.add("active");
        } else {
            dot.classList.remove("active");
        }
    });
}



// Inisialisasi dots
slideItems.forEach((dot, i) => {
    dot.addEventListener("click", () => {
        currentIndex = i;
        updateActiveDot(currentIndex);
    });
    dotsContainer.appendChild(dot);
});


sliderlist.forEach((list, i) => {
    let beforecontent = Math.ceil(carousel.scrollLeft) / (childItems[0].offsetWidth + 16);
    let content = Math.floor(beforecontent);
    list.addEventListener("click", () => {
        if (i == 0) {
            // isi card di container
            if (content === 3) {
                if (carousel.scrollLeft > childItems[0].offsetWidth + 16 * 3) {
                    carousel.scrollLeft = (childItems[0].offsetWidth + 16) * (i + 4);
                } else {
                    carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
                }
            } else if (content === 2) {
                carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
            } else if (content === 1) {
                carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;

            }


        } else if (i == 1) {
            if (content === 3) {
                if (carousel.scrollLeft > childItems[0].offsetWidth + 16 * 3) {
                    carousel.scrollLeft = (childItems[0].offsetWidth + 16) * (i + 4);
                } else {
                    carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
                }
            } else if (content === 2) {
                carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
            } else if (content === 1) {
                carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;

            }


        } else if (i == 2) {
            if (content === 3) {
                if (carousel.scrollLeft > childItems[0].offsetWidth + 16 * 3) {
                    carousel.scrollLeft = (childItems[0].offsetWidth + 16) * (i + 4);
                } else {
                    carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
                }
            } else if (content === 2) {
                carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
            } else if (content === 1) {
                carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;

            }


        } else if (i == 3) {

            if (content === 3) {
                if (carousel.scrollLeft > childItems[0].offsetWidth + 16 * 3) {
                    carousel.scrollLeft = (childItems[0].offsetWidth + 16) * (i + 4);
                } else {
                    carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
                }
            } else if (content === 2) {
                carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
            } else if (content === 1) {
                carousel.scrollLeft = (childItems[0].offsetWidth + 16) * i;
            }

        }
    })
})



carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

carousel.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

carousel.addEventListener("mouseup", dragStop);
carousel.addEventListener("mouseleave", dragStop);
carousel.addEventListener("touchend", dragStop);

carousel.addEventListener("scroll", loop);

// end of slider

// animation on scroll of timeline
const animatedElements = document.querySelectorAll('.content');
const animatedElementscards = document.querySelectorAll('.card-section');
const animatedtitle = document.querySelectorAll('#animation-title');
const animatedtitlecontent = document.querySelectorAll('#animation-title-content');
const animatedsection3content = document.querySelectorAll('#animation-content-section3');
const animatedsection4 = document.querySelectorAll('#animation-section4');
const animatedsection5 = document.querySelectorAll('#animation-section5');


function animationtitle(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('animated');
            }, index * 400);
            observer.unobserve(entry.target);
        }
    });
}

function animationcontenttitle(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('animated');
            }, index * 400);
            observer.unobserve(entry.target);
        }
    });
}

function section3animation(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('animated');
            }, index * 200);
            observer.unobserve(entry.target);
        }
    });
}

function section4animation(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('animated');
            }, index * 200);
            observer.unobserve(entry.target);
        }
    });
}

function section5animation(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('animated');
            }, index * 200);
            observer.unobserve(entry.target);
        }
    });
}

function cardanimation(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('animationcard');
            }, index * 200);
            observer.unobserve(entry.target);
        }
    });

}

function animateOnScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animation');
        } else {
            entry.target.classList.remove('animation');
        }
    });
}
observertitle = new IntersectionObserver(animationtitle, {
    root: null,
    threshold: 0,
});

observecontenttitle = new IntersectionObserver(animationcontenttitle, {
    root: null,
    threshold: 0,
});

observersection3 = new IntersectionObserver(section3animation, {
    root: null,
    threshold: 0,
});

observersection4 = new IntersectionObserver(section4animation, {
    root: null,
    threshold: 0,
});

observersection5 = new IntersectionObserver(section5animation, {
    root: null,
    threshold: 0,
});

const observerCard = new IntersectionObserver(cardanimation, {
    root: null,
    threshold: 0,
});

const observerAnimate = new IntersectionObserver(animateOnScroll, {
    root: null,
    threshold: 0.5,
});

animatedtitle.forEach(element => {
    observertitle.observe(element);
});

animatedtitlecontent.forEach(element => {
    observecontenttitle.observe(element);
});

animatedsection3content.forEach(element => {
    observersection3.observe(element);
});

animatedsection4.forEach(element => {
    observersection4.observe(element);
});

animatedsection5.forEach(element => {
    observersection5.observe(element);
});

animatedElements.forEach(element => {
    observerAnimate.observe(element);
});

animatedElementscards.forEach(element => {
    observerCard.observe(element);
});