document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('nav-icon1').addEventListener('click', function () {
        if (this.classList.contains('open')) {
            this.classList.remove('open')
            document.querySelector('.mobile-nav').classList.remove('show')
            // document.querySelector('.nav div.container .auth').classList.toggle('show')
            // document.querySelector('.nav div.container .nav-links').classList.toggle('show')
        }
        else {
            this.classList.add('open')
            document.querySelector('.mobile-nav').classList.add('show')
        }
    })
});