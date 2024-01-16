<style>

/**
 * Grid styles
 */
#myInput{
/*padding: 20px 20px 20px 75px; */
border-radius: 0;
font-size: 18px;
margin: 0 0 0 40px;
display: block;
width:80%;
max-width: 600px;
background-image: url(http://alumni.tcnj.edu/wp-content/uploads/sites/16/2020/03/search-icon.jpg);
background-repeat: no-repeat, repeat;
background-position: left 2em top 50%, 0 0;
/*margin-top: 40px !important; */}

.video-grid.front-page {
/*  max-width: 1280px; */

max-width: 100%;

 /* margin: 0 auto; */
 /* padding: 1em 2em; */
}

ul.video-list {
  display: flexbox;
  display: flex;
 /* justify-content: center; */
  flex-wrap: wrap;
}

li.video {
  flex-grow: 1;
  position: relative;
  ooverflow: hidden;
  width: 33.333333333%;
  width: -webkit-calc(100% / 3);
  width: calc(100% / 3);
  max-width:396.667px;
  border: solid 0.2em transparent;

  & a {
    outline: none;
  }

  &:before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0);
    transition: background-color 0.15s;
  }

  & figure {
    display: block;
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;

    & img {
      display: block;
      max-width: 100%;
      height: auto;
      opacity: 0;
      transform: scale(0.5);
      transition: all 0.2s;
    }

    & figcaption {
      position: absolute;
      bottom: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      font-size: 1.4rem;
      font-weight: 600;
      padding: 1rem;
      transform: translateY(0);
      opacity: 1;
      transition: all 0.2s;
    }
  }

  &:hover {
    & figure {
      & img {
        opacity: 1;
        transform: scale(1);
      }

      & figcaption {
        opacity: 0;
        transform: translateY(50%);
      }
    }
  }

  &:hover:before {
    background-color: rgba(0, 0, 0, 0.3);
  }
}

@media screen and (max-width: 800px) {
  li.video {
    width: 50%;
    width: -webkit-calc(100% / 2);
    width: calc(100% / 2);
  }
}

@media screen and (max-width: 640px) {
  li.video {
    width: 100%;
  }
}



main {
  padding: 2rem 0;
}

article {
  max-width: 1280px;
  margin: 0 auto;
  padding: 1em 2em;
}

 li {
 list-style-type: none;

}
</style>



<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/jquery.fancybox-three.min.css" rel="stylesheet">

    <link href="video-grid.css" rel="stylesheet">


</head>
<header class="header" role="banner">


</header>

<body>

   <input type="search" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Введите запрос для поиска видео">

    <main role="main">


        <div id="search-body">


            <section class="videos list brick-grid-content" id="myList">
                <div class="video-grid front-page" id="front-page-videos">

                    <ul class="video-list featured" id="video-search-list">

                        <li class="video featured">

                            <figure>
                            <video width="400" height="300" controls>
                                <source src="/video/1_COVID__MENTAL_HELTH_ANIMATION.mp4">
                                Ваш браузер не поддерживает видео
                            </video>
                                <figcaption>Коронавирус</figcaption>
                            </figure>
                        </li>
                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls>
                                    <source src="/video/2_ТРЕВОГА__ANIMATION.mp4">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Тревога</figcaption>
                            </figure>
                        </li>
                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls>
                                    <source src="/video/3_1_ДЕПРЕССИЯ_ANIMATION.mp4">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Депрессия</figcaption>
                            </figure>
                        </li>
                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls>
                                    <source src="/video/4_АСТЕНИЯ_ANIMATION.mp4">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Астения</figcaption>
                            </figure>
                        </li>
                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls>
                                    <source src="/video/5_БЕССОНИЦА_ANIMATION.mp4">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Бессоница</figcaption>
                            </figure>
                        </li>
                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls>
                                    <source src="/video/6_НАРУШЕНИЕ ПАМЯТИ_ANIMATION.mp4">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Нарушение памяти</figcaption>
                            </figure>
                        </li>

                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls poster="/video/poster1.jpg">
                                    <source src="/video/Здоровое_питание_SUB.mov">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Здоровое питание</figcaption>
                            </figure>
                        </li>

                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls poster="/video/poster2.jpg">
                                    <source src="/video/Как_снизить_потребление_алкоголя_SUB.mov">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Как снизить потребление алкоголя</figcaption>
                            </figure>
                        </li>

                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls poster="/video/poster3.jpg">
                                    <source src="/video/Физическая_активность_SUB.mov">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Физическая активность</figcaption>
                            </figure>
                        </li>
                        <li class="video featured">
                            <figure>
                                <video width="400" height="300" controls poster="/video/poster4.jpg">
                                    <source src="/video/Как бросить курить SUB.mov">
                                    Ваш браузер не поддерживает видео
                                </video>
                                <figcaption>Как легче бросить курить?</figcaption>
                            </figure>
                        </li>

                    </ul>
                </div>
            </section>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/jquery.fancybox-three.min.js"></script>


</body>


<script>

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("video-search-list");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("figure")[0];
        let figcap = a.getElementsByTagName("figcaption")[0];
        txtValue = figcap.textContent || figcap.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
