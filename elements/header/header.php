    <header>
        <a href="/">Logo</a>
        <button class="burger" onclick="burgerOpenClose()">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav id="navigation" style='visibility: hidden; opacity: 0;'>
            <a href="/">home</a>
            <a href="">rules</a>
            <a href="/news/">news</a>
            <?php
                if (isset($_POST['logOut'])) {
                    unset($_SESSION['user']);
                    session_destroy();
                }
                if (!isset($_SESSION['user'])) {
                    echo '<a href="/login/">login</a>';
                }else{
                    echo '<form method="post">';
                    echo '    <button name="logOut">log out</button>';
                    echo '</form>';
                }
            ?>
        </nav>
    </header>
