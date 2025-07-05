<div class="p-6">
    <!-- <h3 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Barang</h3> -->

    <form action="<?= site_url('barang/save') ?>" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
        <div>
            <label class="block text-gray-700">Product Code</label>
            <input type="text" name="product_code" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Stock</label>
            <input type="number" name="stock" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Price</label>
            <input type="number" name="price" step="0.01" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Status</label>
            <select name="status" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
                <option value="In Stock">In Stock</option>
                <option value="Low Stock">Low Stock</option>
                <option value="Out of Stock">Out of Stock</option>
            </select>
        </div>

        <div class="flex justify-end">
            <a href="<?= site_url('barang') ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded mr-2">Cancel</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Save</button>
        </div>
    </form>
</div>
