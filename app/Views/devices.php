<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="text-6xl flex justify-center p-4">Tabel Device IoT</div>
<div class="overflow-x-auto px-10">
    <table class="table w-full">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Brand</th>
                <th>Qty</th>
                <th>Satus</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_devices as $device) : ?>
                <tr>
                    <th><?= $device['id'] ?></th>
                    <th><?= $device['device_name'] ?></th>
                    <th><?= $device['device_brand'] ?></th>
                    <th><?= $device['device_quantity'] ?></th>
                    <th><?= $device['device_status'] ?></th>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<div>
</div>
<?= $this->endSection() ?>