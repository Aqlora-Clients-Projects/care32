<!DOCTYPE html>
<html lang="en">
<head>
    <?= view('includes/header_links'); ?>
    <?= $this->renderSection('styles') ?>
</head>
<body style="background-color: var(--ui-bg);">
    <!-- We use the custom floating navbar for the modern dark UI -->
    <?= view('includes/navbar'); ?>

    <!-- MAIN PAGE CONTENT -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= view('includes/footer'); ?>
    
    <?= $this->renderSection('scripts') ?>
</body>
</html>
