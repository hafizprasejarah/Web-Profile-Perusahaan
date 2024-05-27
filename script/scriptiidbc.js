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


// timeline

const timelinebtn = document.querySelectorAll('.timeline-point-box');
let lebar = 0;
let btn = 0;
let cardselect = null;



timelinebtn.forEach(line => {
    const timeline = document.querySelector('.timeline');
    timeline.classList.add('active0');
    const card = document.querySelectorAll('.card');
    cardselect = card[0];
    cardselect.classList.add('active');



    line.addEventListener('click', () => {

        //card iterasi
        card.forEach(items => {

            if (line == timelinebtn[0]) {
                cardselect.classList.remove('active');

                cardselect = card[0];
                cardselect.classList.add('active');
  
            } else if (line == timelinebtn[1]) {
                cardselect.classList.remove('active');
                
                cardselect = card[1]
                cardselect.classList.add('active');
            } else if (line == timelinebtn[2]) {
                cardselect.classList.remove('active');
                
                cardselect = card[2]
                cardselect.classList.add('active');
            } else if (line == timelinebtn[3]) {
                cardselect.classList.remove('active');

                cardselect = card[3]
                cardselect.classList.add('active');
            }
        });

        if (line == timelinebtn[1]) {
            timeline.classList.toggle('active');
            timeline.classList.remove('active2');
            timeline.classList.remove('active3');
            if (lebar != 1) {
                timeline.classList.remove('active3');
                timeline.classList.remove('active2');
                timeline.classList.add('active');
            }
            lebar = 1;
        } else if (line == timelinebtn[2]) {
            timeline.classList.add('active');
            timeline.classList.toggle('active2');

            if (lebar != 2) {
                timeline.classList.remove('active3');
                timeline.classList.add('active2');
            }

            lebar = 2;
        } else if (line == timelinebtn[3]) {
            lebar = 3;
            timeline.classList.add('active');
            timeline.classList.add('active2');
            timeline.classList.toggle('active3');
        } else if (line == timelinebtn[0]) {
            timeline.classList.remove('active');
            timeline.classList.remove('active2');
            timeline.classList.remove('active3');
        }
        btn = line;
    });

});

