<main class="ml-60 pt-16 max-h-screen overflow-auto">
    <div class="px-6 py-8">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl p-8 mb-5">
          <div class="grid grid-cols-2 gap-x-20">
            <div>
              <h2 class="text-2xl font-bold mb-4">Status</h2>

              <div class="grid grid-cols-2 gap-4">
              <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(courier_id) as total FROM courier";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">Total Courier</div>
                  </div>

                  <!-- Sender -->

                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(sender_id) as total FROM sender";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">Total Sender</div>
                  </div>

                  <!-- Courier -->

                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(destination_id) as total FROM recipient where destination_id = 7000001";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">Drop Off SBH</div>
                  </div>

                <!-- Delivered -->

                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(destination_id) as total FROM recipient where destination_id = 7000002";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">Drop Off NBH</div>
                  </div>

                  <!-- Revenue -->

                  <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(destination_id) as total FROM recipient where destination_id = 7000003";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">Drop Off Elvis</div>
                  </div>
              </div>
            </div>
            <div>
              <h2 class="text-2xl font-bold mb-4">Orders Status</h2>

              <div class="space-y-4">
                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">

                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(orders_status) as total FROM orders where orders_status = 'DELIVERED'";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">DELIVERED</div>
                  </div><div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(orders_status) as total FROM orders where orders_status = 'PROCESS'";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">PROCESS</div>
                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>