

function openSearch(e) {
    event.preventDefault()
    const searchbar = document.querySelector('.nav-item.search form')
    searchbar.classList.toggle('show')
}

function toggleDashMenu(e) {
    event.preventDefault()
    const dashmenu = document.querySelector('.dash-menu')
    console.log(dashmenu)
    dashmenu.classList.toggle('show')
}
