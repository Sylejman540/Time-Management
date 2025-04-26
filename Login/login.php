<?php
    /*
    require_once 'includes/config_session.inc.php';
    require_once 'includes/login_view.inc.php';
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="images/logo.png">
    <title>TimeWise | Login to Your Account</title>
</head>
<body class="bg-gray-100">

    <h1 class="text-4xl font-bold text-center mb-10 mt-10">
        Log <span class="text-[#ffe270ff]">In</span>
    </h1>

    <!-- Login Form -->
    <form class="flex flex-col items-center mt-20" action="includes/login.inc.php" method="post">
        <!-- Email Input -->
        <input type="email" name="email" placeholder="Email" required 
               class="w-[260px] p-2 mb-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#5869FF]">

        <!-- Password Input -->
        <input type="password" name="password" placeholder="Password" required 
               class="w-[260px] p-2 mb-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#5869FF]"> 

        <!-- Submit Button -->
        <button type="submit" name="submit" 
                class="bg-[#ffe270ff] w-[260px] text-black font-bold p-2 rounded-lg mb-5 hover:bg-[#fee685ff]">
            Login
        </button>
    </form>

    <p class="text-center mt-5 text-gray-600">
        Don't have an account?
        <a href="/Time Management/Signup/index.php" class="text-[#ffe270ff] font-semibold hover:underline">Signup</a>
    </p>

    <!-- Display Login Errors -->
    <?php if (isset($_SESSION['login_error'])): ?>
        <p class="text-red-500 text-center mt-5">
            <?php 
                echo $_SESSION['login_error']; 
                unset($_SESSION['login_error']); 
            ?>
        </p>
    <?php endif; ?>

</body>
</html>
