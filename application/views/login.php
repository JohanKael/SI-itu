<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css'); ?>">
</head>
<body class="flex justify-between h-screen items-center">
    
    <div class="ml-20 py-20 px-32 rounded-2xl flex flex-col gap-16">
        <span class="flex flex-col gap-0">
            <h1 class="font-thin text-2xl">Welcome to</h1>
            <h1 class="font-semibold text-sky-500 text-3xl">Nom Société</h1>
        </span>
        <div class="flex flex-col gap-8">
        <h1 class="font-semibold text-xl">Please fulfill this form to log in,</h1>
            <form action="<?php echo base_url('login_controller/login') ?>" method="post" class="flex flex-col gap-6">
                <span class="flex flex-col gap-2">
                    <label for="email">Enter email :</label>
                    <span class="bg-slate-200 rounded-lg w-80 h-10 flex">
                        <span class="bg-sky-400 h-10 w-10 flex items-center justify-center rounded-lg">
                            <i class="fas fa-envelope text-white"></i>
                        </span>
                        <input placeholder="email" type="email" name="email" id="email" class="bg-slate-200 rounded-lg w-72 h-10 px-4">
                    </span>
                </span>
                <span class="flex flex-col gap-2">
                    <label for="pass">Enter password : </label>
                    <span class="bg-slate-200 rounded-lg w-80 h-10 flex">
                        <span class="bg-sky-400 h-10 w-10 flex items-center justify-center rounded-lg">
                            <i class="fas fa-lock text-white"></i>
                        </span>
                        <input placeholder="password" type="password" name="pass" id="pass" class="bg-slate-200 rounded-lg w-72 h-10 px-4">
                    </span>
                </span>
                <?php if(isset($error)) { ?>
                    <span class="flex items-center justify-center">
                        <p style="color: red;"><?php echo $error ?></p>
                    </span>
                <?php } ?>
                <span class="flex justify-end">
                    <a href="" class="hover:border-b hover:border-sky-500 transition text-sm text-sky-500">Forget your password?</a>
                </span>
                <input type="submit" value="Log in" class="bg-sky-500 text-white rounded-lg font-thin py-3 hover:bg-sky-600 transition">
            </form>
        </div>
    </div>
    <div class="h-screen bg-sky-200 bg-opacity-80 rounded-3xl shadow-2xl shadow-sky-600">
        <img src="<?php echo base_url('img/working.png') ?>" alt="" class="w-[50rem] -translate-x-52 mt-20">
    </div>

</body>
</html>