const elementclose = document.getElementsByClassName('animasi');

for (let i = 0; i < elementclose.length; i++) {
    elementclose[i].addEventListener('click', function () {
        let url = window.location.href.substring(0, window.location.href.indexOf('#'))
        window.location = url;
    });
}