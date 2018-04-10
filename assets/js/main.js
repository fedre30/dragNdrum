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

function EditList(info) {
    info.ObjectID;
    info.NewObject;
    info.ObjectList;
}