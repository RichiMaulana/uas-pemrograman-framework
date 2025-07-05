<main class="p-6">
  <!-- Cards -->
  <div id="dashboard-content" class="content-section">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Pelanggan</p>
            <h3 class="text-2xl font-bold"><?= $total_customers ?></h3>
          </div>
          <div class="bg-blue-100 p-3 rounded-full">
            <i class="fas fa-users text-blue-600 text-xl"></i>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Barang</p>
            <h3 class="text-2xl font-bold"><?= $total_goods ?></h3>
          </div>
          <div class="bg-green-100 p-3 rounded-full">
            <i class="fas fa-boxes text-green-600 text-xl"></i>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Penjualan</p>
            <h3 class="text-2xl font-bold"><?= format_rupiah($sales_today) ?></h3>
          </div>
          <div class="bg-yellow-100 p-3 rounded-full">
            <i class="fas fa-shopping-cart text-yellow-600 text-xl"></i>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Pending Deliveries</p>
            <h3 class="text-2xl font-bold"><?= $pending_deliveries ?></h3>
          </div>
          <div class="bg-red-100 p-3 rounded-full">
            <i class="fas fa-truck text-red-600 text-xl"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Transactions -->
    <!-- Recent Transactions -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="p-6 border-b border-gray-200">
        <h3 class="font-semibold text-gray-800">Recent Transactions</h3>
      </div>
      <div class="p-6">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php foreach ($recent_transactions as $trx): ?>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600"><?= $trx->invoice_number ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $trx->customer_name ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $trx->transaction_date ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= format_rupiah($trx->total_amount) ?></td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                  <?= $trx->status == 'Paid' ? 'bg-green-100 text-green-800' : ($trx->status == 'Pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') ?>">
                      <?= $trx->status ?>
                    </span>
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