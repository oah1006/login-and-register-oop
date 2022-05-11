<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div>
        <div class="bg-black">
            <div class="flex px-56 py-4">
                <div class="ml-auto">
                    <button class="text-white text-lg font-medium">Login</button>
                    <button class="ml-8 bg-blue-500 text-white px-4 py-1 rounded-lg text-lg font-medium">Register</button>
                </div>
            </div>
        </div>
        
        <div class="px-56 py-4 flex">
            <div>
                <p class="text-4xl font-medium mt-4 mb-8">Login</p>
                <p class="text-zinc-500 mb-4 text-lg">Don't have an account yet? Register here!</p>
                <form method="post" action="includes/login.php" class="flex flex-col">
                    <input type="text" name="username" placeholder="Username..." class="border border-solid border-zinc-300 py-2 px-2 mb-2">
                    <input type="password" name="password" placeholder="Passowrd..." class="border border-solid border-zinc-300 py-2 px-2 my-2">
                    <button type="submit" name="submit" value="Login" class="bg-blue-500 text-white px-4 py-1 rounded-lg text-lg font-medium mt-2">Submit</button>
                </form>
            </div>
            <div class="ml-auto bg-black px-10 rounded-lg">
                <p class="text-4xl font-medium mt-4 mb-8 text-white text-center">Register</p>
                <p class="text-white mb-4 text-lg">Don't have an account yet? Register here!</p>
                <form method="post" action="includes/register.php" class="flex flex-col">
                    <input type="text" name="username" placeholder="Username..." class="border border-solid border-zinc-300 py-2 px-2 mb-2">
                    <input type="password" name="password" placeholder="Passowrd..." class="border border-solid border-zinc-300 py-2 px-2 mb-2 my-2">
                    <input type="password" name="password_confirmation" placeholder="Confirmation passowrd..." class="border border-solid border-zinc-300 py-2 px-2 mb-2 my-2">
                    <input type="text" name="email" placeholder="Email..." class="border border-solid border-zinc-300 py-2 px-2 mb-2 my-2">

                    <button type="submit" name="submit" value="Register" class="bg-blue-500 text-white px-4 py-1 rounded-lg text-lg font-medium my-4">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>