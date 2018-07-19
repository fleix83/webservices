
<style>


body {
	border: <?= $site->body_border_width() ?> solid rgba(255, 255, 255, <?= $site->body_border_opacity() ?> );
	background: white;
	background: repeating-linear-gradient(-75deg, #08BF72, #08BF72 15px, #099BBC 0, #099BBC 30px);
	/* 08BF72 */
	background-position: 0px -1200px;
  color: white;
}

.spacer {
	width: 100%;
	height: 15rem;
}


/********************************************************************************************************************************************** FONTS */

h1, h2, h3, h4, h5, h6 {
	font-family: 'Josefin Sans', sans-serif;
	/* font-family: 'Merriweather Sans', sans-serif; */
	color: #33ccff;
	text-transform: uppercase;
}

h1 {
	font-size: 2.5rem;
	font-weight: 800;
}

h1.hero {
	font-size: 4rem;
	font-weight: 800;
	color: white;
}

h2 {
	font-size: 2rem;
	font-weight: 700;
}

h3 {
	font-size: 1.5rem;
	font-weight: 400;
  word-wrap: break-word;
}

h3.hero {
	font-size: 2rem;
	font-weight: 800;
}

h4 {
	font-size: 1.2rem;
	font-weight: 400;
}

a {
	border-bottom: 0px solid #ffffff;
}

a:hover {
	border-bottom: 0px solid #ffffff;
	text-decoration: none;
}


p {
	font-family: 'Josefin Sans', sans-serif;
	/* font-family: 'Open Sans', sans-serif; */
	color: #33ccff;
	font-size: 1.5rem;
	font-weight: 600;
	text-transform: none;
	font-style: italic;;
}

p a {
	border-bottom: 3px solid #67fecb;
}

p a:hover {
	border-bottom: 3px solid #67fecb;
	text-decoration: none;
	transition: border-bottom 0.5s;
}

p a:visited {
	color: #67fecb;
	text-decoration: none;
}

button a {
	color: white;
	border-bottom: 0px;
	font-size: 1rem;
	padding: 0px;
}

button a:hover {
	border-bottom: 0px;
}

button a:visited {
	color: white;
}


/** BUTTONS OVERRIDES **/

.btn-hero {
  color: #fff;
  background-color: #33ccff;
  border-color: #33ccff;
}

.btn-hero:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}



/********************************************************************************************************************************************** NAV **/
.nav  {
	margin-top: 50px;
}

.nav ul {
	display: flex;
	flex-direction: row;
	justify-content: center;
	list-style-type: none;
}

.nav li  {
	margin-left: 10px;

}

 .nav h1 a.nav-link {
  font-size: 1.2rem;
	color: #33ccff;
	font-weight: 800;
  text-transform: uppercase;
}

.nav h1 a.nav-link:hover {
		color: #63dbf7;
    transition: 0.2s ease-in;
}

@media (max-width: 576px) {
	.nav h1 a.nav-link {
		font-size: 0.9rem;
		margin-left: 2px;
		}
}

.divider {
	width: 100%;
	height: 4px;
	margin-left: 10px;
	background: white;/*linear-gradient(to right, #33ccff 0%,#f92778 27%,#2989d8 75%,#f92778 100%);*/
}

.social {
	margin-top: 10px;
}



.toggler {
	width: 50px;
	height: 50px;
	margin: 40px;
	z-index: 20;
	transform: rotate(0deg);
	transition: 0.3s;
}

.toggler-rotate {
	transform: rotate(-115deg);
	transition: 0.3s;
}

.menu-hidden {
	width: 100%;
	height: 350px;
	padding: 30px;
	background: linear-gradient(to bottom, #ffffff 0%,#ffffff 72%,transparent 100%);
	opacity: 0.0;
	transition: opacity 1.2s;
	/* transform: scale(0.0); */
	transition: 1.4s;
	position: absolute;
	top: 0px;
	left: 0;
	z-index: -1;
}

.menu-hidden ul {
	list-style-type: none;
	margin-top: 17px;
}


.menu-visible {
	width: 100%;
	height: 350px;
	opacity: 0.6;
	/* transform: scale(1.0); */
	transition: transform 0.4s;
	transition: opacity 1.2s;
	z-index: 10;
}

.menu-hidden h1 a.nav-link {
	color: #33ccff;
	font-size: 1.3rem;
}

/* Position the close button (top right corner) */
.closebtn {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 40px;
		z-index: 10;
}








.formdiv {
	background: white;
	opacity: 0.9;
}





input {
	border: 2px solid #79F7BC;
	width: 200px;
}
textarea {
	border: 2px solid #79F7BC;
	width: 200px;
}



/* a:hover {
	border-bottom: 2px solid black;
}
*/





/* UNIFORM */

.uniform__potty {
    position: absolute;
    left: -9999px;
}

/********************************************************************************************************************************************** MAIN SECTION */

.home {
	min-height: 400px;
	margin-top: 23%;
}

@media (max-width: 576px) {
	.home{
		margin-top: 49%;
		}
}

.btn-main {
	position: absolute;
	bottom: 20px;
	right: 30px;
}


/** SECTION ANGEBOT **/

.angebot {
	justify-content: center;
	width: 85%;
	height: auto;
	background: rgba(51,204,255, 1.0);
	margin-top: 200px;
	padding: 100px 40px;
	position: relative;
}


.angebot .flag  {
	width: 30px;
	height: 30px;
	background: #67fecb;
	background:linear-gradient(45deg, transparent 22px, #67fecb 0);
	position: absolute;
	top: 0px;
	right: 0px;
}


.angebot h1 {
	color: white;
	font-size: 54px; /*2.8rem*/
	font-weight: 800;
	border-bottom: 0px solid #67fecb;
}

.angebot p  {
		font-family: 'Open Sans', sans-serif;
		color: white;
		font-size: 20px; /*1.5rem*/
		font-weight: 100;
		text-transform: none;
		font-style: normal;
		line-height: 32px;
	}

.box-angebot {
	color: #FF8466;
	width: 100%;
	height: 400px;
	min-width: 200px;
	margin: 100px 30px;
	padding: 60px 30px;
	background: white;
	box-shadow: 0 2rem 4rem 0 rgba(0,0,0,.2);
	overflow: hidden;
}

.box-angebot:hover {
	transform: scale(1.1);
	transition: 0.8s;
}


.modal {
	width: 100%;
	height: 100%;
	background: rgba(255,255,255,0.9);
	margin: 0px auto;
}

.inner {
	padding: 200px 200px;
}

/********************************************************************************************************************************************** FOOTER */

.footer {
	width: 100%;
	background: #ffffff;
	color: #00000;
	font-size: 0.7rem;
	padding: 0px 20px;
	margin 0;
	position: relative;
	bottom: 0px;
	left: 0px;
	transform: skewY(1.5deg);
	z-index: 100;
}


.footer-wrapper {
  width: 100%;
	margin: 20px 0px;
	padding: 70px 40px;
	transform: skewY(-1.5deg);
}

@media (max-width: 575px) {
    .footer-wrapper {
		padding: 5% 0px;
  }
}

.footer-border {
	border-right: 2px dotted #ffffff;
}

@media (max-width: 575px) {
	.footer-border {
	border-right: 0px dotted #ffffff;
	}
}

.footer-content-1 {
	width:100%;
	height: 100%;
}

.footer-content-2 {
	width:100%;
	height: 100%;
	border: 0px solid grey;
}

.footer-content-3 {
	width:100%;
	height: 100%;
}

footer p {
	color: #000000;
	font-size: 0.9rem;
	padding-left: 50px;
	font-weight: 300;
}

footer figure {
	padding-left: 50px;
}


footer h3 {
	color: #000000;
	font-size: 1.0rem;
	font-weight: 400;
	margin: 0px 0px 3px 50px;
	text-transform: none;
}

footer a {
	color: #000000;
	background: linear-gradient(#ffffff, #ffffff) no-repeat;
	background-size: 100% 1px;
	background-position: 0 1.15em;
}


.footer-brand {
	width: 100%;
	padding: 5%;
}

.img-brand {
	float: left;
	width: 20%;
}

.contact-brand {
	float: left;
	width: 60%;
}

.footer-end {
	background: #ffffff;
	width: 100%;
	height: 60px;
	margin-top: -30px;
}

/* .bottom-bar-wrapper {
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 100%;
	height: 9%;
  padding: 7px 0px;
	background: #A5A5A5;
} */

/*** Alert ***/

.alert {
  background: #F26A60;
  width: 80%;
  padding: 40px;
  position: relative;
  font-weight: 600;
  z-index: 999;
}

.close_btn {
	color: #000;
	padding: 15px 0px 5px 10px;
	display: block;
	position: absolute;
	top: 40px;
	right: 40px;
}

.content {
  padding: 40px;
}

/* OVERRIDES */

/* .col-sm-12 {
	padding-left: 25px;
} */

.black {
	color: black !important;
}

.red {
	color: red !important;
}





/* GRANIM TEST */
#canvas-image {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
		z-index: 200;
}


.teaser {
	background: white;
	padding: 0;
	margin: 0px 0px 40px 0px;
}

.tsr_content {
	float: left;
	padding: 30px;
}

.tsr_image {
	float: left;
}
.image-right {
	float: right;
}

.box {
	margin-top: -50px;
}

.table {
	margin: 100 0;
}

table {
	color: black;
	width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
	background: lightgreen;
}

.bordeaux {
	width: 100%;
	background: #FF0033;
	min-height: 900px;
	padding: 200px 40px;
}

.marine {
	width: 100%;
	background: #003399;
	min-height: 900px;
	padding: 200px 40px;
}

.green {
	width: 100%;
	background: green;
	min-height: 900px;
	padding: 200px 40px;
}


/* ACCORDION SNIPPET */

/* Style the buttons that are used to open and close the accordion panel */
.accordion {
    background-color: lightgreen;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
}

.accordion:first-of-type {
	border-radius: 10px 10px 0px 0px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.accordion.active, .accordion:hover {
    background-color: red;
		color: white;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
    padding: 0 18px;
    background-color: lightblue;
    overflow: hidden;
		max-height: 0;
		transition: max-height 0.2s ease-out;
}
.panel:last-of-type {
border-radius: 0px 0px 10px 10px;
}

</style>
