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

	<?php 
    require_once "functions/functions.php";
    $title = "Авторизация";
  ?>	
  
   
</head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="tm-left-right-container">
                   <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="tm-blue-bg tm-left-column">                        
                        <div class="tm-logo-div text-xs-center">
                              <a href="index.php" title="Переход на главную страницу"><img src="img/dfddf.png" alt="Logo" width="100" height="100">
                            <h1 class="tm-site-name">Big Shop Audio</h1>
							 
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

     <!-- forgot -->
    <?php
      
      $data = $_POST;
      if (isset($data['do_forgot']))
      {
        //Регистрируем пользователя
        $errors = array();
        
        if(trim($data['email']) == '')
        {
          $errors[] = 'Введите Email!';
        }

        if(R::count('lesson', "email = ?", array($data['email'])) > 0 )
        {
        
        }
        else
        {
          $errors[] = 'Пользователь с таким Email не существует!';
        }

        if(empty($errors))
        {
          if (isset($_POST['do_forgot'])) {
            $email = $_POST['email'];
            $code = getPasswordOnEmail($email);
            $link = "http://localhost/siteaudio//changepassword.php?email=$email&code=$code";
            $subject = "Восстановление пароля";
            $message = "Ссылка на изменение пароля: $link";
            // Отправка
            $subject = "=?utf-8?B?".base64_encode($subject)."?=";
            $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
            if(mail($_POST['email'], $subject, $message, $headers))
              echo "<p style=color:green>Инструкция отправлена на указанный E-mail<p>";
            else
              echo "<p style=color:red>Сообщение не отправлено<p>";  
          }
        }

        else
        {
          echo '<div style="color: red;">'.array_shift($errors).'</div>';
        }

      }
    ?>
	
                    <!-- PRAVO!!!!!!!!!! -->
				<form action="restore.php" method="POST">
                    <div class="tm-right-column tm-PravStReg">
				<img src="img/music-421.jpg" alt="Header image" width="950" height="190">
                        <div class="tm-content-div">

                            <section id="welcome" class="tm-section">
								
                                <header>
								
                                    <h2 class="tm-welcome-title "style="text-align:center"  >Восстановление пароля</h2>
                                </header>
								<center> <input type="text" name="email" placeholder="Ваш email"/></center>
								</br>
								<center><button  name="do_forgot"> Восстановить пароль</button>
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
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