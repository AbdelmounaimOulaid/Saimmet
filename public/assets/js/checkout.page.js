
const checkout = document.getElementById('checkout');
const popup = document.getElementById('popup');
const popupContent = document.getElementById('popup-content');

let isPopupActive = false;

const togglePopup = (active = null) => {
    if(active === null) {
        isPopupActive = !isPopupActive;
        popup.style.display = isPopupActive ? 'flex' : 'none';
        return;
    }

    popup.style.display = !!active ? 'flex' : 'none';
}

const togglePopupWith = (id) => {
    const el = document.getElementById(id);
    if(!el) return false;
    popupContent.innerHTML = '';
    popupContent.append(el);
    togglePopup(true);
}


popup.addEventListener('click', e => {
    if(e.target === e.currentTarget) {
        togglePopup(false);
    }

})


