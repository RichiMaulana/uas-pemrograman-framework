<main class="p-6">
  <!-- Customers Content -->
  <div id="customers-content" class="content-section">
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
      <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h3 class="font-semibold text-gray-800">List Pelanggan</h3>
        <a href="<?php echo site_url('pelanggan/add')?>" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
          <i class="fas fa-plus mr-2"></i> Add Customer
        </a>
      </div>
      <div class="p-6">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Orders</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php foreach($pelanggan_list as $pelanggan): ?>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600"><?php echo $pelanggan->customer_code ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $pelanggan->name ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $pelanggan->company ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $pelanggan->phone ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $pelanggan->email ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $pelanggan->total_orders ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                      <a href="<?= site_url('pelanggan/edit/' . $pelanggan->customer_code) ?>" class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></a>
                      <a href="<?= site_url('pelanggan/delete/' . $pelanggan->customer_code) ?>" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</main>