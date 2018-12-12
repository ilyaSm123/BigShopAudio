<?php
  require "db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Big Shop Audio</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">                                      
    <link rel="stylesheet" href="assets/css/magnific-popup.css">                               
    <link rel="stylesheet" href="assets/css/templatemo-style.css"/>                                 
   
</head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                 
                    <div class="tm-blue-bg tm-left-column">                        
                        <div class="tm-logo-div text-xs-center">
                             <a href="index.php" title="Переход на главную страницу"><img src="img/dfddf.png" alt="Logo" width="100" height="100">
                            <h1 class="tm-site-name">Big Shop Audio</h1>
							<button type="submit" class="float-right tm-buttonR">Регистрация</button>
                        </div>
                        <nav class="tm-main-nav">
                            <ul class="tm-main-nav-ul">
                                <li class="tm-nav-item">
                                    <a href="#welcome" class="tm-nav-item-link">О нас</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#about" class="tm-nav-item-link">Наши сборки</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#galleryone" class="tm-nav-item-link">Наши последние работы</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#secondgallery" class="tm-nav-item-link">Шумоизоляция</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#thirdgallery" class="tm-nav-item-link">Установка компонентов</a>
                                </li>
                                <li class="tm-nav-item">
                                    <a href="#contact" class="tm-nav-item-link">Связаться с нами</a>
                                </li>
                            </ul>
                        </nav>                                         
                    </div> 
	<?php
      $data = $_POST;
      if (isset($data['enter']))
      {
        $errors = array();
        if($data['username'] == '')
        {
          $errors[] = 'Введите логин';
        }
        $user = R::findone('signup', 'username = ?', array($data['username']));
        if ($user)
        {
          //Логин существует
          if ($data['password'] == $user->password)
          {
            $_SESSION['logged_user'] = $user;
           
          }
          else
          {
            $errors[] = 'Неверно введён пароль!';
          }
        }
        else
        {
          $errors[] = 'Пользователь с таким логином не найден!';
        }
        
      }
    ?>

    <?php
    if (isset($data['reset']))
    {
      header('Location: restore.php');
    }
    ?>
                    <!-- PRAVO!!!!!!!!!! -->
				<form action="Auth.php" method="POST">
                    <div class="tm-right-column tm-PravStReg">
                       
                        <div class="tm-content-div">
                        
                            <section id="welcome" class="tm-section">
							
                                <header>
                                <h2 class=" tm-autt tm-welcome-title tm-margin-b-45"style="text-align:center"  >Вход в систему</h2>
                                </header>
								<?php if(!empty($errors))
								{
								  echo '<div style="color: red; text-align: center;">'.array_shift($errors).'</div>';
								} ?>
                                <center> <input type="text" name="username"  placeholder="Логин" value="<?php echo @$data['username']; ?>"></center>
								<br/>
								<center><input type="password" name="password" placeholder="Пароль" /></center>
								<br/>
								<center><input  type="submit" name="enter" value="Войти"></center>
								<br/>
								<center><button type="submit" class="float-right  "><a href="restore.php"style="color:black">Забыли пароль?</a></button></center>
								<hr align="center" width="300" size="2" color=" #36E052 " />
                            </section>
                 
                            <footer>
                                <p class="tm-copyright-p">ИЛЬЯ СМИРНОВ &copy; <span class="tm-current-year">2018</span> Сайт на курсовой 
                                
                                | Мой ВК <a href="https://vk.com/ti_popal_bratishka" target="_parent">Перейти</a></p>
                            </footer>
                        </div>  
                        
                    </div> 
				</form>
                </div>
            </div> 
        </div> 
                
       
        <script src="js/jquery-1.11.3.min.js"></script>           
        <script src="js/jquery.magnific-popup.min.js"></script>    
        <script src="js/jquery.singlePageNav.min.js"></script>     
        <script>     
       
            $(document).ready(function(){

                
                $('.tm-main-nav').singlePageNav({
                    'currentClass' : "active",
                    offset : 20
                });

                
                $('.tm-gallery-1').magnificPopup({
                  delegate: 'a', 
                  type: 'image',
                  gallery: {enabled:true}
                 
                }); 

                $('.tm-gallery-2').magnificPopup({
                  delegate: 'a', 
                  type: 'image',
                  gallery: {enabled:true}
                  
                }); 

                $('.tm-gallery-3').magnificPopup({
                  delegate: 'a', 
                  type: 'image',
                  gallery: {enabled:true}
                 
                }); 

                $('.tm-current-year').text(new Date().getFullYear());                
            });
        </script>             
</body>
</html>