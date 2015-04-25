<!-- reference: http://schliflo.github.io/OnePageR/ -->
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>HRMS</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700);

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}


html {
  line-height: 1;
}


ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}


caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}


q, blockquote {
  quotes: none;
}

q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}


a img {
  border: none;
}


article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}


.opr-page {
  position: fixed;
  height: 100%;
  width: 100%;
}


.opr-current {
  z-index: 99;
}


.opr-animate {
  z-index: 100;
}


.opr-nav a[data-target], .opr-next, .opr-prev {
  cursor: pointer;
}


body {
  background-color: #ddd;
  font-family: 'Roboto Slab', serif;
  color: #333;
}


a {
  text-decoration: none;
  color: #333;
  display: block;
}


a:after {
  content: '';
  position: relative;
  display: block;
  width: 8px;
  border-bottom: 2px solid #333;
  transition: 0.3s ease-in-out;
}


a:hover:after {
  width: 100%;
}


#nav-main {
  position: fixed;
  right: 0;
  z-index: 999;
  padding: 20px;
  margin: 20px;
  border: 4px solid #333;
}


#nav-main li {
  float: left;
}


#nav-main li + li {
  margin-left: 20px;
}


.first {
  background-color: #11CC88;
}


.second {
  background-color: #FFB242;
}


.third {
  background-color: #418AD0;
}


.fourth {
  background-color: #FF6342;
}


.opr-next {
  width: 30px;
  height: 30px;
  position: fixed;
  left: 50%;
  bottom: 40px;
  box-shadow: 4px 4px 0 #333;
  transform: translate(-50%, 0) rotate(45deg);
  cursor: pointer;
}

h1{
  position:absolute;
  width:100%;
  top:50%;
  text-align:center;
  font-size: 5em;
  transform: translate(0, -60%);
  font-weight: 300;
}
h1 span{
  font-weight: 600;
}


.home-content{
  position:absolute;
  width:100%;
  top:50%;
  text-align:center;
  font-size: 2em;
  transform: translate(0, -60%);
  font-weight: 300;
}

.portfolio-img{  
  position:absolute;
  width:100%;  
  text-align: center;  
  bottom: 15%;
}
.portfolio-img img{
  width: 70%;
}
.port-tit{
  top: 30% ;
}


.email{
  text-align: center;
  font-size: 1.6em;
  opacity: 0.7;
  position: absolute;
  bottom: 20%;
  width: 100%;
  -webkit-transition: 0.2s ease;
  transition: .2s ease;
}
.email a:after{
  position: absolute;
  display: inline;
  border-bottom: 0px;
}
.email a:hover{
  opacity: 1;
  font-size: 110%;
  -webkit-transition: 0.2s ease;
  transition: .2s ease;
}
</style>

    <script src="js/prefixfree.min.js"></script>

    <script src="js/modernizr.js"></script>

</head>

<body>

  <nav id="nav-main">
    <ul class="opr-nav">
        <li><a data-target="1">Home</a></li>
        <li><a data-target="2">Portfolio</a></li>
        <li><a data-target="3">Career</a></li>
        <li><a data-target="4">Contact</a></li>
        <li><a href="./login">Login</a></li>
        <li><a href="./register">Register</a></li>
    </ul>
</nav>


<div class="opr-container">
    <div class="opr-page opr-current first" data-target="1">
      <div class="home-content">
        <p>HRMS! one stop solution for your human resource</p>
      </div>

        <div class="opr-next"></div>
    </div>


    <div class="opr-page second" data-target="2">
        <h1 class="port-tit">Things we've Crafted</h1>
        <div class="portfolio-img"><img src='./images/portfolio.png'></div>
        <div class="opr-next"></div>
    </div>

    <div class="opr-page third" data-target="3">
        <h1><a href="./apply">JOIN US!</a></h1>
        <div class="opr-next"></div>
    </div>

    <div class="opr-page fourth" data-target="4">
        <h1>we'd love to hear from you</h1>
        <div class="email">email us: <a href="mailto:contact@hrms.io">contact@hrms.io</a></div>
        <p>&nbsp;</p>
    </div>
</div>

{{HTML::script('js/lib/jquery.js')}}
{{ HTML::script('js/home.js') }}
  

</body>
</html>