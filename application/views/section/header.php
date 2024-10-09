<?php
    $session = $this->session->userdata('info_user');
    if($session == null){
        redirect('login_controller');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Societe</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css'); ?>">
    </head>
    <body class="grid grid-cols-6 bg-white">

        <div class="col-span-1 h-screen flex flex-col justify-between py-4 bg-sky-500">
            <span class="w-full pl-6">
                <h1 style="font-size: 40px;" class="font-bold text-white">Logo</h1>
                <span class="flex flex-col gap-1 mt-10">
                <a href="" class="flex gap-4 items-center px-6 py-2 transition text-white hover:bg-white hover:text-sky-500 rounded-xl translate-x-4">
                    <i class="fas fa-list"></i>
                    Liste des besoins
                </a>
                <a href="" class="flex gap-4 items-center px-6 py-2 transition text-white hover:bg-white hover:text-sky-500 rounded-xl translate-x-4">
                    <i class="fas fa-list"></i>
                    Ajouter un besoin
                </a>
                <a href="" class="flex gap-4 items-center px-6 py-2 transition text-white hover:bg-white hover:text-sky-500 rounded-xl translate-x-4">
                    <i class="fas fa-list"></i>
                    Liste des besoins
                </a>
                <a href="" class="flex gap-4 items-center px-6 py-2 transition text-white hover:bg-white hover:text-sky-500 rounded-xl translate-x-4">
                    <i class="fas fa-list"></i>
                    Liste des besoins
                </a>
            </span>
            </span>
            <span class="w-full flex justify-center px-4">
                <a href="<?php echo base_url("login_controller/disconnect") ?>" class="border border-white py-3 px-4 rounded-xl w-full text-white flex items-center gap-4 justify-center bg-transparent hover:bg-white hover:text-sky-600 transition"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a>
            </span>
        </div>
        <div class="col-span-5 w-full">
            <div class="w-full border-b border-neutral-200 py-4 flex justify-end px-4 shadow-lg">
                <span class="flex gap-4 items-center">
                    <p class="text-black"><?php echo $session["email_user"] ?></p>
                    <span class="border border-black rounded-full px-3 py-2">
                        <i class="fa-solid fa-user"></i>
                    </span>
                </span>
            </div>
            <div class="p-8">

            

        

            

    


