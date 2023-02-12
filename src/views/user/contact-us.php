
    <title>Contact Us - ABC_SHOP</title>
    <?php include ROOT_DIR.'/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php';?>
<body>

    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form>
                    <div class="form-group"><label for="name">Name</label><input class="form-control" type="text" id="name" name="name"></div>
                    <div class="form-group"><label for="subject">Subject</label><input class="form-control" type="text" id="subject" name="subject"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control" type="email" id="email" name="email"></div>
                    <div class="form-group"><label for="message">Message</label><textarea class="form-control" id="message" name="message"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
                </form>
            </div>
        </section>
    </main>
    <?php include ROOT_DIR.'/src/views/user/footer.php'; ?>