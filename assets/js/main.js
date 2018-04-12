// SCROLL

const configButton = document.querySelector('.button-configuration');
const configuration = document.querySelector('.configuration');
const conceptButton = document.querySelector('.concept-button');
const concept = document.querySelector('#concept');
const configMenu = document.querySelector('.config-button');
const contactButton = document.querySelector('.contact-button');
const contact = document.querySelector('#contact');
const backTop = document.querySelector('.back-to-top');
const introduction = document.querySelector('.introduction');

function animate(time) {
    requestAnimationFrame(animate);
    TWEEN.update(time);
}

requestAnimationFrame(animate);

function tweenAnimation (section){
    const position = {y: window.scrollY};
    const tween = new TWEEN.Tween(position)
        .to({y: section.getBoundingClientRect().top})
        .easing(TWEEN.Easing.Quadratic.Out)
        .onUpdate(function () {
            console.log('coucou');
            window.scroll(window.scrollX, position.y);
        })
        .start();
}

configButton.addEventListener('click', function () {
   tweenAnimation(configuration);
});

configMenu.addEventListener('click', function () {
    tweenAnimation(configuration);
});

conceptButton.addEventListener('click', function () {
    tweenAnimation(concept);
});

contactButton.addEventListener('click', function () {
    tweenAnimation(contact);
});

backTop.addEventListener('click', function () {
    tweenAnimation(introduction);
});



// UNITY

const list = document.querySelector('.configuration-list');
const price = document.querySelector('.configuration-price');
const select = document.querySelector('select');
const hiddenInput = document.querySelector('.hidden-input');

const drumElements = {
    1: { name: 'Charleston', price: 13 },
    2: { name: 'Cymbales', price: 17 },
    3: { name: 'Tom', price: 9 },
    4: { name: 'Grosse Caisse', price: 10 },
    5: { name: 'Caisse Caisse', price: 8 },
    6: { name: 'Tom Basse', price: 10 }
};

const drumMaterials = {
    0: { name: 'Bois' },
    1: { name: 'Metal' },
    2: { name: 'Plastique' }
};

const drumColors = {
    0: { name: 'Noir' },
    1: { name: 'Gris' },
    2: { name: 'Gris clair' },
    3: { name: 'Vert' },
    4: { name: 'Rouge' },
    5: { name: 'Bleu' },
    6: { name: 'Marron' },
    7: { name: 'Sable' },
    8: { name: 'Beige' }
};

const drumBrands = {
    0: { name: 'DW' },
    1: { name: 'Pearl' },
    2: { name: 'Yamaha' }
};
const discountPolicy = [1, 0.95, 0.9, 0.85, 0.75];

let drumSet = [];

function drumSetFromUnityInfo(info) {
    drumSet = [];
    for (let idx = 0; idx < info.ObjectList.length; idx++) {
        const elementId = info.ObjectList[idx];
        if (elementId === 0) {
            continue;
        }

        const materialId = info.MaterialIDList[idx] || 0;
        const colorId = info.ColorList[idx] || 0;
        const brandId = info.LogoIDList[idx] || 0;

        drumSet.push({
            element: drumElements[elementId],
            material: drumMaterials[materialId],
            color: drumColors[colorId],
            brand: drumBrands[brandId]
        });
    }
    return drumSet;
}

function refreshPricing() {
    while (list.hasChildNodes()) {
        list.removeChild(list.lastChild);
    }

    let drumSetPrice = 0;
    drumSet.forEach(function(item) {
        const li = document.createElement("li");
        li.classList.add('configuration-item');
        li.innerText = `${item.element.name} - ${item.brand.name} - ${item.material.name} - ${item.color.name} : ${item.element.price} €`;
        list.appendChild(li);

        drumSetPrice += item.element.price;


    });
    
    const totalPrice = drumSetPrice * (parseInt(select.value) + 1);
    const discountedPrice = Math.floor(totalPrice * discountPolicy[select.value]);

    price.innerText = `${discountedPrice} €`;
    hiddenInput.value = JSON.stringify(drumSet);
}

select.addEventListener('change', function() {
    refreshPricing();
});

function EditList(info) {
    console.log(info);

    try {
        drumSet = drumSetFromUnityInfo(info);
        refreshPricing();
        document.querySelector('.rendered-image').value = info.RenderedImage;
    } catch (exception) {
        console.error(exception);
    }
}



