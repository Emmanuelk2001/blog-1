
// -------------------ouverture sous menu en direction du Dashbord and Logout------------------------------

let menu_user = document.getElementById("menu-user");

function open_menu() {
    menu_user.classList.toggle("open-menu");
}


// -------------------ouverture et fermeture du menu responsive------------------------------

let new_menu = document.getElementById("new_menu");
function open_newMenu() {
    new_menu.style.right = "0";
}

function close_newMenu() {
    new_menu.style.right = "100%";
}


// -----------------------------------Dashbord navigation menu---------------------------------------------



let click_addPost = document.getElementById("click_addPost");
let click_managePost = document.getElementById("click_managePost");
let add_post = document.getElementById("add-post");
let manage_post = document.getElementById("manage-post");



click_addPost.onclick = function () {
    click_managePost.style.background = "#cb5144";

    var link_selecteds = document.querySelectorAll(".active-link");
    for (link_selected of link_selecteds) {
        link_selected.classList.remove("active-link");
    }

    add_post.classList.add("active-link");
    click_addPost.style.background = "rgba(0, 32, 69, 0.7)";
}

click_managePost.onclick = function () {
    click_addPost.style.background = "#cb5144";

    var link_selecteds = document.querySelectorAll(".active-link");
    for (link_selected of link_selecteds) {
        link_selected.classList.remove("active-link");
    }

    manage_post.classList.add("active-link");
    click_managePost.style.background = "rgba(0, 32, 69, 0.7)";
}

