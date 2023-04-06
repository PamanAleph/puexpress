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
                      $query = "SELECT COUNT(recipient_dropoff) as total FROM recipient where recipient_dropoff = 'SBH'";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">Drop Off SBH</div>
                  </div>

                <!-- Delivered -->

                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(recipient_dropoff) as total FROM recipient where recipient_dropoff = 'NBH'";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">Drop Off NBH</div>
                  </div>

                  <!-- Revenue -->

                  <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <?php
                      $query = "SELECT COUNT(recipient_dropoff) as total FROM recipient where recipient_dropoff = 'Elvis'";
                                $result = mysqli_query($conn, $query);
                      $data = mysqli_fetch_assoc($result); 
                  ?>
                  <h4 class="font-bold text-2xl leading-none"><?= $data['total']; ?></h4>
                      <div class="mt-2">Drop Off Elvis</div>
                  </div>
              </div>
            </div>
            <div>
              <h2 class="text-2xl font-bold mb-4">Chart</h2>

              <div class="space-y-4">
                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                  <script>
                    const config = {
                      type: 'pie',
                      data: data,
                    };
                    const data = {
                    labels: [
                      'Red',
                      'Blue',
                      'Yellow'
                    ],
                    datasets: [{
                      label: 'My First Dataset',
                      data: [300, 50, 100],
                      backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                      ],
                      hoverOffset: 4
                    }]
                  };
                    </script>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>