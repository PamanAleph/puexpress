<?php
include 'controller.php';
  error_reporting(0);
  if (isset($_POST['login'])){
    $user = $_POST ['username'];
    $pass = $_POST ['password'];

    if ($user === 'admin' AND $pass === 'admin') {
      session_start();
      $_SESSION['success'] = true;
      header("Location: adminsite.php");

  } elseif (isset($_POST['login'])){
    $user = $_POST ['courier_name'];
    $pass = $_POST ['courier_id'];

    query("SELECT * FROM courier where courier_name = '$user' and courier_id = '$pass'");{
      session_start();
      $_SESSION['success'] = true;
      header("Location: orderdetailcourier.php");
    }
  } else if (isset($_POST['back'])) {
    header("Location: index2.html");

  } else {
      echo "<div role='alert'>
          <div class='bg-red-500 text-white font-bold rounded-t px-4 py-2'>
              Danger
          </div>
          <div class='border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700'>
              <p>Something not ideal might be happening.</p>
          </div>
      </div>";
  } 
} 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PresUniv Express</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

      html {
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
  </head>

  <body class="leading-normal tracking-normal text-indigo-400 m-6 bg-cover bg-fixed" style="background-image: url('/delivery/test/header.png');">
    <div class="h-full pr-10 pl-10">
      <!--Nav-->
      <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
          <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/delivery/loginadmin.php">
            PresUniv <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500"> Express</span>
          </a>

        </div>
      </div>

      <!--Main-->
      <div class="container pt-24 md:pt-24 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
            Login
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
              Admin
            </span>
          </h1>

          <form class="mt-16 bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4" method="post">
            <div class="mb-4">
              <label class="block text-blue-300 py-2 font-bold mb-2" for="username" name="">
                Username
              </label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="emailaddress"
                type="text"
                name = "username"
              />
            </div>
            <div class="mb-4">
              <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
                Password
              </label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="password"
                type="password"
                name = "password"
              />
            </div>

            <div class="flex items-center justify-between pt-4">
              <button
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                type="submit"
                name="login"
              >
                Login
              </button>
                <a href ="index.php"
                  class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                  type="submit"
                  name="back"
                >
                  Back
                </a>
              
              </div>
          </form>
          
        </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5 p-12 overflow-hidden">
          <!-- <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="macbook.svg" /> -->
        </div>

      </div>
    </div>
  </body>
</html>