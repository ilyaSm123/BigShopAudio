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
                   <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="tm-blue-bg tm-left-column">                        
                        <div class="tm-logo-div text-xs-center">
                              <a href="index.php" title="Переход на главную страницу"><img src="img/dfddf.png" alt="Logo" width="100" height="100">
                            <h1 class="tm-site-name">Big Shop Audio</h1>
							 <button type="submit" class="float-right tm-buttonA "><a href="Auth.php" style="color:black">Авторизация</a></button>
							 <button type="submit" class="float-right tm-buttonR "><a href="Reg.php" style="color:black">Регистрация</a></button>
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
      if (isset($data['do_signup']))
      {
        //Регистрируем пользователя
        $errors = array();
        if(trim($data['username']) == '')
        {
          $errors[] = 'Введите логин!';
        }

        if(trim($data['email']) == '')
        {
          $errors[] = 'Введите Email!';
        }

        if($data['password'] == '')
        {
          $errors[] = 'Введите пароль!';
        }

        if($data['password_2'] != $data['password'])
        {
          $errors[] = 'Введенные пароли не совпадают!';
        }

        if(R::count('signup', "username = ?", array($data['username'])) > 0 )
        {
          $errors[] = 'Пользователь с таким логином уже существует!';
        }

        if(R::count('signup', "email = ?", array($data['email'])) > 0 )
        {
          $errors[] = 'Пользователь с таким Email уже существует!';
        }

       

      }
    ?>
					
                    <!-- PRAVO!!!!!!!!!! -->
				<form action="Reg.php" method="POST">
                    <div class="tm-right-column tm-PravStReg">
				<img src="img/music-421.jpg" alt="Header image" width="950" height="190">
                        <div class="tm-content-div">

                            <section id="welcome" class="tm-section">
								
                                <header>
									<?php if(empty($errors))
									{
									  //Всё хорошо, регистрируем
									  $user = R::dispense('signup');
									  $user->username = $data['username'];
									  $user->email = $data['email'];
									  $user->password = $data['password'];
									  R::store($user);
									  echo '<div style="color: white; text-align: center; ">Чтобы зарегистрироваться заполните поля снизу!</div>';
									  $data['username'] ='';
									  $data['email'] ='';
									  $data['password'] ='';
									  $data['password_2'] ='';
									}

									else
									{
									  echo '<div style="color: red; text-align: center;">'.array_shift($errors).'</div>';
									} ?>
                                    <h2 class="tm-welcome-title "style="text-align:center"  >Регистрация</h2>
                                </header>
                               <center><input type="text" name="username" placeholder="Ваше имя" value="<?php echo @$data['username']; ?>"></center>
								  </br>
								<center><input type="email" name="email" placeholder="Ваш email" value="<?php echo @$data['email']; ?>"></center>
								  </br>
									<center><input type="password" name="password" placeholder="Ваш пароль" value="<?php echo @$data['password']; ?>"></center>
								  </br>
									<center><input type="password" name="password_2" placeholder="Повторите ваш пароль" value="<?php echo @$data['password_2']; ?>"></center>							 
								  </br>
								<center><button  name="do_signup"> Зарегистрироваться</button>
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