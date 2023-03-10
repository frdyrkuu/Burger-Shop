<?php
// session_start();
include('connection.php');
include 'check_logout.php';

if (isset($_FILES['picture']) && isset($_POST['title'])) {

    $filename = $_FILES['picture']['name'];
    $path = $_FILES['picture']['tmp_name'];
    $error = $_FILES['picture']['error'];
    $img_size = $_FILES['picture']['size'];

    $title = $_POST['title'];
    $desc = $_POST['desc'];

    if ($error === 0) {
        if ($img_size > 10000000) {
            $em = "file too large.";
            header("Location: dashboard.php?error=$em");

        } else {

            if (!empty($_POST['product'])) {
                $selected = $_POST['product'];

                $new_img_name = uniqid("IMG-", true) . '.' . $filename;
                $new_path = "upload/" . $new_img_name;
                move_uploaded_file($path, "../" . $new_path);

                $sql = "INSERT INTO `product_data`(`title`, `description`, `category`, `img`) VALUES ('$title','$desc','$selected','$new_img_name')";
                mysqli_query($conn, $sql);

                exit();
            }
        }
    }
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

    <script src="display.js"></script>

</head>

<body class="body">

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
                    <a href="#table1" class="hover:opacity-90">Table</a>
                    <a href="#upload" class="hover:opacity-90">Upload</a>
                    <a href="logout.php">Logout</a>
                </nav>
            </div>
        </section>
    </header>

    <main class="max-w-19xl mx-auto">

        <section class="font-['Poppins'] my-5" id="table1">
            <div
                class="w-full sm:w-1/2 flex flex-col bg-white py-6 p-9 rounded-3xl shadow-2xl m-auto sm:mt-14 items-center justify-center">
                <h1 class="text-4xl font-bold text-orange-500 text-center sm:text-center">Administrator Dashboard</h1>
                <h2 class="font-['Poppins'] font-semibold text-3xl text-center text-orange-500 px-4 my-5"
                    id="product-title-1">
                    <?php echo "Welcome," . " " . $_SESSION['name']; ?>
                </h2>
            </div>
            <div
                class="w-full h-96 sm:w-1/2 flex flex-col py-6 p-9 rounded-3xl m-auto sm:mt-5 items-center justify-center sm:text-sm">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 overflow-y-scroll">
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
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="table">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION FOR UPLOAD -->
        <section class="h-1/2" id="upload">
            <div class="w-full sm:w-1/2 flex flex-col bg-white py-6 p-9 rounded-3xl shadow-2xl m-auto sm:mt-14">
                <h1 class="font-['Poppins'] font-bold text-4xl text-center text-orange-500 px-4 my-5"
                    id="product-title-1">
                    Upload Image and Update Product
                </h1>

                <h2 class="font-['Poppins'] font-light text-2xl text-center text-orange-500 px-4">Upload Image Here
                </h2>
                <br>
                <form id="upload-form" enctype="multipart/form-data" action="" method="POST">

                    <input type="file" id="file" name="picture" class="font-['Poppins'] m-auto" accept="image/png"
                        onchange="loadFile(event)" required>
                    <p class="font-['Poppins'] text-sm">Note: Only PNG images are allowed to input</p>
                    <img id="output" class="my-10 rounded-2xl w-80 h-80 m-auto" src="../img/image-preview.png" />


                    <h2 class="font-['Poppins'] font-bold text-2xl text-center text-orange-500 px-4">Edit your
                        product
                        details</h2>

                    <div class="my-5 flex flex-col sm:flex-row">
                        <p class="font-['Poppins'] mt-1 ml-4">Product Title: </p>
                        <input type="text" name="title"
                            class="font-['Poppins'] bg-gray-50 border border-gray-300 text-gray-900 ml-2 text-2xl rounded-lg block sm:w-80 w-full placeholder:p-2"
                            placeholder="Enter Title" required>

                        <div class="font-['Poppins'] ml-2 sm:ml-6 mt-5 sm:mt-0">
                            <label for="product-category">Select Category:</label>
                            <select name="product" class="border-gray-300 border-2" required>
                                <option value="" disabled selected required>Choose option</option>
                                <option value="burger" required>Burger</option>
                                <option value="fries" required>Fries</option>
                                <option value="drinks" required>Drinks</option>
                                <option value="icecream" required>Ice Cream</option>
                                <option value="barbeque" required>Barbeque</option>
                            </select>
                        </div>
                    </div>

                    <p class="font-['Poppins']">Product Description: </p>
                    <textarea type="text" name="desc"
                        class="font-['Poppins'] bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg h-80 w-full sm:full"
                        required></textarea>
                    <br>
                    <div class="-mt-2">
                        <input type="submit" name="submit" id=""
                            class="text-center bg-orange-500 text-white py-2 px-4 w-full  rounded-lg font-semibold mt-4 hover:bg-orange-300 focus:scale-95 transition-all duration-200 ease-out"
                            value="Submit"></input>
                    </div>
                </form>

                <div class="font-['Poppins'] m-auto text-sm mt-5">
                    <a href="signup.php" class="text-gray-600 underline">Do you want to be an Admin?</a>
                </div>
            </div>
        </section>
        <!-- END OF UPLOAD SECTION -->

    </main>
    <script src="image.js"></script>
    <script src="upload.js"></script>

</body>

</html>