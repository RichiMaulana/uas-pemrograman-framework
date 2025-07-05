<main class="p-6">
  <!-- Delivery Orders Content -->
  <div id="delivery-content" class="content-section">
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
      <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h3 class="font-semibold text-gray-800">List Pengiriman</h3>
        <a href="<?= site_url('pengiriman/add') ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
          <i class="fas fa-plus mr-2"></i> Tambah Pengiriman
        </a>
      </div>
      <div class="p-6">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DO No.</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice No.</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Items</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($delivery_list as $delivery): ?>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600"><?= $delivery->do_number ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $delivery->delivery_date ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $delivery->company ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600"><?= $delivery->invoice ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $delivery->items_count ?></td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <?php if ($delivery->status == 'Delivered'): ?>
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Delivered</span>
                  <?php elseif ($delivery->status == 'On Process'): ?>
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">On Process</span>
                  <?php elseif ($delivery->status == 'On Delivery'): ?>
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">On Delivery</span>
                  <?php elseif ($delivery->status == 'Canceled'): ?>
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Canceled</span>
                  <?php endif; ?>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <div class="relative inline-block text-left">
                    <button onclick="toggleDropdown(this)" class="text-gray-600 hover:text-blue-600">
                      <i class="fas fa-ellipsis-v"></i>
                    </button>

                    <div class="dropdown-content origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                      <div class="py-1">
                        <a href="<?= site_url('pengiriman/update_status/' . $delivery->do_number . '/Delivered') ?>" class="block px-4 py-2 text-sm text-green-700 hover:bg-green-50">Mark as Delivered</a>
                        <a href="<?= site_url('pengiriman/update_status/' . $delivery->do_number . '/' . rawurlencode('On Process')) ?>" class="block px-4 py-2 text-sm text-yellow-700 hover:bg-yellow-50">Mark as On Process</a>
                        <a href="<?= site_url('pengiriman/update_status/' . $delivery->do_number . '/' .  rawurlencode('On Delivery')) ?>" class="block px-4 py-2 text-sm text-blue-700 hover:bg-yellow-50">Mark as On Delivery</a>
                        <a href="<?= site_url('pengiriman/update_status/' . $delivery->do_number . '/Canceled') ?>" class="block px-4 py-2 text-sm text-red-700 hover:bg-red-50">Cancel</a>
                        <a href="<?= site_url('pengiriman/delete/' . $delivery->do_number) ?>" onclick="return confirm('Delete this delivery order?');" class="block px-4 py-2 text-sm text-red-700 hover:bg-red-50">Delete</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
</main>