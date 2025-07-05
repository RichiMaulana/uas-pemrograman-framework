<!-- Top Navigation -->
<!-- <header class="bg-white shadow-sm p-4 flex justify-between items-center sticky top-0 z-10">
  <h2 class="text-xl font-semibold text-gray-800" id="page-title">Dashboard</h2>
  <div class="flex items-center space-x-4">
    <div class="relative">
      <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
      <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="relative">
      <i class="fas fa-bell text-gray-600 cursor-pointer hover:text-blue-600"></i>
      <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">3</span>
    </div>
    <div class="flex items-center">
      <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Profile" class="w-8 h-8 rounded-full">
    </div>
  </div>
</header> -->

<main class="p-6">
  <!-- Cards -->
  <div id="dashboard-content" class="content-section">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Pelanggan</p>
            <h3 class="text-2xl font-bold">1,248</h3>
          </div>
          <div class="bg-blue-100 p-3 rounded-full">
            <i class="fas fa-users text-blue-600 text-xl"></i>
          </div>
        </div>
        <div class="mt-4">
          <span class="text-green-500 text-sm font-medium"><i class="fas fa-arrow-up"></i> 12.5%</span>
          <span class="text-gray-500 text-sm ml-2">vs last month</span>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Barang</p>
            <h3 class="text-2xl font-bold">856</h3>
          </div>
          <div class="bg-green-100 p-3 rounded-full">
            <i class="fas fa-boxes text-green-600 text-xl"></i>
          </div>
        </div>
        <div class="mt-4">
          <span class="text-green-500 text-sm font-medium"><i class="fas fa-arrow-up"></i> 5.2%</span>
          <span class="text-gray-500 text-sm ml-2">vs last month</span>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Penjualan</p>
            <h3 class="text-2xl font-bold">Rp 24.5M</h3>
          </div>
          <div class="bg-yellow-100 p-3 rounded-full">
            <i class="fas fa-shopping-cart text-yellow-600 text-xl"></i>
          </div>
        </div>
        <div class="mt-4">
          <span class="text-red-500 text-sm font-medium"><i class="fas fa-arrow-down"></i> 2.8%</span>
          <span class="text-gray-500 text-sm ml-2">vs yesterday</span>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Pending Deliveries</p>
            <h3 class="text-2xl font-bold">18</h3>
          </div>
          <div class="bg-red-100 p-3 rounded-full">
            <i class="fas fa-truck text-red-600 text-xl"></i>
          </div>
        </div>
        <div class="mt-4">
          <span class="text-green-500 text-sm font-medium"><i class="fas fa-arrow-up"></i> 3.1%</span>
          <span class="text-gray-500 text-sm ml-2">vs last week</span>
        </div>
      </div>
    </div>

    <!-- Recent Transactions -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <div class="p-6 border-b border-gray-200">
        <h3 class="font-semibold text-gray-800">Recent Transactions</h3>
      </div>
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">INV-2023-001</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">PT Sinar Jaya</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15 Jun 2023</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp 5,250,000</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-print"></i></button>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">INV-2023-002</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">CV Bintang Terang</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14 Jun 2023</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp 3,750,000</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-print"></i></button>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">INV-2023-003</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">UD Cahaya Abadi</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">13 Jun 2023</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp 8,200,000</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Paid</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <button class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-eye"></i></button>
                <button class="text-gray-600 hover:text-gray-900"><i class="fas fa-print"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="bg-gray-50 px-6 py-3 flex items-center justify-between border-t border-gray-200">
        <div class="text-sm text-gray-500">
          Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">24</span> results
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
</main>