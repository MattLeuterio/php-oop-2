<?php
// Include Computer & Software Warehouse
include_once __DIR__ . '/partials/classes/warehouse/computerWarehouse.php';
include_once __DIR__ . '/partials/classes/warehouse/softwareWarehouse.php';

// var_dump($computer1);
// var_dump($software1);

// Head
include_once __DIR__ . '/partials/template/head.php';

?>


<body>
    <!-- App Container -->
    <div class="app">
        
        <?php //header
            include __DIR__ . '/partials/template/header.php';
        ?>
        
        <main class="main-content">
            
            <section id="computers" class="main-section container">
                <div class="row">
                    
                    <!-- Computer 1 -->
                    <div class="card mb-3 mr-3" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $computer1->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$computer1->brand $computer1->model"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $computer1->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Color: <?php echo $computer1->color; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Brand: <?php echo $computer1->brand; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $computer1->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $computer1->computerCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Computer 2 -->
                    <div class="card mb-3 mr-3" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $computer2->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$computer2->brand $computer2->model"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $computer2->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Color: <?php echo $computer2->color; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Brand: <?php echo $computer2->brand; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $computer2->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $computer2->computerCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Computer 3 -->
                    <div class="card mb-3 mr-3" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $computer3->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$computer3->brand $computer3->model"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $computer3->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Color: <?php echo $computer3->color; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Brand: <?php echo $computer3->brand; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $computer3->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $computer3->computerCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Computer 4 -->
                    <div class="card mb-3 mr-3" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $computer4->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$computer4->brand $computer4->model"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $computer4->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Color: <?php echo $computer4->color; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Brand: <?php echo $computer4->brand; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $computer4->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $computer4->computerCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="software" class="main-section container">
                <div class="row">
                    
                    <!-- Software 1 -->
                    <div class="card mb-3 mr-3" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $software1->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$software1->softwareHouse $software1->name"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $software1->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            House: <?php echo $software1->softwareHouse; ?>
                                        </li>
                                        <li class="list-group-item">
                                            OS: <?php echo $software1->os; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $software1->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $software1->softwareCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Software 2 -->
                    <div class="card mb-3 mr-3" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $software2->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$software2->softwareHouse $software2->name"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $software2->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            House: <?php echo $software2->softwareHouse; ?>
                                        </li>
                                        <li class="list-group-item">
                                            OS: <?php echo $software2->os; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $software2->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $software2->softwareCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Software 3 -->
                    <div class="card mb-3 mr-3" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $software3->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$software3->softwareHouse $software3->name"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $software3->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            House: <?php echo $software3->softwareHouse; ?>
                                        </li>
                                        <li class="list-group-item">
                                            OS: <?php echo $software3->os; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $software3->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $software3->softwareCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Software 4 -->
                    <div class="card mb-3 mr-3" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $software4->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$software4->softwareHouse $software4->name"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $software4->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            House: <?php echo $software4->softwareHouse; ?>
                                        </li>
                                        <li class="list-group-item">
                                            OS: <?php echo $software4->os; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $software4->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $software4->softwareCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </main>    

<?php

// footer and tag's close
include_once __DIR__ . '/partials/template/footer.php';

?>