<main class="p-6">
  <!-- Goods Content -->
  <div id="goods-content" class="content-section">
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
      <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h3 class="font-semibold text-gray-800">List Barang</h3>
        <a href="<?= site_url('barang/add'); ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
          <i class="fas fa-plus mr-2"></i> Tambah Barang
        </a>
      </div>
      <div class="p-6">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Code</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php foreach ($barang_list as $barang): ?>
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600"><?php echo $barang->product_code ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $barang->name ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $barang->stock ?></td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo format_rupiah($barang->price); ?></td>
                  <?php if ($barang->status == 'In Stock'): ?>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"><?php echo $barang->status ?></span>
                    </td>
                  <?php elseif ($barang->status == 'Low Stock'): ?>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800"><?php echo $barang->status ?></span>
                    </td>
                  <?php elseif ($barang->status == 'Out of Stock'): ?>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"><?php echo $barang->status ?></span>
                    </td>
                  <?php endif; ?>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="<?= site_url('barang/edit/' . $barang->product_code) ?>" class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i></a>
                    <a href="<?= site_url('barang/delete/' . $barang->product_code) ?>" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</main>