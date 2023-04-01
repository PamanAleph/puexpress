<?php
  include 'controller.php';
  if (isset($_POST ['submit'])) {
    //sender
    $sendername = $_POST['sendername'];
    $senderphonenumber = $_POST['senderphonenumber'];
    $senderemail = $_POST['senderemail'];
    $senderpickup = $_POST['senderpickup'];
    //recipient
    $recipientname = $_POST['recipientname'];
    $recipientphonenumber = $_POST['recipientphonenumber'];
    $recipientemail = $_POST['recipientemail'];
    $recipientdropoff = $_POST['recipientdropoff'];
    //item
    $itemname = $_POST['itemname'];
    $itemtype = $_POST['itemtype'];
    $itemdate = $_POST['itemdate'];
    $itemweight = $_POST['itemweight'];
    $iteminsurance = $_POST['iteminsurance'];
    //servicetype
    $servicesname = $_POST['servicesname'];


    query("INSERT into sender (sender_name,sender_number,sender_email,sender_pickup) 
    values ('$sendername',$senderphonenumber,'$senderemail','$senderpickup')"
    );

    query("INSERT into recipient (recipient_name,recipient_number,recipient_email,recipient_dropoff) 
    values ('$recipientname',$recipientphonenumber,'$recipientemail','$recipientdropoff')"
    );

    query("INSERT into item (item_name,item_type,item_date,item_weight,item_insurance) 
    values ('$itemname','$itemtype','$itemdate',$itemweight,'$iteminsurance')"
    );

    query("INSERT into services (services_name) 
    values ('$servicesname')"
    );

    header ("Location: adminpanel.php");
  
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
	  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

</head>
<body>

      <!-- component -->
<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Sender Information</h1>
    <form method="post">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="sendername">Name</label>
                <input name="sendername" id="sendername" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="senderphonenumber">Phone Number</label>
                <input name="senderphonenumber" id="senderphonenumber" type="int" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="senderemail">Email</label>
                <input name="senderemail" id="senderemail" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="senderpickup">Pick Up</label>
                <select name="senderpickup" id="senderpickup" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option>SBH</option>
                    <option>NBH</option>
                    <option>Mak Yes</option>
                    <option>Campus</option>
                </select>
            </div>
        </div>

        
        <h1 class="mt-4 text-xl font-bold text-white capitalize dark:text-white">Recipient Information</h1>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="recipientname">Name</label>
                <input name="recipientname" id="recipientname" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="recipientphonenumber">Phone Number</label>
                <input name="recipientphonenumber" id="recipientphonenumber" type="int" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="recipientemail">Email</label>
                <input name="recipientemail" id="recipientemail" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="recipientropoff">Drop Off</label>
                <select name="recipientdropoff" id="recipientropoff" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option>SBH</option>
                    <option>NBH</option>
                    <option>Mak Yes</option>
                    <option>Campus</option>
                </select>
            </div>
        </div>
        <h1 class="mt-4 text-xl font-bold text-white capitalize dark:text-white">Package Information</h1>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="username">Name</label>
                <input name="itemname" id="packageweight" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Item Type</label>
                <select name="itemtype" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option>Goods</option>
                    <option>Document</option>
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="senderdate">Date</label>
                <input name="itemdate" id="itemdate" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="username">Weight</label>
                <input name="itemweight" id="itemweight" type="int" placeholder="kg"class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
          </div>


            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Item Insurance</label>
                <select name="iteminsurance" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            <div>
            <label for="services" class="text-white dark:text-gray-200" for="passwordConfirmation">Services</label>
              <select name="servicesname" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                <option selected>PU EZ</option>
                <option value="US">PU ECO</option>
                <option value="CA">PU SUPER</option>
              </select>
            </div>
        </div>
             
        <div class="flex justify-end mt-6">
          <a href ="/delivery/adminpanel.php">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Back</button></a>
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600" name="submit" type="submit">Create Order</button>
        </div>
    </form>
</section>

</body>
</html>