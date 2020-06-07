function openSearch(e) {
    event.preventDefault()
    const searchbar = document.querySelector('.nav-item.search form')
    searchbar.classList.toggle('show')
}