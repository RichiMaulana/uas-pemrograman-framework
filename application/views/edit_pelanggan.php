<div class="p-6">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Edit Pelanggan</h3>

    <form action="<?= site_url('pelanggan/update/' . $customer->customer_code) ?>" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
        <div>
            <label class="block text-gray-700">Customer Code</label>
            <input type="text" name="customer_code" value="<?= $customer->customer_code ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="<?= $customer->name ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Company</label>
            <input type="text" name="company" value="<?= $customer->company ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Phone</label>
            <input type="text" name="phone" value="<?= $customer->phone ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="<?= $customer->email ?>" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex justify-end">
            <a href="<?= site_url('pelanggan') ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded mr-2">Cancel</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>
