let allNigerianStates = ["Abia",
    "Adamawa",
    "Akwa Ibom",
    "Anambra",
    "Bauchi",
    "Bayelsa",
    "Benue",
    "Borno",
    "Cross River",
    "Delta",
    "Ebonyi",
    "Enugu",
    "Edo",
    "Ekiti",
    "Gombe",
    "Imo",
    "Jigawa",
    "Kaduna",
    "Kano",
    "Katsina",
    "Kebbi",
    "Kogi",
    "Kwara",
    "Lagos",
    "Nasarawa",
    "Niger",
    "Ogun",
    "Ondo",
    "Osun",
    "Oyo",
    "Plateau",
    "Rivers",
    "Sokoto",
    "Taraba",
    "Yobe",
    "Zamfara"]

document.addEventListener('DOMContentLoaded', function schools() {
    let listOptions = document.querySelector('select');
    let i = 0;
    let el;
    let fragment = document.createDocumentFragment();

    allNigerianStates.forEach(school => {
        el = document.createElement('option');
        el.innerText = school
        fragment.appendChild(el)
    })


    listOptions.appendChild(fragment)
})

function changeHeaderColor() {
    const header = document.querySelector("body > header")
    if (window.scrollY > 60) {
       header.classList.add('scrolled')
    } else {
       header.classList.remove('scrolled')
    }
}
