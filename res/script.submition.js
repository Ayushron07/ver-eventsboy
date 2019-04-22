const pubgform = document.querySelector('#pubg_signup_form');
const mode = pubgform.querySelector('#case');

let type_1_div = pubgform.querySelector('#solo');
let type_2_div = pubgform.querySelector('#duo');
let type_3_div = pubgform.querySelector('#squad');

/*const gamingModeSelector = i => {
    const allModes = [
        type_1_div.
            type_2_div,
        type_3_div
    ];
    for (i = 0; i < allModes.length; i++) {
        allModes
    }
}*/
function selectMode() {
    
    switch (mode.selectedIndex) {
        case 1:
            type_1_div.style.display = "block";
            type_2_div.style.display = "none";
            type_3_div.style.display = "none";
            break;
        case 2:
            type_1_div.style.display = "none";
            type_2_div.style.display = "block";
            type_3_div.style.display = "none";
            break;
        case 3:
            type_1_div.style.display = "none";
            type_2_div.style.display = "none";
            type_3_div.style.display = "block";
            break;
        default:
            type_1_div.style.display = "none";
            type_2_div.style.display = "none";
            type_3_div.style.display = "none";
            break;
    }
}

selectMode();

mode.addEventListener('change', selectMode);