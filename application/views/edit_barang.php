<div class="p-6">

    <form action="<?= site_url('barang/update/' . $barang->product_code) ?>" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
        <div>
            <label class="block text-gray-700">Product Code</label>
            <input type="text" name="product_code" value="<?= $barang->product_code ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="<?= $barang->name ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Stock</label>
            <input type="number" name="stock" value="<?= $barang->stock ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Price</label>
            <input type="number" step="0.01" name="price" value="<?= $barang->price ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Status</label>
            <select name="status" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
                <option value="In Stock" <?= $barang->status == 'In Stock' ? 'selected' : '' ?>>In Stock</option>
                <option value="Low Stock" <?= $barang->status == 'Low Stock' ? 'selected' : '' ?>>Low Stock</option>
                <option value="Out of Stock" <?= $barang->status == 'Out of Stock' ? 'selected' : '' ?>>Out of Stock</option>
            </select>
        </div>

        <div class="flex justify-end">
            <a href="<?= site_url('barang') ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded mr-2">Cancel</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>
