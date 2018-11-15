    <?php
        session_start();
        require 'auth_db.php';
        //--------redirect if already logged in retrieve content from auth db ------
            if( isset($_SESSION['user_id'])){
                $records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
                $records->bindParam(':id', $_SESSION['user_id']);
                $records->execute();
                $results = $records->fetch(PDO::FETCH_ASSOC);

                $user = NULL;
                if(count($results) > 0) {
                    $user = $results;
                }
            }
    ?>
    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <?php if(!empty($user)): ?>
                <p style ="color: #FF6347;">Welcome <?= $user['email'];?></p>
            <?php endif; ?>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="text-uppercase">
                        <strong>Quantum Software Can help you bring your ideas to reality</strong>
                        </h1>
                        <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">We can help you build better websites using the latest technologies and frameworks!</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
