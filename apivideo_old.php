<style>


/**
 * Grid styles
 */
#myInput{padding: 20px 20px 20px 75px;
border-radius: 0;
font-size: 18px;
margin: 0 auto;
display: block;
  width:100%;
  max-width: 600px;
background-image: url(http://alumni.tcnj.edu/wp-content/uploads/sites/16/2020/03/search-icon.jpg);
background-repeat: no-repeat, repeat;
background-position: left 2em top 50%, 0 0;
margin-top: 40px !important;}

.video-grid.front-page {
  max-width: 1280px;
  margin: 0 auto;
  padding: 1em 2em;
}

ul.video-list {
  display: flexbox;
  display: flex;
  justify-content: center;
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

/**
 * Pen styles
 */
html {
  box-sizing: border-box;
  height: 100%;
  overflow-y: scroll;
  font-size: 62.5%;
}
*,
*:before,
*:after {
  box-sizing: inherit;
}
body {
  background: #fff;
  color: #444;
  font-family: "Open Sans", Arial, -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  font-size: 1.8rem;
  line-height: 1.2;
}

header {
  width: 100%;
  padding: 2em;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);

  & h1 {
    font-size: 3rem;
    font-weight: 700;
    text-align: center;
    letter-spacing: -0.03em;
    color: #666;
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


</style>

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/jquery.fancybox-three.min.css" rel="stylesheet">

    <link href="video-grid.css" rel="stylesheet">


</head>


<body>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Video Titles" title="Type in a name">

    <main role="main">

        <div id="search-body">

            <section class="videos list brick-grid-content" id="myList">
                <div class="video-grid front-page" id="front-page-videos">
                    <ul class="video-list featured" id="video-search-list">
                        <li class="video featured">
                            <a data-fancybox href="https://www.youtube.com/watch?v=9eDCHmZO5Dw" class="featured-video">
                                <figure
                                    style="background-image: url(https://jointhepride.tcnj.edu/wp-content/uploads/sites/39/2020/03/accept-stud.jpg);">
                                    <img
                                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                                    <figcaption>Accepted Students Day 2019</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="video featured">
                            <a data-fancybox href="https://www.youtube.com/watch?v=Dd5nX7a9KEI" class="featured-video">
                                <figure
                                    style="background-image: url(https://jointhepride.tcnj.edu/wp-content/uploads/sites/39/2020/03/commencement-2019.jpg);">
                                    <img
                                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                                    <figcaption>Commencement 2019</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="video featured">
                            <a data-fancybox href="https://www.youtube.com/watch?v=4YERMJzsrzM&t=44s"
                                class="featured-video">
                                <figure
                                    style="background-image: url(https://jointhepride.tcnj.edu/wp-content/uploads/sites/39/2020/03/welcome-to-tcnj.jpg);">
                                    <img
                                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                                    <figcaption>Welcome to TCNJ</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="video featured">
                            <a data-fancybox href="https://www.youtube.com/watch?v=Wb-8V3JWq1Q" class="featured-video">
                                <figure
                                    style="background-image: url(https://jointhepride.tcnj.edu/wp-content/uploads/sites/39/2020/03/tcnjjoin.jpg);">
                                    <img
                                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                                    <figcaption>Will you #TCNJoin?</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="video featured">
                            <a data-fancybox href="https://www.youtube.com/watch?v=bWvc6J4n3rc" class="featured-video">
                                <figure
                                    style="background-image: url(https://jointhepride.tcnj.edu/wp-content/uploads/sites/39/2020/03/homecoming2.jpg);">
                                    <img
                                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                                    <figcaption>TCNJ Homecoming 2018 - Save the Date</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="video featured">
                            <a data-fancybox href="https://www.youtube.com/watch?v=gn6v3G46P6w" class="featured-video">
                                <figure
                                    style="background-image: url(https://jointhepride.tcnj.edu/wp-content/uploads/sites/39/2020/03/homecoming.jpg);">
                                    <img
                                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                                    <figcaption>TCNJ Homecoming 2018</figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/jquery.fancybox-three.min.js"></script>

    <script>function copySearch() {
            document.getElementById("search-results").value = document.querySelector(".search").value;
        }


    </script>
</body>




<script>

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("video-search-list");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

</script>    
