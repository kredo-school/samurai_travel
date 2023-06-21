$(document).on('click', '[id^="remove_button_"]', function() {
    const id: string = $(this).attr('id') || '';
    const key: string = id.split('_')[2];
    const cardElement: JQuery<HTMLElement> = $(`#place_${key}`);

    let arrivalTime: string | undefined;
    if (cardElement.length > 0) {
        arrivalTime = cardElement.attr('data-arrival-time');
    }

    const newContent: string = `
        <div class="card-body row">
            <div class="col-10">
                <div> <i class="fa-regular fa-clock"></i> ${arrivalTime}</div>
                <div class="h5">Please add Place</div>
            </div>
            <div class="col-2 d-flex align-items-center">
                <button name='add_button' id='add_button_${key}' type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#add_place_modal">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
    `;
    cardElement.empty().append(newContent);
});


$(document).on('click', '[id^="add_button_"]', function() {
    const buttonId: string = $(this).attr('id') || '';
    const key: string = buttonId.split('_')[2];
    const id: string = 'place_' + key;

    sessionStorage.setItem('add_target_place_id', id);
});


$(document).on('click', '[id="add_place_button"]', function() {

    const id = sessionStorage.getItem('add_target_place_id');
    let key: string = '';
    if (id !== null) {
        key = id.split('_')[1];
    }

    const cardElement: JQuery<HTMLElement> = $(`#${id}`);
    let arrivalTime: string | undefined;
    if (cardElement.length > 0) {
        arrivalTime = cardElement.attr('data-arrival-time');
    }

    const selectedPlaceElements = document.getElementsByClassName('selected-place');

    let placeId: string | null = null;
    let placeNameEn: string | null = null;
    let imgSrc: string | null = null;
    let imgAlt: string | null = null;
    if (selectedPlaceElements.length > 0) {
        const selectedPlaceElement = selectedPlaceElements[0];

        const imgElements = selectedPlaceElement.getElementsByTagName('img');
        const pElements = selectedPlaceElement.getElementsByTagName('p');
    
        if (imgElements.length > 0) {
            const imgElement = imgElements[0];
            imgSrc = imgElement.getAttribute('src');
            imgAlt = imgElement.getAttribute('alt');
        }

        if (pElements.length > 0) {
            const pElement = pElements[0];
            placeId = pElement.getAttribute('data-place-id');
            placeNameEn = pElement.textContent;
        }
    }

    const newContent: string = `
        <div class="card-body row">
            <div class="col-10">
                <div><i class="fa-regular fa-clock"></i> ${arrivalTime}</div>
                <div class="h5">${placeNameEn}</div>
                <input type="hidden" name="${key}" value="${placeId}">
                <div>
                    <img src="${imgSrc}" class="img-sm" alt="${imgAlt}">
                </div>
            </div>
            <div class="col-2 d-flex align-items-center">
                <button name='remove_button' id='remove_button_${key}' type="button" class="border-0 bg-white">
                    <i class="fa-sharp fa-solid fa-trash-can"></i>
                </button>
            </div>
        </div>
    `;
    cardElement.empty().append(newContent);
});

/* Click Add Place */
const placeList = document.querySelectorAll(".add-place") as NodeListOf<HTMLElement>;
let selectedElement: HTMLElement | null = null;

function clickAddPlace(placeList: HTMLElement) {
    const addPlaceButton = document.getElementById("add_place_button") as HTMLButtonElement;
    addPlaceButton.disabled = false;

    if (selectedElement) {
        selectedElement.style.border = "";
        selectedElement.style.backgroundColor = "";
        selectedElement.classList.remove("selected-place");
    }

    placeList.style.border = "2px solid #C0C0C0";
    placeList.style.backgroundColor = "#F3F3F3";
    placeList.classList.add("selected-place");
    selectedElement = placeList;
}

placeList.forEach((placeList) => {
    placeList.addEventListener("click", () => {
        clickAddPlace(placeList);
    });
});

$(document).on('click', '[id="reload-places"]', function() {
    
    const csrfToken = (window as any).csrfToken;
    fetch('/suggest-plans/edit/ajax/reload-other-places', {
        method: 'POST',
        headers: {
            'Content-Type' : 'application/json',
            'X-CSRF-Token': csrfToken,
        },
    })
    .then(response => response.json())
    .then(data => {
        let otherPlaceHtml: string = '';
        let addPlaceHtml: string = '';
        data['data'].forEach(((place: { [key: string]: string }, index: number) => {
            if (index === 0 || (index + 1) % 4 === 0) {
                otherPlaceHtml += '<div class="row mb-3">'
                addPlaceHtml +=  '<div class="row mb-3">'
            }

            otherPlaceHtml += `<div class="col-4" id="other_place_${index}">
            <div>
                <img src="${data['asset_path']}/${place['image']}" class="img-sm" alt="${data['asset_path']}/${place['image']}">
            </div>
                <p data-place-id="${place['id']}">${place['name_en']}</p>
            </div>`
            if ((index + 1) % 3 === 0) {
                otherPlaceHtml += `</div>`;
            }

            addPlaceHtml += `<div class="col-4 add-place d-flex flex-column" id="add_place_${index}">
            <div class="mx-auto">
                <img src="${data['asset_path']}/${place['image']}" class="img-sm" alt="${data['asset_path']}/${place['image']}">
            </div>
                <p class="mt-auto" data-place-id="${place['id']}">${place['name_en']}</p>
            </div>`

            if ((index + 1) % 3 === 0) {
                otherPlaceHtml += `</div>`;
                addPlaceHtml += `</div>`;
            }
        });

        const otherPlaceElement: JQuery<HTMLElement> = $('#other_place_list');
        otherPlaceElement.empty().append(otherPlaceHtml);

        const addPlaceElement: JQuery<HTMLElement> = $('#add_place_list');
        addPlaceElement.empty().append(addPlaceHtml);

        const placeList = document.querySelectorAll(".add-place") as NodeListOf<HTMLElement>;
        let selectedElement: HTMLElement | null = null;

        function clickAddPlace(placeList: HTMLElement) {
            const addPlaceButton = document.getElementById("add_place_button") as HTMLButtonElement;
            addPlaceButton.disabled = false;
        
            if (selectedElement) {
                selectedElement.style.border = "";
                selectedElement.style.backgroundColor = "";
                selectedElement.classList.remove("selected-place");
            }
        
            placeList.style.border = "2px solid #C0C0C0";
            placeList.style.backgroundColor = "#F3F3F3";
            placeList.classList.add("selected-place");
            selectedElement = placeList;
        }
        
        placeList.forEach((placeList) => {
            placeList.addEventListener("click", () => {
                clickAddPlace(placeList);
            });
        });
    })
    .catch(error => {
        console.error('Error', error);
    });
});