modalDefault();

function modalDefault() {

    const modal = document.querySelector('.modal');

    const body = document.querySelector('.body');
    const showModal1 = document.querySelector('.showmodal1');
    const showModal2 = document.querySelector('.showmodal2');
    const showModal3 = document.querySelector('.showmodal3');

    const clearImg = document.querySelector('.product-img');
    const clearTitle = document.querySelector('.product-title');
    const clearDesc = document.querySelector('.product-desc');

    const image1 = document.getElementById("product-img-1").src;
    const image2 = document.getElementById("product-img-2").src;
    const image3 = document.getElementById("product-img-3").src;

    const title1 = document.getElementById("product-title-1").textContent;
    const title2 = document.getElementById("product-title-2").textContent;
    const title3 = document.getElementById("product-title-3").textContent;

    const desc1 = document.getElementById("product-desc-1").textContent;
    const desc2 = document.getElementById("product-desc-2").textContent;
    const desc3 = document.getElementById("product-desc-3").textContent;

    const closeModal = document.querySelector('.close-modal');

    showModal1.addEventListener('click', function () {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        body.classList.add('modal-open');

        document.querySelector('.product-img').setAttribute("src", image1);
        document.querySelector('.product-title').textContent = title1;

        
        document.querySelector('.product-desc').textContent = desc1;
    });

    showModal2.addEventListener('click', function () {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        body.classList.add('modal-open');

        document.querySelector('.product-img').setAttribute("src", image2);
        document.querySelector('.product-title').textContent = title2;

        document.querySelector('.product-desc').textContent = desc2;
    });

    showModal3.addEventListener('click', function () {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        body.classList.add('modal-open');

        document.querySelector('.product-img').setAttribute("src", image3);
        document.querySelector('.product-title').textContent = title3;

        document.querySelector('.product-desc').textContent = desc3;

    });;

    closeModal.addEventListener('click', function () {
        modal.classList.add('hidden');
        body.classList.remove('modal-open');

        clearImg.setAttribute("src", "");
        clearTitle.textContent = "";
        clearDesc.textContent = "";
    });

}
