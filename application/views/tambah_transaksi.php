<div class="p-6">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Transaksi</h3>

    <form action="<?= site_url('transaksi/save') ?>" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
        <div>
            <label class="block text-gray-700">Invoice Number</label>
            <input type="text" name="invoice_number" required placeholder="INV-2025-001" class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block text-gray-700">Customer</label>
            <select name="customer_id" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
                <option value="">-- Pilih Pelanggan --</option>
                <?php foreach ($pelanggan as $p): ?>
                    <option value="<?= $p->id ?>"><?= $p->name ?> (<?= $p->company ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block text-gray-700">Product</label>
            <select name="product_code" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
                <option value="">-- Select Product --</option>
                <?php foreach ($barang as $b): ?>
                    <option value="<?= $b->product_code ?>"><?= $b->name ?> (Stock: <?= $b->stock ?>, Price: <?= format_rupiah($b->price) ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block text-gray-700">Items Count</label>
            <input type="number" name="items_count" required min="1" class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block text-gray-700">Total Amount (Rp)</label>
            <input type="number" name="total_amount" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block text-gray-700">Status</label>
            <select name="status" required class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500">
                <option value="Paid">Paid</option>
                <option value="Pending">Pending</option>
                <option value="Canceled">Canceled</option>
            </select>
        </div>

        <div class="flex justify-end">
            <a href="<?= site_url('transaksi') ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded mr-2">Cancel</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Save</button>
        </div>
    </form>
</div>
