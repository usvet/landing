<!doctype html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/syte_lights.css">
  <?= $links ?>
  <title><?= $title ?></title>
</head>
<body>
  <header>
    <nav>
      <ul class="navigation">
        <li><a href="#">Главная</a></li>
        <li><a href="#C2">Рыбалка</a></li>
        <li><a href="#C3">История</a></li>
        <li><a href="#C4">Фотогалерея</a></li>
        <li><a href="#C5">Вход в личный кабинет </a></li>
      </ul>
    </nav>
    <div class="container">
      <div class="mySlides">
        <img src="https://s3.nat-geo.ru/images/2019/5/16/434b70c7ccb54cbd92976083d2c600e9.max-1200x800.jpg" style="width: 100% ">
        <div class="centered">Рыбинское водохранилище</div>
        <div class="cent">Вдали от городского шума и суеты...</div>
      </div>
      
      <div class="mySlides">
        <img src="https://echo76.ru/assets/img/news/1805/1601.jpg" style="width: 100%">
        <div class="centered">Рыбинское водохранилище</div>
      </div>
    
      <div class="mySlides">
        <img src="https://i.ytimg.com/vi/7F9VmO6bJNs/maxresdefault.jpg" style="width: 100%">
        <div class="centered">Рыбинское водохранилище</div>
      </div>
        
      <div class="mySlides">
        <img src="img/Закат Рыбинка.JPG" style="width: 100%">
        <div class="centered">Рыбинское водохранилище</div>
      </div>
    
      <div class="mySlides">
        <img src="https://avatars.mds.yandex.net/get-zen_doc/1652143/pub_5dc4030faad43600add927d6_5dc4035eaad43600add927d9/scale_1200" style="width: 100%">
        <div class="centered">Рыбинское водохранилище</div>
      </div>
        
      <div class="mySlides">
        <img src="https://cdn.photosight.ru/img/5/33c/5645988_xlarge.jpg" style="width: 100%">
        <div class="centered">Рыбинское водохранилище</div>
      </div>
        
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
      <div class="caption-container">
        <p id="caption"></p>
      </div>
    
      <div class="row" >
        <div class="column">
          <img class="demo cursor" src="https://s3.nat-geo.ru/images/2019/5/16/434b70c7ccb54cbd92976083d2c600e9.max-1200x800.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
        </div>
        <div class="column">
          <img class="demo cursor" src="https://echo76.ru/assets/img/news/1805/1601.jpg" style="width: 100%" onclick="currentSlide(2)" alt="">
        </div>
        <div class="column">
          <img class="demo cursor" src="https://i.ytimg.com/vi/7F9VmO6bJNs/maxresdefault.jpg" style="width:100%"  onclick="currentSlide(3)" alt="">
        </div>
        <div class="column">
          <img class="demo cursor" src="img/Закат Рыбинка.JPG" style="width:100%" onclick="currentSlide(4)" alt="">
        </div>
        <div class="column">
          <img class="demo cursor" src="https://avatars.mds.yandex.net/get-zen_doc/1652143/pub_5dc4030faad43600add927d6_5dc4035eaad43600add927d9/scale_1200" style="width:100%" onclick="currentSlide(5)" alt="">
        </div>    
        <div class="column">
          <img class="demo cursor" src="https://cdn.photosight.ru/img/5/33c/5645988_xlarge.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
        </div>
      </div>
    </div>
    </header>
    <main>  
      <div>
        <h1 id="C2" class="gallery-header">Рыбалка на Рыбинском водохранилище</h1>
        
          <p class="center-text">Рыбинское водохранилище прекрасное место для увлекательной рыбалки. Оно относится к числу крупнейших водоемов центральной части России. Расположено оно в Ярославской области на реке Волге.</p>
            
          <p class="center-text">Рыбинское водохранилище является одним из самых чистых водоемов центральной части России. Водоем часто называют морем, так как при сильном ветре здесь поднимаются высокие волны, иногда они могут достигать трех метров, поэтому рыбаку следует быть предельно осторожным, отправляясь рыбачить на лодке или катере.</p>
          <p class="center-text">Рыбинское водохранилище иначе называют Рыбинка. Береговая линия водоема низкая, дно преимущественно песчаное или песчано-глинистое.</p>
          <p class="center-text">Водохранилще славится разнообразием водных обитателей. Там живёт около 40 разновидностей рыбы. Можно встретить стерлядь, угря, щуку, пелядь, корюшку, окуня, язя, чехонь и другие разновидости. Однако самыми желанными для рыболовов являются представители семейства карповые, а также щука, налим, судак и густера, окунь. Окунь здесь, кстати говоря, имеет довольно весомые габариты, которыми и славится. Его вес может достигать 1,5 кг, а при благоприятных условиях даже больше.</p>
          <p class="center-text">Считается, что лучшие места для рыбалки – те, где в водохранилища впадают окружающие реки: Сить, Молога, Шексна и другие. Именно в таких местах и наблюдается скопление множества рыболовных баз. К наиболее «рыбным» местам можно отнести села Брейтово и Прозорово, а также города Пошехонье, Весьегонск и Череповец.</p>
          </div>
          <div class="gallery">
            <img src="img/IMG_20180605_103204.jpg" alt="">
            <img src="img/33.jpg" alt="">
            <img src="http://www.fishlovlya.ru/_nw/8/s54846923.jpg" alt="">
          </div>
          <p class="center-text">В летний период года вода в Рыбинском море нагревается до плюс 25 градусов. Летом наблюдается отличный клев рыбы, а соответственно и хороший улов. Хищные особи, например, окунь и щука в жаркий период водятся ближе к отмелям, где рыба охотится на малька, поэтому именно в таких местах можно получить богатый улов этой рыбы. Елец, плотва и лещ хорошо ловятся на фидер с берега.</p>
          <p class="center-text">Размеры водоема большие, а при сильном ветре могут подняться высокие волны, поэтому необходимо заранее убедиться, что плавсредство надежное и полностью исправное. Если взять с собой лодку не получается по каким-либо причинам, ее можно арендовать на любой рыболовной базе. Поймать живца в водохранилище очень нелегко, поэтому его лучше привезти с собой.</p>
          <div class="gallery">
            <img src="https://fion.ru/images/notes/f29560694ae3938b98ade7148a4cae3f.JPG" alt="">
            <img src="http://bazamedvedizza.ru/wp-content/uploads/vaa.jpg" alt="">
            <img src="http://bazamedvedizza.ru/wp-content/uploads/foto12-3.jpg" alt="">
          </div>
          <p class="center-text">Зимняя рыбалка на Рыбинском водохранилище начинается с появлением первого льда в ноябре и длится до начала апреля. В начале зимы, пока лед еще не очень прочный рыбу ловят с берега, именно на мелководье рыба особенно активно клюет в этот период.</p>
          <p class="center-text">К середине зимы клев значительно ослабевает, ловить нужно на середине водоема в глубоководных местах, так как рыба уходит от берега на 10 метров и более. Чтобы добраться до уловистых мест, лучше всего воспользоваться снегоходом.</p>
          <p class="center-text">Щука отлично ловится на жерлицы, а судак и плотва на мормышку, подсаживая тюльку. К концу марта — середине апреля лед на водохранилище становится очень рыхлым. В этот период рыбалка становится невозможной и к тому же опасной.</p>
        </div>
            <div class="gallery">
              <img src="img/IMG_2012.JPG" alt="">
              <img src="img/IMG_20200215_162826.jpg" alt="">
              <img src="img/rybinskoe_vdhr.jpg" alt="">
            </div>
            <button onclick="topFunction()" id="order-button" title="Go to top">Главная страница</button>
         <h1 id="C3" class="gallery-header">История</h1>
         <div class="row_col">
          <div class="column_c">
            <p class="text_column">Около 17 тысяч лет назад на месте Рыбинского водохранилища было ледниковое озеро. Постепенно оно обмелело, и возникла обширная Молого-Шекснинская низменность. Рыбинское водохранилище планировалось как самое большое по площади искусственное озеро в мире.</p> 
            <p class="text_column">Планы по строительству водохранилища в верхнем течении Волги появились еще в 1923 году и носили название «Большая Волга». Рыбинское водохранилище должно было стать одним из 8 каскадов, облегчающих судоходство на Верхней Волге и соединияющих Балтийский и Волжский бассейны. Рыбинское водохранилище стало составной частью так называемого Волжского каскада, превратившего Москву в «порт пяти морей». Окончательное решение о строительстве водохранилища было принято на Пленуме ЦК ВКП(Б) в июне 1931 года. Однако перед устройством водохранилища пришлось прорыть канал им. Москвы.</p>
            <p class="text_column">Строительство Рыбинского гидроузла началось в 1935 году у деревушки Переборы выше места впадения Шексны в Волгу.К 1940 году строительство гидроузла было завершено. В этом же году были перекрыты русла Волги и Шексны, так что оставалось лишь ожидать весеннего паводка, с помощью которого и должно было заполниться водохранилище. 13 апреля 1941 года было закончено бетонирование последнего участка плотины, после чего началось заполнение низменности. Ввод в эксплуатацию водохранилища был произведен осенью 1941 года в самый разгар боев за Москву. Однако полностью наполнить его водой не удалось. К тому же в процессе выработки большего количества электричества на Рыбинской ГЭС уровень воды понижался до самых нижних отметок. Полностью заполнить водохранилище удалось лишь в 1947 году. </p> 
            <p class="text_column">Рыбинское водохранилище стало крупнейшим в мире искусственным водоемом на тот момент. Лишь в середине 50-х годов его обогнало Куйбышевское водохранилище, площадь которого в 1,5 раза больше. Но до сих пор Рыбинское водохранилище остается одним из крупнейших по площади в Европе и России.</p>
            <p class="text_column">Рыбинское море — гигантская лаборатория института биологии внутренних водоемов РАН. В северо-западной его части расположен Дарвинский заповедник, специализирующийся на исследованиях по влиянию водохранилища на природные комплексы южной тайги.</p>
            <p class="text_column">В общей сложности при строительстве Рыбинского и Угличского гидроузлов и заполнении водохранилища разрушены и затоплены около 700 сел и деревень, 6 монастырей и более 50 храмов.</p>
            <p class="text_column">Ушли под воду города, храмы и монастыри имеющие огромную историческую ценность.</p>
            <p class="text_column">Сейчас это огромное (больше 4,5 кв. км) озеро причудливой формы и непередаваемой красоты. Берега его пологие и часто торфянистые, оно окружено старыми лесами и болотами. Береговая линия очень неровная, много бухт, маленьких заливов и протоков. По озеру разбросаны крошечные островки — когда-то они оторвались от берега, но не развалились, а зажили своей жизнью.</p>
            
          </div>
          <div class="column_c">
             <img src="https://avatars.mds.yandex.net/get-zen_doc/22526/pub_5c686d7e94f1e200aebb451f_5c686d8ab704ed00affea78c/scale_1200" alt="">
             <img src="https://avatars.mds.yandex.net/get-zen_doc/29317/pub_5c686d7e94f1e200aebb451f_5c686d8d4a187700aeb46dfb/scale_2400" alt="">
          </div>
        </div>
        <button onclick="topFunction()" id="order-button" title="Go to top">Главная страница</button>
        <h1 id="C4" class="gallery-header">Фотогалерея</h1>
        <div class="gallery">
          <img src="img/ry296.jpg" alt="">
          <img src="img/1560952080225.jpg" alt="">
          <img src="img/IMG_3086.jpg" alt="">
          <img src="img/kalyazin_41.jpg" alt="">
          <img src="img/4.jpg" alt="">
          <img src="img/14.jpg" alt="">
          <img src="img/502.jpg" alt="">
          <img src="img/06.jpg" alt="">
          <img src="img/1-tserkov-v-sele-ivanovskoe-4236(1).jpg" alt="">
        </div>
        
        <button onclick="topFunction()" id="order-button" title="Go to top">Главная страница</button>
  </main>
  <footer id="C5">
      <div class="column_h">
        <button id="contact-button">Нажми меня!</button>
        <div id="contact-form" class="form-container">
          <form id="form">
            <h1>Оставьте сообщение</h1>
            <div class="form-items">
              <div class="form-control">
                <div class="button-holders">Имя:</div>
                <input type="text" name="name" autocomplete="off"/>
              </div>
              <div class="form-control">
                <div class="button-holders">e-mail:</div>
                <input type="text" name="email" autocomplete="off"/>
              </div>
              <div class="form-control">
                <div class="button-holders">Сообщение:</div>
                <input type="text" name="message" autocomplete="off"/>
              </div>
            </div>
            <button id="submit" type="submit">Отправить</button>
          </form>
          <h1 id="success-msg">Спасибо за сообщение.   Мы с Вами свяжемся в течение 15 минут</h1>
        </div>
      </div>
    
    
      <div class="column_h">
        <?php
          require_once("reg.php");
        ?>
      </div>
      <div class="column_h">
        <?php
          require_once("auth.php");
        ?>
        <div>
          <ul class="socialIcons">
            <li><a class="facebook" href="https://ru-ru.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li><a class="instagram" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
            <li><a class="youtube" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
  </footer>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>
  
