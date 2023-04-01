<?php
    include 'controller.php';

    if (isset($_POST ['delete'])) {
        $id =$_POST['sender_id'];
        query("DELETE FROM sender WHERE sender_id=$id");
    }

    if (isset($_POST ['search'])) {
        $pencarian=$_POST['search'];
        $display=display("SELECT * from sender where sender_name like '%$search%'");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
        fontFamily: {
            sans: ["Roboto", "sans-serif"],
            body: ["Roboto", "sans-serif"],
            mono: ["ui-monospace", "monospace"],
        },
        },
        corePlugins: {
        preflight: false,
        },
    };
    </script>

</head>
<body>

<div class="flex flex-col overflow-x-auto max-w-7xl p-6 mx-auto bg-yellow-500 rounded-md shadow-md dark:bg-gray-800 mt-20 overflow-x-visible    ">
  <div class="sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
      <h1 class="text-xl font-bold text-white capitalize dark:text-white">Items Details</h1>
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <div class="bg-white relative mb-4 flex w-full flex-wrap items-stretch">
                    <input type="search" class="relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200" placeholder="Search" aria-label="Search" aria-describedby="button-addon3" />
                        <button name ="search" class="relative z-[2] rounded-r px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0" type="button" id="button-addon3" data-te-ripple-init> 
                            Search 
                        </button>
                        <button name = "delete" class="relative z-[2] rounded-r  px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0" type="button" id="button-addon3" data-te-ripple-init> 
                            Delete 
                        </button>
                </div>
            </div>
        </div>
        <table class="min-w-full text-left text-sm font-bold">
          <thead class="border-b text-gray-50 font-medium dark:border-neutral-500">

            <tr>
              <th scope="col" class="px-6 py-4">Delivery Id</th>
              <th scope="col" class="px-6 py-4">Sender Id</th>
              <th scope="col" class="px-6 py-4">Recipient Id</th>
              <th scope="col" class="px-6 py-4">Courier Id</th>
              <th scope="col" class="px-6 py-4">Item Id</th>
              <th scope="col" class="px-6 py-4">Service Id</th>
              <th scope="col" class="px-6 py-4">Delivery Price</th>
              <th scope="col" class="px-6 py-4">Delivery Status</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                foreach($display as $data) :
             ?>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium"><?= $data['delivery_id']; ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?= $data['sender_id']; ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?= $data['recipient_id']; ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?= $data['courier_id']; ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?= $data['item_id']; ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?= $data['services_id']; ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?= $data['delivery_price']; ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?= $data['delivery_status']; ?></td>
            </tr>
            <?php 
                endforeach;
            ?>
          </tbody>
        </table>
    </div>
    <a href ="/delivery/adminpanel.php">
      <button class="mt-5 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
        </svg>
      Back
      </button>
  </a>
</div>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>