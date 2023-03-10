<?php
include 'check_auth.php';
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
                    <a href="../index.html#food" class="hover:opacity-90">Foods</a>
                    <a href="../productlist.html" class="hover:opacity-90">Our Products</a>
                    <a href="../index.html#contacts" class="hover:opacity-90">Contacts</a>
                    <a href="../index.html#about" class="hover:opacity-90">About Us</a>
                </nav>
            </div>
        </section>
    </header>

    <main class="max-w-7xl mx-auto">
        <section class="h-screen ">
            <div
                class="items-center w-full sm:w-1/2 flex flex-col bg-white py-6 p-9 rounded-3xl shadow-2xl m-auto sm:mt-14">
                <img src="../img/burger.png" alt="product1" class="w-4/5 mb-6 rounded-xl sm:w-1/2" id="product-img-3">
                <h3 class="font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4" id="product-title-1">
                    Admin Login Form
                </h3>
                <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center">Securely log in to your admin
                    dashboard with our easy-to-use login form.</p>
                <br>

                <div class="items-center m-auto">

                    <form action="admin.php" method="POST" id="login-form">
                        <label for="first_name"
                            class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Enter
                            Username</label>
                        <input type="text" name="username" id="username"
                            class="font-['Poppins'] bg-gray-50 border border-gray-300 text-gray-900 text-2xl rounded-lg block sm:w-11/12 w-11/12"
                            placeholder="Username" required>

                        <label for="first_name"
                            class="font-['Poppins'] block mb-2 text-xl font-medium text-gray-900 dark:text-white">Enter
                            Password</label>
                        <input type="password" name="password" id="password"
                            class="font-['Poppins'] bg-gray-50 border border-gray-300 text-gray-900 text-2xl rounded-lg block w-11/12 sm:w-11/12"
                            placeholder="Password" required>

                        <input type="submit" name="submit" id="login"
                            class="text-center bg-orange-500 text-white py-2 px-4 w-1/4  rounded-lg font-semibold mt-4 hover:bg-orange-300 focus:scale-95 transition-all duration-200 ease-out"
                            value="Login"></input>

                    </form>
                </div>

            </div>
        </section>
    </main>
</body>

</html>