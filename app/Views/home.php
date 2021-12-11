<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="hero min-h-screen" style="background-image: url(&quot;https://images.unsplash.com/photo-1614846027182-cecfee3a427b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80&quot;);">
<div class="hero-overlay bg-opacity-60"></div> 
<div class="text-center hero-content text-neutral-content">
    <div class="max-w-md">
    <h1 class="mb-5 text-5xl font-bold">
            Hola Sahabat PertaLN
        </h1> 
    <p class="mb-5">
            This is home for million IoT device will born
        </p> 
    <button class="btn btn-primary">
        <a href="<?= base_url('/devices')?>">Get Started</a>
    </button>
    </div>
</div>
</div>
<?= $this->endSection() ?>