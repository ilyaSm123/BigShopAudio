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

     <!-- forgot container -->
     <form action="changepassword.php" method="POST">
    <?php
      $data = $_POST;
      $email = $_REQUEST['email'];
      $code = $_REQUEST['code'];
      $password = getPasswordOnEmail($email);
      if ($password !== $code) {
        header("Location: index.php");
        exit;
      }
      if (isset($data['do_changepass']))
      {
        $errors = array();
        $login = getLoginOnEmail($email);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if($data['password'] == '')
        {
          $errors[] = 'Введите пароль!';
        }

        if($data['password_2'] != $data['password'])
        {
          $errors[] = 'Введенные пароли не совпадают!';
        }

        if(empty($errors))
        {
          //Всё хорошо, изменяем
          setPassword($login, $password);
          echo '<div style="color: green;">Вы успешно изменили пароль!</div>';
        }

        else
        {
          echo '<div style="color: red;">'.array_shift($errors).'</div>';
        }
      }
      ?>
	
                    <!-- PRAVO!!!!!!!!!! -->
								<div id="containerForgot" class="tabContainer active">
						<h2 class="loginTitle">Новый пароль</h2>
						</br>
						<div class="loginContent">
						  <div class="inputWrapper">
							<input type="password" name="password" placeholder="Новый пароль" />
							</br>
						  </div>  
						  <div class="inputWrapper">
							<input type="password" name="password_2" placeholder="Подтвердите новый пароль" />
							</br>
						  </div>
						  <div class="placeholder"></div>
						</div>
						<input type="hidden" name="email" value="<?php echo $email;?>"/>
						<input type="hidden" name="code" value="<?php echo $code;?>"/>
						<button class="redBox" name="do_changepass"><span class="iconForgot"></span> Восстановить</button>
						</br>
						<div class="clear"></div>
					</div>
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