<main class="p-6">
  <!-- Sales Transactions Content -->
  <div id="sales-content" class="content-section">
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
      <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h3 class="font-semibold text-gray-800">Sales Transactions</h3>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
          <i class="fas fa-plus mr-2"></i> New Transaction
        </button>
      </div>
      <div class="p-6">
        <div class="mb-4 flex justify-between items-center">
          <div class="relative w-64">
            <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
            <input type="text" placeholder="Search transactions..." class="pl-10 pr-4 py-2 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>
          <div class="flex space-x-2">
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 flex items-center">
              <i class="fas fa-filter mr-2"></i> Filter
            </button>
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 flex items-center">
              <i class="fas fa-download mr-2"></i> Export
            </button>
          </div>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice No.</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Items</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">INV-2023-001</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15 Jun 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">PT Sinar Jaya</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp 5,250,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                  <button class="text-gray-600 hover:text-gray-900 mr-3"><i class="fas fa-print"></i></button>
                  <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">INV-2023-002</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14 Jun 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">CV Bintang Terang</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp 3,750,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                  <button class="text-gray-600 hover:text-gray-900 mr-3"><i class="fas fa-print"></i></button>
                  <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">INV-2023-003</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">13 Jun 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">UD Cahaya Abadi</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp 8,200,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                  <button class="text-gray-600 hover:text-gray-900 mr-3"><i class="fas fa-print"></i></button>
                  <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">INV-2023-004</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12 Jun 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">PT Energi Baru</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">7</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp 12,500,000</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Canceled</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                  <button class="text-gray-600 hover:text-gray-900 mr-3"><i class="fas fa-print"></i></button>
                  <button class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="bg-gray-50 px-6 py-3 flex items-center justify-between border-t border-gray-200">
          <div class="text-sm text-gray-500">
            Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">28</span> transactions
          </div>
          <div class="flex space-x-2">
            <button class="px-3 py-1 border border-gray-300 rounded text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Previous</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">2</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">3</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Next</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>