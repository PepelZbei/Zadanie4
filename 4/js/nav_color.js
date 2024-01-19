const url = window.location.href;
const [...parts] = url.split('/');
const fileName = parts.pop();
const [...segments] = fileName.split('.');

const links = document.querySelectorAll("a");

links.forEach(link => {
    if (link.getAttribute("href") === fileName) {
        link.style.color = "#ffb6c1";
    }
});