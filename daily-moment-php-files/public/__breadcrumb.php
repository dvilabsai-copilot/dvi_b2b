<?php

$_module_title_name = breadcrumbTITLE($currentpage);

$main_pageTITLE = $lang["__" . $_module_title_name . "title"];

if ((isset($_GET['route'])) && $_GET['route'] != '') :
    $add_route = $_GET['route'];
endif;
$sub_pageTITLE = $lang["__" . $_module_title_name . "title" . $add_route];

?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= $currentpage; ?>">
                <?= $main_pageTITLE; ?>
            </a></li>
        <?php if (isset($_GET['route']) && ($_GET['route'] == 'templist')) : ?>
            <li class="breadcrumb-item" aria-current="page">Bulk Upload</li>
        <?php endif; ?>
        <?php if (isset($_GET['route']) && $_GET['route'] != '') : ?>
            <li class="breadcrumb-item" aria-current="page"><?= $sub_pageTITLE; ?></li>
        <?php endif; ?>
    </ol>
</nav>