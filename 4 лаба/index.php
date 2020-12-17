<?php
    include 'session.php';
    include 'db.php';
?>

<link rel="stylesheet" href="style.css">

<script>
  formElem.onsubmit = async (e) => {
    e.preventDefault();
    let response = await fetch('/article/formdata/post/user', {
      method: 'POST',
      body: new FormData(formElem)
    });
    let result = await response.json();
    alert(result.message);
  };
</script>

<div class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <header class="masthead">
        <h2 class="site-title">
        Интернет-магазин "Мир книг"
        <?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'].' <a href="logout.php">Выйти</a>';
            }
        ?> 
        </h2>
    </header>

    <main id="content" class="main-content">
        <h2>О нас</h2>
        <p>Мир книг - интернет-магазин крупнейшей российской группы издательств, в которую входят ЭКСМО, АСТ и Манн, Иванов и Фербер. Это значит, что большая часть популярных книжных новинок, выходящих в данных издательствах, в том числе под брендами Бомбора, Corpus, Mainstream, Редакция Елены Шубиной, Вилли-Винки, Fanzon, Комильфо, Издательский дом Мещерякова и др., первыми появляются у нас. На книжные новинки, которые только планируются издательствами к выпуску, у нас доступен предварительный заказ.</p>
        <img src="1.jpg" alt="альтернативный текст"> 
    </main>

    <aside class="sidebar">
        
        <ul>
            <li><a href="catalog.html">Каталог</a></li>
            <li><a href="sales.html">Лидеры продаж</a></li>
            <li><a href="organization.html">Ваш отзыв</a></li>
            
            
        </ul>
    </aside>
    <?php
    if(!isset($_SESSION['login'])){
        echo '
    <aside class="twin">
        <div id="container_demo" >
    <a class="hiddenanchor" id="tosubscribe"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
        <div id="login" class="animate form">
            <form  action="login.php" method="post" autocomplete="on">
                <h1>Вход</h1>
                <p>
                    <label for="username" class="uname" data-icon="u" > Адрес электронной почты или имя пользователя </label>
                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                </p>
                <p>
                    <label for="password" class="youpasswd" data-icon="p"> Пароль </label>
                    <input id="password" name="password" required="required" type="password" placeholder="fgbhk534" />
                </p>
                
                <p class="login button">
                    <input type="submit" value="Вход" />
                </p>
                <p class="change_link">
                    Не зарегистрированы ?
                    <a href="#tosubscribe" class="to_subscribe">Присоединяйтесь к нам</a>
                </p>
            </form>
        </div>
        </div>
        </aside>
        <aside class="twin">
            <div id="subscribe" class="animate form">
                <form  name="bodjaga" action="reg.php" method="post">
                    <h1> Регистрация </h1>
                    <p>
                        <label for="usernamesignup" class="uname" data-icon="u">Логин</label>
                        <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                    </p>
                    <p>
                        <label for="emailsignup" class="youmail" data-icon="e" > Email</label>
                        <input id="emailsignup" name="mail" required="required" type="text" placeholder="mysupermail@mail.com"/>
                    </p>
                    <p>
                        <label for="passwordsignup" class="youpasswd" data-icon="p">Пароль </label>
                        <input id="passwordsignup" name="password" required="required" type="password" placeholder="fgbhk534"/>
                    </p>
                    <p>
                        <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Пожалуйста, подтвердите ваш пароль </label>
                        <input id="passwordsignup_confirm" name="password_confirm" required="required" type="password" placeholder="fgbhk534"/>
                    </p>
                    <p class="signin button">
                        <input type="submit" value="Зарегистрироваться" onClick="zhaba();">
                    </p>
                    <p class="change_link">
            Уже участник ?
                        <a href="#tologin" class="to_subscribe"> Войти  </a>
                    </p>
                </form>
            </div>
        </div>
        </aside>
    
        ';
    }
 ?>
 <footer class="colophon grid">
             <aside>2020 © Интернет-магазин "Мир книг" - проект ООО "Мой Мир"</a>.</aside>
        </footer>
    
    </div>