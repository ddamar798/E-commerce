<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - D Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 flex items-center justify-center min-h-screen">
    <div class="bg-accent-color: transparent; p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">D Store</h1>

        <!-- form -->
        <form action="service/register.php" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-medium mb-2">Username</label>

                <input type="text" id="username" name="username" placeholder="Enter Username" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            
                    </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
           
            <label for="submit">Register</label>
            <input type="submit" name="register" 
                    class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 focus:outline-none" />
        </form>
        <p class="text-center text-gray-600 text-sm mt-4">
            Already have an account? <a href="login.html" class="text-blue-500 hover:underline">Log In</a>
        </p>
    </div>
</body>
</html>
