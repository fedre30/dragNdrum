// SCROLL

const configButton = document.querySelector('.button-configuration');
const configuration = document.querySelector('.configuration');

function animate(time) {
    requestAnimationFrame(animate);
    TWEEN.update(time);
}

requestAnimationFrame(animate);

configButton.addEventListener('click', function () {
    const position = {y: window.scrollY};
    const tween = new TWEEN.Tween(position)
        .to({y: configuration.getBoundingClientRect().top})
        .easing(TWEEN.Easing.Quadratic.Out)
        .onUpdate(function () {
            console.log('coucou');
            window.scroll(window.scrollX, position.y);
        })
        .start();
});


// UNITY

const listItem = document.querySelectorAll('.configuration-item');
const price = document.querySelector('.configuration-price');
const select = document.querySelector('select');


function EditList(info) {
    console.log(info);
    info.ObjectID;
    info.NewObject;
    info.ObjectList;
    info.ObjectPosition;

    for (let i = 0; i < listItem.length; i++) {

        listItem[i].innerText = info.ObjectList;
        if(info.ObjectID > 0){
            info.ObjectID.push(info.ObjectList);
        }
        
        price.innerText = (info.ObjectList.length) * 10 + ',00 €';
        var priceText = (info.ObjectList.length) * 10;

        select.addEventListener('change', function () {
            if(select.value == 0){
                price.innerText = (info.ObjectList.length) * 10 + ',00 €';
            }

            if(select.value == 1){
                price.innerText = priceText * 1.5 + ',00 €';
            }

            if(select.value == 2){
                price.innerText = priceText * 2.5 + ',00 €';


            }

            if(select.value == 3){
                price.innerText = priceText * 3 + ',00 €';


            }

            if(select.value == 4){
                price.innerText = priceText * 3.5 + ',00 €';


            }
        })


    }

}



