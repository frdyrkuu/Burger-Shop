<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $usr = $conn->query("SELECT user_admin FROM admin_account WHERE 1");
    $usernameValidation = $usr->fetch_assoc()['user_admin'];

    if ($username != $usernameValidation) {

        $stmt = mysqli_prepare($conn, "INSERT INTO `admin_account`(`name`, `user_admin`, `user_password`) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $name, $username, $password);

        mysqli_stmt_execute($stmt);

        // Close statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        header("Location: dashboard.php?success=Account has been created");

        exit();
    } else {

        header("Location: signup.php?error=Username has been taken");
        exit();
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body class="body">

    <!-- HEADER -->
    <header class="bg-orange-900 text-white sticky top-0 z-10">
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

    <main class="max-w-14xl">
        <section class="h-screen ">
            <div
                class=" m-auto w-full sm:w-1/4 bg-white py-6 p-9 rounded-3xl shadow-2xl sm:mt-14 flex flex-col items-center justify-center">
                <img src="../img/burger.png" alt="product1" class="w-1/4 mb-6 rounded-xl sm:w-1/4 m-auto"
                    id="product-img-3">
                <h3 class="font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4" id="product-title-1">
                    Admin Sign Up Form
                </h3>
                <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center">Create your Administrator <br>
                    Account to have a permission to edit product details.</p>
                <br>
                <div class="">
                    <form action="" method="POST" id="sign-up-form">
                        <label for="first_name" class="block text-lg font-medium text-gray-900">Create
                            Username</label>
                        <input type="text" name="username" id="username"
                            class="font-['Poppins'] bg-gray-50 border border-gray-300 text-gray-900 text-2xl rounded-lg block w-full"
                            placeholder="Username" required>

                        <label for="first_name"
                            class="font-['Poppins'] block text-lg mt-5 font-medium text-gray-900 dark:text-white">Create
                            Password</label>
                        <input type="password" name="password" id="password"
                            class="font-['Poppins'] bg-gray-50 border border-gray-300 text-gray-900 text-2xl rounded-lg block w-full"
                            placeholder="Password" required>

                        <label for="first_name"
                            class="font-['Poppins'] block text-lg mt-5 font-medium text-gray-900 dark:text-white">Enter
                            Your Fullname</label>
                        <input type="text" name="name" id="name"
                            class="font-['Poppins'] bg-gray-50 border border-gray-300 text-gray-900 text-2xl rounded-lg block w-full"
                            placeholder="Fullname" required>
                        <div class="flex flex-col justify-center items-center my-2">
                            <input type="submit" name="submit" id="login"
                                class="text-center bg-orange-500 text-white py-2 px-4 w-full sm:w-full rounded-lg font-semibold mt-4 hover:bg-orange-300 focus:scale-95 transition-all duration-200 ease-out"
                                value="Submit"></input>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>