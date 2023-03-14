$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "get_image.php",
        success: function (response) {
            var jsonData = JSON.parse(response);

            let htmlTable = "";
            let htmlID = "";

            for (let i = 0; i < jsonData.length; i++) {
                const product = jsonData[i];

                htmlTable += `
                <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-orange-500">
                        ${product.title}
                    </div>
                </td>
                <td class="px-6 py-4">
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
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-500">
                         ${product.id}
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="editpage.php" id="edit-btn" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
                
            </tr>
            
            `;

                const tableDiv = document.getElementById("table");
                tableDiv.innerHTML = htmlTable;
            }
        }
    });
});