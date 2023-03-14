<?php
include('connection.php');

if (isset($_POST['update'])) {
    $newTitle = $_POST['newtitle'];
    $newDesc = $_POST['newdesc'];
    $newID = $_POST['id'];

    $sql = "UPDATE `product_data` SET `title` = '$newTitle', `description` = '$newDesc' WHERE `id` = '$newID'";

    mysqli_query($conn, $sql);

    echo '<script>
        alert("Updated")</script>';

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Dungeon</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../dist/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>

<body class="body font-['Poppins']">

    <!-- HEADER -->
    <header class="bg-orange-900 text-white sticky top-0 z-10 font-['Poppins']">
        <section class="max-w-7xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-4xl font-bold font-['Poppins']">
                <a href="../index.html"><span class="text-orange-500">bu</span>rger dungeon.</a>
            </h1>
            <div>
                <button id="mobile-open-button" class="text-3xl sm:hidden focus:outline-none">
                    ☰
                </button>
                <nav class="hidden sm:block space-x-8 text-xl font-semibold" aria-label="main">
                    <a href="dashboard.php#table1" class="hover:opacity-90">Table</a>
                    <a href="dashboard.php#upload" class="hover:opacity-90">Upload</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </section>
    </header>

    <!-- SECTION FOR UPLOAD -->
    <section class="h-3/4" id="edit">
        <div class="h-3/4 w-full sm:w-11/12 flex flex-col bg-white py-6 p-9 rounded-3xl shadow-2xl m-auto sm:mt-14">
            <h1 class="text-center text-4xl font-bold text-orange-500">Edit and Delete Product</h1>
            <div>
                <div
                    class="w-full h-96 sm:w-full  flex-col py-6 p-9 rounded-3xl m-auto sm:mt-5 items-center justify-center sm:text-sm  overflow-x-hidden hidden sm:flex">
                    <div class="py-2 align-middle inline-block min-w-3/4 sm:px-6 -ml-6 lg:px-8 overflow-y-scroll">
                        <div class="shadow border-b border-gray-200 sm:rounded-lg  m-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Description
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Category
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Image
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Product ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Edit
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" id="table">
                                    <?php

                                    include('connection.php');
                                    // SQL query to retrieve all products from the database
                                    $sql = "SELECT * FROM product_data";
                                    $result = mysqli_query($conn, $sql);

                                    // Loop through the results and generate the HTML table
                                    while ($product = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap'>";
                                        echo "<div class='text-sm font-medium text-orange-500'>";
                                        echo $product['title'];
                                        echo "</div>";
                                        echo "</td>";
                                        echo "<td class='px-6 py-4 truncate'>";
                                        echo "<div class='text-sm text-gray-500'>";
                                        echo $product['description'];
                                        echo "</div>";
                                        echo "</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap'>";
                                        echo "<div class='text-sm text-gray-500'>";
                                        echo $product['category'];
                                        echo "</div>";
                                        echo "</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap'>";
                                        echo "<div class='flex-shrink-0 h-10 w-10'>";
                                        echo "<img src='../upload/" . $product['img'] . "' alt='" . $product['title'] . "'>";
                                        echo "</div>";
                                        echo "</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap id-cell'>";
                                        echo $product['id'];
                                        echo "</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap'>";
                                        echo "<form action='' method='POST'>";
                                        echo "<input type='hidden' name='id' value='" . $product['id'] . "'>";
                                        echo "<input type='hidden' name='img' value='" . $product['img'] . "'>";
                                        echo "<input type='hidden' name='title' value='" . $product['title'] . "'>";
                                        echo "<input type='hidden' name='description' value='" . $product['description'] . "'>";
                                        echo "<input type='submit' name='edit' class='text-purple-600 hover:text-red-900' value='Edit'></input>";
                                        echo "</form>";
                                        echo "</td>";
                                        echo "<td class='px-6 py-4 whitespace-nowrap'>";
                                        echo "<form action='' method='POST'>";
                                        echo "<input type='hidden' name='id' value='" . $product['id'] . "'>";
                                        echo "<input type='hidden' name='img' value='" . $product['img'] . "'>";
                                        echo "<input type='submit' name='delete' class='text-red-600 hover:text-red-900' value='Delete'></input>";
                                        echo "</form>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }

                                    // Handle delete requests
                                    if (isset($_POST['delete'])) {
                                        $id = $_POST['id'];
                                        $img = $_POST['img'];
                                        $sql = "DELETE FROM product_data WHERE id = $id";
                                        error_reporting(0);

                                        unlink('../upload/' . $img);

                                        mysqli_query($conn, $sql);
                                        echo '<script>
                                        alert("Deleted")</script>';

                                        exit();
                                    }

                                    // Handle delete requests
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        if (isset($_POST['edit'])) {
            $id = $_POST['id'];
            $img = $_POST['img'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            $sql = "SELECT `id` , 'title' FROM `product_data` WHERE id = $id";

            mysqli_query($conn, $sql);

            echo "<div class='h-3/4 w-1/2 sm:w-1/2 flex flex-col bg-white py-6 p-9 rounded-3xl shadow-2xl m-auto sm:mt-14'>";
            echo "<form action='' method='POST'>";
            echo "<h1 class='text-center text-3xl font-bold text-orange-500'>Edit Product Details</h1>";
            echo "<div class='flex flex-row justify-center items-center my-10'>
                <img src='../upload/$img' alt='' class='w-1/4 h-1/4'></img>
                </div>";
            echo "<p class='text-orange-500 text-xl font-bold my-5'>Product ID: $id</p>";
            echo "<input type='hidden' name='id' value='" . $id . "'>";
            echo "<label class='my-2'>Title</label>";
            echo "<input type='text' name='newtitle' class='font-[Poppins] bg-gray-50 border border-gray-300 text-gray-900 text-2xl rounded-lg block w-1/2 p-2' value='$title'></input>";
            echo "<label class='my-2'>Description</label>";
            echo "<textarea type='text' name='newdesc' class='font-[Poppins] bg-gray-50 border border-gray-300 text-gray-900 text-2xl rounded-lg block w-3/4 p-5 h-96'>$description</textarea>";
            echo "<input type='submit' name='update'
                class='bg-orange-500 text-white py-2 px-4 w-full sm:w-1/4 rounded-lg font-semibold mt-4 hover:bg-orange-300 focus:scale-95 transition-all duration-200 ease-out'
                value='Submit'></input>";
            echo "</form>";
            echo "</div>";





        }
        ?>


    </section>
</body>

</html>