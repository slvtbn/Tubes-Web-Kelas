const lightBoxBg = document.createElement('div');
lightBoxBg.id = "lightBoxBg";
document.body.appendChild(lightBoxBg);

const images = document.querySelectorAll('.gambar');
images.forEach(image => {
    image.addEventListener('click', e => {
        lightBoxBg.classList.add('active');
        const lightBoxImage = document.createElement('img');
        lightBoxImage.src = image.src;
        lightBoxImage.id = "lightBoxImage";
        while (lightBoxBg.firstChild) {
            lightBoxBg.removeChild(lightBoxBg.firstChild);
        }
        lightBoxBg.appendChild(lightBoxImage);
    })
})

lightBoxBg.addEventListener('click', e => {
    lightBoxBg.classList.remove('active');
})