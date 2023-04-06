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

  <?php include 'sidebar.php'?>

  <main class="ml-60 pt-16 max-h-screen overflow-auto">
    <div class="px-6 py-8 bg-yellow-50">
      <div class="max-w-7xl mx-auto bg-white rounded-3xl">
          <!-- component -->
          <div class="border border-gray-200 rounded overflow-x-auto min-w-full bg-white">
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
                <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
                Courier Name
                </th>
                <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
                Item Name
                </th>
                <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
                Service Type
                </th>
                <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
                Destination
                </th>
                <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
                Order Date
                </th>
                <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
                Order Price
                </th>
                <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
                Status
                </th>
                <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
                Validate
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
                  <!-- sendername -->
                <?=$sender["sender_name"];?>

                </p>
                </td>
                <td class="p-3 text-gray-500">
                    <!-- recipientname -->
                <?= $recipient['recipient_name']; ?>

                </td>
                <td class="p-3 text-center">
                  <!-- couriername -->
                <?= $courier['courier_name']; ?>

                </td>
                <td class="p-3 text-center">
                    <!-- itemname -->
                <?= $item['item_name']; ?>

                </td>
                <td class="p-3 text-gray-500">
                    <!-- services name -->
                <?= $service_type[$data['services_id']]; ?>

                </td>
                <td class="p-3 text-gray-500">
                    <!-- destination -->
                <?= $destination_type[$data['destination_id']]; ?>

                </td>
                <td class="p-3 text-gray-500">

                <?= $data['orders_date']; ?>

                </td>
                <td class="p-3 text-gray-500">

                <?= $data['orders_price']; ?>

                </td>
                <td class="p-3 text-gray-500">

                <?= $data['orders_status']; ?>

                </td>
                <td class="p-3 text-center">
                  <a href = "form.php?orders_id=<?=$data['orders_id'];?>">
                <button type="button" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none px-2 py-1 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                    <svg class="hi-solid hi-pencil inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                    <span>Validate</span>
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
</div>
</div>
</div>
</main>
    <script type="module" src="/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  </body>
</html>
</body>
</html>