<?php

    require 'database.php';

    $categories = $conn->query("SELECT * FROM categories ORDER BY id ASC");
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <section class="hero-section">
            <div class="container">

                <div class="text-center text-white mb-5">
                    <h1>DelphianLogic in Action</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo.</p>
                </div>

                <div class="row g-0">

                    <!-- Left Tabs -->
                    <div class="col-lg-3 tab_div" >
                        <?php
                            $first = true;

                            while($row = $categories->fetch_assoc()) {
                            ?>
                        <div class="tab-card <?php echo $first ? 'active-tab' : ''; ?>" data-category="<?php echo $row['id']; ?>">
                            <img src="assets/images/<?php echo $row['icon']; ?>" alt="">
                            <span> <?php echo $row['title']; ?></span>

                            <img class="mobile-toggle-icon" src="assets/images/<?php echo $first ? 'minus-01.svg' : 'plus-01.svg'; ?>"alt="">
                        </div>

                        <?php
                        $first = false;
                        }
                        ?>

                    </div>

                    <!-- Center Content -->
                    <div class="col-lg-5">
                        <div class="content-panel">

                            <span class="tag">
                                DIGITAL LEARNING INFRASTRUCTURE
                            </span>

                            <h2>
                                Usability enhancement and Training for Transaction Portal for Customers
                            </h2>

                            <a href="#" class="learn-more">Learn More <img src="assets/images/arrow-right.svg" alt=""></a>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-4">
                        <div class="image-panel">
                            <img src="assets/images/DL-Technology.jpg"
                                class="img-fluid"
                                alt="">
                        </div>
                    </div>

                </div>

                <div class="slider-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        
        </section>

        
    </body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/custom.js"></script>
</html>

