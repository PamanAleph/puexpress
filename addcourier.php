<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Courier</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

</head>
<body>
<div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
  <div class="px-4 pt-8">
  <p class="text-xl font-medium">Courier</p>
    <p class="text-gray-400">Courier Add</p>
    <div class="">
      <label for="name" class="mt-4 mb-2 block text-sm font-medium">Name</label>
      <div class="relative">
        <input type="text" id="name" name="name" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="John Doe" />
        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
        </div>
      </div>
      <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
      <div class="relative">
        <input type="email" id="email" name="email" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="yourname@gmail.com" />
        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
        </div>
      </div>
      <label for="phonenumber" class="mt-4 mb-2 block text-sm font-medium">Phone Number</label>
      <div class="relative">
        <input type="text" id="name" name="name" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="081234567890" />
        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
        </div>
      </div>
      <label for="phonenumber" class="mt-4 mb-2 block text-sm font-medium">Phone Number</label>
      <div class="relative">
        <input type="text" id="name" name="name" class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="081234567890" />
        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
        </div>
      </div>
      <button class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white" name="add">Add</button>

    </div>
</div>
</body>
</html>