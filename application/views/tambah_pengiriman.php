<form action="<?= site_url('pengiriman/save') ?>" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
    <div>
        <label class="block text-gray-700">Delivery Order Number</label>
        <input type="text" name="do_number" required placeholder="DO-2025-001" class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
        <label class="block text-gray-700">Related Invoice</label>
        <select name="sales_transaction_id" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
            <option value="">-- Select Invoice --</option>
            <?php foreach ($sales_list as $sales): ?>
                <option value="<?= $sales->id ?>"><?= $sales->invoice_number ?> - <?= format_rupiah($sales->total_amount) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label class="block text-gray-700">Items Count</label>
        <input type="number" name="items_count" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
    </div>

    <div>
        <label class="block text-gray-700">Status</label>
        <select name="status" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
            <option value="On Process">On Process</option>
            <option value="On Delivery">On Delivery</option>
            <option value="Delivered">Delivered</option>
            <option value="Canceled">Canceled</option>
        </select>
    </div>

    <div class="flex justify-end">
        <a href="<?= site_url('pengiriman') ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded mr-2">Cancel</a>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Save</button>
    </div>
</form>
