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
	<?php 
	require_once "functions/functions.php";
	?>


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
						
                            <img src="img/dfddf.png" alt="Logo" href="index.php" width="100" height="100">
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
                    
                    <!-- PRAVO!!!!!!!!!! -->
                    <div class="tm-right-column">
                        <figure>
						 <?php if (isset($_SESSION['logged_user'])): ?>
											Привет, <?php echo $_SESSION['logged_user']->username; ?>!
											<button type="submit" class="float-right tm-buttonA "><a href="Logout.php"style="color:black">Выйти из системы</a></button>
										<?php else : ?>
										<button type="submit" class="float-right tm-buttonR "><a href="Reg.php" style="color:black">Регистрация</a></button>
											<button type="submit" class="float-right tm-buttonA "><a href="Auth.php"style="color:black">Авторизация</a></button>
										<?php endif; ?>
										
										<?php echo date("d/m/Y")?>
										
										  
										 
                            <img src="img/beats-audio-fonds-wallpaper.png" alt="Header image" class="img-fluid">    
                        </figure>

                        <div class="tm-content-div">
                        
                            <section id="welcome" class="tm-section">
                                <header>
                                    <h2 class="tm-blue-text tm-welcome-title tm-margin-b-45">Почему именно мы?</h2>
                                </header>
                                <p> Мы занимается не просто продажей автозвука, но и качественным подбором компонентов, установкой, настройкой систем любой сложности. Мы имеем богатый опыт в инсталляциях как повседневных, так и для автозвукового спорта.Вы можете выбрать аудио компоненты ведущих мировых и российских производителей. Собрать систему от начального до профессионального уровня. У нас вы получите качественную консультацию по подбору и установке. </p>
                            </section>
                          
                            <section id="about" class="tm-section">
                                <div class="row">                                                                
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 push-lg-4 push-md-5">
                                        <header>
                                            <h2 class="tm-blue-text tm-section-title tm-margin-b-45">Наши сборки на ваш вкус и цвет</h2>
                                        </header>
                                        <p>1)Подбор на любой автомобиль</p>
                                        <p>2)Лучшие компоненты от всемирных брендов</p>
                                        <p>3)Быстрая и дешевая установка</p>
                                        <a href="#" class="tm-button tm-button-wide">Наверх</a>  
                                    </div>

                                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 pull-lg-8 pull-md-7 tm-about-img-container">
                                        <img src="img/hybx7nh4slo.C86Ta.jpg" alt="Image" class="img-fluid"">    
                                    </div>  
                                </div>                            
                            </section>  

                             
                            <section id="galleryone" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Последние работы</h2></header>
                                <div class="tm-gallery-container tm-gallery-1">
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="img/1.jpg"><img src="img/1.jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="img/2.jpg"><img src="img/2.jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="img/5 (2).jpg"><img src="img/5 (2).jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="img/5 (1).jpg"><img src="img/5 (1).jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>
                                    <div class="tm-img-container tm-img-container-1">
                                        <a href="img/6.jpg"><img src="img/6.jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>                                    
                                </div>
                            </section>

                            
                            <section id="secondgallery" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Полная шумоизоляция вашего авто</h2></header>
                                <div class="tm-gallery-container tm-gallery-2">
                                    <div class="tm-img-container tm-img-container-2">
                                        <a href="img/1516541719_gopr3977.ddYF5.jpg"><img src="img/1516541719_gopr3977.ddYF5.jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>
                                    <div class="tm-img-container tm-img-container-2">
                                        <a href="img/92512602_w640_h640_sam_3348.Ll9St.jpg"><img src="img/92512602_w640_h640_sam_3348.Ll9St.jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>
                                    <div class="tm-img-container tm-img-container-2">
                                        <a href="img/33.ZQ7zo.jpg"><img src="img/33.ZQ7zo.jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>                                    
                                </div>
                            </section>

                             
                            <section id="thirdgallery" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Процесс установки акустики</h2></header>
                                <div class="tm-gallery-container tm-gallery-3">
                                    <div class="tm-img-container tm-img-container-3">
                                        <a href="img/sm_img-1221528_980x600.jpg"><img src="img/sm_img-1221528_980x600.jpg" alt="Image" class="img-fluid tm-img-tn"></a>    
                                    </div>
                                    <div class="tm-img-container tm-img-container-3">
                                        <a href="img/sm_img-908474_980x600.jpg"><img src="img/sm_img-908474_980x600.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-3">
                                        <a href="img/IMG_5419.jpg"><img src="img/IMG_5419.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>
                                    <div class="tm-img-container tm-img-container-3">
                                        <a href="img/52a8c37a6e493cbdd66ba37801ad3b99.jpg"><img src="img/52a8c37a6e493cbdd66ba37801ad3b99.jpg" alt="Image" class="img-fluid tm-img-tn"></a>
                                    </div>                                    
                                </div>
                            </section>
							
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		$(document).ready (function () {
			$("#done").click (function () {
				$('#messageShow').hide ();
				var name = $("#name").val ();
				var email = $("#email").val ();
				var subject = $("#subject").val ();
				var message = $("#message").val ();
				var fail = "";
				
				}
				$.ajax ({
					url: '/ajax/feedback.php',
					type: 'POST',
					cache: false,
					data: {'name': name, 'email': email, 'subject': subject, 'message': message},
					dataType: 'html',
					success: function (data) {
						$('#messageShow').html (data + "<div class='clear'><br></div>");
						$('#messageShow').show ();
					}
				});
			});
		});
	</script>
                           
                            <section id="contact" class="tm-section">
                                <header><h2 class="tm-blue-text tm-section-title tm-margin-b-30">Связаться с нами</h2></header>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="#contact" method="post" class="contact-form">
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Ваша Имя"  required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Ваша email почта"  required/>
                                            </div>
											<input type="text" class="form-control" placeholder="Тема сообщения" id="subject" name="subject"> <br/>
                                            <div class="form-group">
                                                <textarea id="message" name="message" class="form-control" rows="9" placeholder="Сообщение " required></textarea>
                                            </div>                                            
                                            <button type="submit" id="done"  name="done" class="float-right tm-button">Отправить</button>
                                        </form>    
                                    </div>
                                    
                                    <div class="col-lg-6 tm-contact-right">
                                        <p>
                                        Мы всегда рады общению с нашими клиентами. Если у Вас есть какие-либо пожелания, предложения, замечания, идеи касающиеся работы нашего сайта - пишите нам, и мы с благодарностью примем Ваше мнение во внимание.
                                        </p>
                                        <address>
                                            Адрес нашей студии<br>
                                            ул. Доватора, 132<br>
                                            Режим работы: 10.00 - 22.00 пн-вс 
                                        </address>
                                    </div>
                                </div>
                                
                            </section>
                            <footer>
                                <p class="tm-copyright-p">ИЛЬЯ СМИРНОВ &copy; <span class="tm-current-year">2018</span> Сайт на курсовой 
                                
                                | Мой ВК <a href="https://vk.com/ti_popal_bratishka" target="_parent">Перейти</a></p>
                            </footer>
                        </div>  
                        
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