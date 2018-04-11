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


function EditList(info) {
    console.log(info);
    info.ObjectID;
    info.NewObject;
    info.ObjectList;
    info.ObjectPosition;

    for (var i = 0; i < listItem.length; i++) {

        listItem[i].innerText = info.ObjectList;

    }
}



