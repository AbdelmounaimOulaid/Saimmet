
const checkout = document.getElementById('checkout');
const popup = document.getElementById('popup');
const popupContent = document.getElementById('popup-content');
const popupElements = document.getElementById('popup-elements');

const smsInputs = document.getElementsByName('sms-confirm')

let isPopupActive = false;

const togglePopup = (active = null) => {
    if(active === null) {
        isPopupActive = !isPopupActive;
        popup.style.display = isPopupActive ? 'flex' : 'none';
        return;
    }

    popup.style.display = !!active ? 'flex' : 'none';
    isPopupActive = !!active;
}

const togglePopupWith = (id, elements = ['checkout-confirm', 'approve-by-sms', 'approve-by-call']) => {
    const el = document.getElementById(id);

    // popupElements.innerHTML = '';
    elements.forEach(i => {
        popupElements.append(document.getElementById(i))
    })

    if(!el) {
        console.log(el);
        console.log('element not found');
        return false;
    }
    popupContent.innerHTML = '';
    popupContent.append(el);
    togglePopup(true);
}


popup.addEventListener('click', e => {
    if(e.target === e.currentTarget) {
        togglePopup(false);
    }

})


// smsInputs.forEach(el => {
//     el.addEventListener('input', e => {
//         if(e.target.value.length >= 1 && !!el.nextElementSibling) {
//             el.nextElementSibling.focus();
//         }
//         if (e.target.value > 1) {
//             e.target.value = e.target.value[0]
//         }
//     })
//     console.log();
// })

