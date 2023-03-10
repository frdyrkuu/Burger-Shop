$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "./include/get_image.php",
        success: function (response) {
            var jsonData = JSON.parse(response);


            let htmlCodeBurger = "";
            let htmlCodeFries = "";
            let htmlCodeDrinks = "";
            let htmlCodeIceCream = "";
            let htmlCodeBarbeque = "";
       
            for (let i = 0; i < jsonData.length; i++) {
                const product = jsonData[i];

                        
                if (product.category == "burger") {
                    htmlCodeBurger += `
                    <div class="h-1/4 sm:w-1/4 sm:h-1/4 justify-center items-center bg-white py-6 rounded-3xl shadow-2xl mx-4 my-5">
                    <img src="upload/${product.img}" alt="${product.title}">
                    <h2 class="text-center text-orange-500 font-bold text-2xl">${product.title}</h2>
                    <p class="text-center mx-2">${product.description}</p>
                    </div>
                `;
                    const burgerDiv = document.getElementById("burger");
                    burgerDiv.innerHTML = htmlCodeBurger;
                }
                else if (product.category == "fries") {
                    htmlCodeFries += `
                    <div class="h-1/4 sm:w-1/4 sm:h-1/4 justify-center items-center bg-white py-6 rounded-3xl shadow-2xl mx-5 my-5">
                    <img src="upload/${product.img}" alt="${product.title}">
                    <h2 class="text-center text-orange-500 font-bold text-2xl">${product.title}</h2>
                    <p class="text-center mx-2">${product.description}</p>
                    </div>
                `;
                    const friesDiv = document.getElementById("fries");
                    friesDiv.innerHTML = htmlCodeFries;
                }
                else if (product.category == "drinks") {
                    htmlCodeDrinks += `
                    <div class="h-1/4 sm:w-1/4 sm:h-1/4 justify-center items-center bg-white py-6 rounded-3xl shadow-2xl mx-5 my-5">
                    <img src="upload/${product.img}" alt="${product.title}">
                    <h2 class="text-center text-orange-500 font-bold text-2xl">${product.title}</h2>
                    <p class="text-center mx-2">${product.description}</p>
                    </div>
                `;
                    const drinksDiv = document.getElementById("drinks");
                    drinksDiv.innerHTML = htmlCodeDrinks;
                }
                else if (product.category == "icecream") {
                    htmlCodeIceCream += `
                    <div class="h-1/4 sm:w-1/4 sm:h-1/4 justify-center items-center bg-white py-6 rounded-3xl shadow-2xl mx-5 my-5">
                    <img src="upload/${product.img}" alt="${product.title}">
                    <h2 class="text-center text-orange-500 font-bold text-2xl">${product.title}</h2>
                    <p class="text-center mx-2">${product.description}</p>
                    </div>
                `;
                    const icecreamDiv = document.getElementById("icecream");
                    icecreamDiv.innerHTML = htmlCodeIceCream;
                }
                else if (product.category == "barbeque") {
                    htmlCodeBarbeque += `
                    <div class="h-1/4 sm:w-1/4 sm:h-1/4 justify-center items-center bg-white py-6 rounded-3xl shadow-2xl mx-5 my-5">
                    <img src="upload/${product.img}" alt="${product.title}">
                    <h2 class="text-center text-orange-500 font-bold text-2xl">${product.title}</h2>
                    <p class="text-center mx-2">${product.description}</p>
                    </div>
                `;
                    const barbequeDiv = document.getElementById("barbeque");
                    barbequeDiv.innerHTML = htmlCodeBarbeque;
                }
            }
        }
    });
});