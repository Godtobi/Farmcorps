const allModals = document.querySelectorAll('.modal')

window.addEventListener('click', () => {
   allModals.forEach(modal => {
       if(event.target == modal) {
           modal.classList.remove('show')
       }
   })
})

// function openNegotiationModal() {
//     event.preventDefault()
//     negotiationModal.classList.add('show')
// }

const modalPopButtons = document.querySelectorAll('.modal-pop')
console.log(modalPopButtons)

modalPopButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault()
        modal = document.querySelector(e.target.getAttribute('href'))
        modal.classList.add('show')
    })
})