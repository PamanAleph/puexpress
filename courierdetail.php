<?php

if (isset($_POST ['edit'])) {
  //sender
  $courierphonenumber = $_POST['courierphonenumber'];
  $courieremail = $_POST['courieremail'];
  $courieraddress = $_POST['courieraddress'];
  $couriertype = $_POST['couriertype'];

  if ($couriertype === 'SBH'){
    $couriertype = 7000001;
  }
  else if ($couriertype === 'NBH'){
    $couriertype = 7000002;
  }
  if ($couriertype === 'Elvis'){
    $couriertype = 7000003;
  }

  if (isset($_POST['courier_id'])) {
    $courier_id = $_POST['courier_id'];

  query("UPDATE courier SET courier_pnumber=$courierphonenumber, 
  courier_email='$courieremail', 
      courier_address='$courieraddress', 
      destination_id=$couriertype
      WHERE courier_id=$courier_id"
  );
  

  header ("Location: courierdetail.php");
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />

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
  <?php include 'controller.php'?>

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
          Courier Id
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-left">
          Courier Name
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-left">
          Courier Address
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
          Courier Phone Number
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
          Courier Email
        </th>
        <th class="p-3 text-gray-700 bg-gray-100 font-semibold text-sm tracking-wider uppercase text-center">
          Courier Destination
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
        $display=display("SELECT * FROM courier");
        foreach($display as $data) :
        ?>

      <tr class="border-b border-gray-200">
        <td class="p-3 text-center">
        
            <?= $data['courier_id']; ?>
        </td>
        <td class="p-3 text-center">
          <p class="font-medium">
           
            <?= $data['courier_name']; ?>
          </p>
        </td>
        <td class="p-3 text-center">
          
            <?= $data['courier_address']; ?>
        </td>
        <td class="p-3 text-center">
           
            <?= $data['courier_pnumber']; ?>
        </td>
        <td class="p-3 text-center">
            
            <?= $data['courier_email']; ?>
        </td>
        <td class="p-3 text-center">

            <?= $destination_type[$data['destination_id']]; ?>
        </td>

        <td class="p-3 text-center">
          <a href ="addcourier.php?courier_id=<?=$data['courier_id'];?>">
          <button class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md">
	          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
	          </svg>
	          Edit
          </button>
          </a>
          <a href ="addcourier.php?courier_id=<?=$data['courier_id'];?>&delete=true&">
          <button button class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
	          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          	</svg>
	          Delete
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
</div>
</main>
    <script type="module" src="/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    </body>
</html>
</body>
</html>