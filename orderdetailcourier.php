<?php
include 'controller.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
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
  <!-- Responsive Table Container -->
<div class="border border-gray-200 rounded overflow-x-auto min-w-full bg-white px-20 ">
  <!-- component -->
  <div class="relative mr-6 my-2">
    <input type="search" class="bg-purple-white shadow rounded border-0 p-3" placeholder="Search by Order ID">
    <div class="absolute pin-r pin-t mt-3 mr-4 text-purple-lighter">
      <svg version="1.1" class="h-4 text-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve">
        <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
          c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
          C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
          S32.459,40,21.983,40z"/>
        </svg>
    </div>
  </div>
  <!-- Bordered Table -->
  <table class="min-w-full text-sm align-middle whitespace-nowrap">
    
    <!-- Table Header -->
    <thead>
      <tr class="border-b border-gray-200">
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
          Order Id
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-left">
          Sender Name
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-left">
          Recipient Name
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-left">
          Item Name
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
          Status
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
          Destination
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
          Actions
        </th>
      </tr>
    </thead>
    <!-- END Table Header -->

    <!-- Table Body -->
    <tbody>
              <?php
                  $display=display("SELECT * FROM orders");
                  foreach($display as $data):

                    
                    // =========================================================================================

                  $sendername = $data['sender_id'];
                  $senders = mysqli_query($conn,"SELECT sender_name from sender where sender_id = $sendername");
                  $sender = mysqli_fetch_assoc($senders);
                  
                  $recipientname = $data['recipient_id'];
                  $recipients = mysqli_query($conn,"SELECT recipient_name from recipient where recipient_id = $recipientname");
                  $recipient = mysqli_fetch_assoc($recipients);

                  $itemname = $data['item_id'];
                  $items = mysqli_query($conn,"SELECT item_name from item where item_id = $itemname");
                  $item = mysqli_fetch_assoc($items);

                  $couriername = $data['courier_id'];
                  $couriers = mysqli_query($conn,"SELECT courier_name from courier where courier_id = $couriername");
                  $courier = mysqli_fetch_assoc($couriers);
                    // =========================================================================================
              ?>
      <tr class="border-b border-gray-200">
        <td class="p-3 text-center">
        <?= $data['orders_id']; ?>

        </td>
        <td class="p-3">
          <p class="font-medium">
          <?=$sender["sender_name"];?>
          </p>
        </td>
        <td class="p-3">
          <p class="font-medium">
          <?= $recipient['recipient_name']; ?>
          </p>
        </td>
        <td class="p-3 text-gray-500">
        <?= $item['item_name']; ?>
        </td>
        <td class="p-3 text-center">
          <?= $data['orders_status']; ?>
        </td>

        <td class="p-3 text-center">
        <?= $destination_type[$data['destination_id']]; ?>
        </td>

        <td class="p-3 text-center">
          <a href = "validatecourier.php?orders_id=<?=$data['orders_id'];?>">
          <button type="button" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-2 py-1 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
            <svg class="hi-solid hi-pencil inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
            <span>Edit</span>
          </button>
      </a>
        </td>
      </tr>
      <?php
              endforeach;
              ?>
    </tbody>
    <!-- END Table Body -->
  </table>
  
  <!-- END Bordered Table -->
  <a href ="loginadmin.php"
    class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
    type="submit"
    name="back">
    Back
  </a>
</div>

<!-- END Responsive Table Container -->
    <script type="module" src="/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  </body>
</html>
</body>
</html>