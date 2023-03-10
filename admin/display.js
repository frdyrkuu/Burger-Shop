$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "get_image.php",
        success: function (response) {
            var jsonData = JSON.parse(response);

            let htmlTable = "";

            for (let i = 0; i < jsonData.length; i++) {
                const product = jsonData[i];


                console.log(product.img);

                htmlTable += `
                <tr>
                     <td class="px-6 py-4 whitespace-nowrap">
                         <div class="text-sm font-medium text-gray-900">
                         ${product.title}
                         </div>
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                         <div class="text-sm text-gray-500">
                         ${product.description}
                         </div>
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                         <div class="text-sm text-gray-500">
                         ${product.category}
                         </div>
                     </td>
                     <td class="px-6 py-4 whitespace-nowrap">
                         <div class="flex-shrink-0 h-10 w-10">
                         <img src="../upload/${product.img}" alt="${product.title}">
                         </div>
                     </td>
                 </tr>
                `;

                const tableDiv = document.getElementById("table");
                tableDiv.innerHTML = htmlTable;
            }
        }
    });
});