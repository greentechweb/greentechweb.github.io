<!DOCTYPE html>
<html>

<head>
	<!--meta-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--bootstrap-->
	<link rel="stylesheet" href="assets/framework/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<!--fontawsome-->
	<script src="https://use.fontawesome.com/193008b0be.js"></script>
	<!--Style-->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/checkmark.css">
	<!--Font-->
	<link rel="stylesheet" href="assets/font/css/style.css">
	<!--jquery-->
	<script src="assets/framework/jquery/jquery-3.5.1.min.js"></script>
	<link href="assets/framework/noUiSlider-14.6.3/distribute/nouislider.css" rel="stylesheet">
	<script src="assets/framework/noUiSlider-14.6.3/distribute/nouislider.js"></script>
	<script src="assets/framework/wnumb-1.2.0/wNumb.js"></script>
	<link href="assets/framework/Mh1PersianDatePicker-master/Mh1PersianDatePicker.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/framework/chart/chart.min.css">
	<script src="assets/framework/chart/chart.min.js"></script>
	<link rel="stylesheet" href="assets/framework/clockpicker/src/clockpicker.css">
	<link rel="stylesheet" href="assets/framework/clockpicker/src/standalone.css">
	<script src="assets/framework/clockpicker/src/clockpicker.js"></script>
	<style>
		html{
			scroll-behavior: smooth;
		}
		body {
			background: #d2ddea;
			overflow: hidden;
			width: 100%;
			height: 100vh;
			cursor: none;
			
		}
		.swal2-container{
			direction: rtl;
		}
		.sidenav {
			height: auto;
			min-height: 90%;
			/* Full-height: remove this if you want "auto" height */
			width: 15%;
			/* Set the width of the sidebar */
			position: fixed;
			/* Fixed Sidebar (stay in place on scroll) */

			top: 5%;
			/* Stay at the top */
			right: 5%;
			border-radius: 50px;
			background: linear-gradient(225deg, #e1ecfa, #bdc7d3);
			box-shadow: -24px 24px 48px #b0bac5, 24px -24px 48px #f4ffff;
			overflow-x: hidden;
			/* Disable horizontal scroll */
			padding-top: 20px;
		}
		.menu-active{
			border-radius: 50px;
background: #d9e3f1;
box-shadow: inset 5px 5px 3px #c8d1de, 
            inset -5px -5px 3px #eaf5ff;
		}
		.menu-item{
			border-radius: 50px;
background: #d9e3f1;
box-shadow:  10px 10px 20px #ced8e5, 
             -10px -10px 20px #e4eefd;
		}
		.main {
			height: 80%;

			width: 75%;
			position: fixed;
			top: 10%;
			left: 5%;
			background-color: #d2ddea;
			box-shadow: 20px 20px 60px #b3bcc7,
				-20px -20px 60px #f2feff;

			border-radius: 30px 0px 0px 30px;
			overflow-y: scroll;
		}

		.sidenav a {
			display: block;
		}

		.avatar {
			width: 80px;
			height: 80px;
			border-radius: 50px;
			display: block;
			background-image: url("assets/img/user.png");
			background-size: cover;
		}

		.support {

			position: fixed;
			width: 70px;
			height: 70px;
			border-radius: 50px;
			background: linear-gradient(315deg, #1199eb, #0e81c6);
			box-shadow: -10px -10px 36px rgba(15, 132, 202,0.5), 10px 10px 36px rgba(15, 132, 202,0.6);
			bottom: 7%;
			left: 4%;
		}

		.footer {
			position: fixed;
			bottom: 1%;
			width: 100%;
		}

		.d-line {
			display: inline;
		}

		.head {
			position: relative;
			width: 100%;
			height: 10vh;
			left: 5%;
		}

		.logo {
			width: 50px;
			height: 50px;
		}

		.hover {
			display: none;
			position: absolute;
			font-size: 15px;
			z-index: 5;
		}

		h7 {
			font-size: 10px;
		}

		.btn-b {
			border-radius: 50px;
			background: linear-gradient(145deg, #1094e3, #0e7cbf);
			box-shadow: 6px 6px 12px #0d74b2,
				-6px -6px 12px #11a0f6;

		}

		.btn-b-c {
			border-radius: 50px;
			background: linear-gradient(145deg, #0e7cbf, #1094e3);
			box-shadow: 6px 6px 12px #0d74b2,
				-6px -6px 12px #11a0f6;
		}

		.btn-g {
			border-radius: 50px;
			background: linear-gradient(145deg, #1094e3, #0e7cbf);
			box-shadow: 6px 6px 12px #0d74b2,
				-6px -6px 12px #11a0f6;

		}

		.btn-g-c {
			border-radius: 50px;
			background: linear-gradient(145deg, #0e7cbf, #1094e3);
			box-shadow: 6px 6px 12px #0d74b2,
				-6px -6px 12px #11a0f6;
		}

		.cursor {
			position: absolute;
			background: #26c281;
			width: 6px;
			height: 6px;
			border-radius: 100%;
			z-index: 10000;
			transform: scale(1);
			user-select: none;
			pointer-events: none;
			transition: 0.3s ease-in-out transform, 0.2s ease-in-out opacity;
		}

		.cursor.active {
			opacity: 0.5;
			transform: scale(0);
		}

		.cursor.hovered {
			opacity: 0.08;
		}

		.cursor-follower {
			position: absolute;
			background-color: rgba(256, 256, 256, 0.9);
			width: 20px;
			height: 20px;
			border-radius: 100%;
			z-index: 10000;
			transform: translatex(5px, 5px);
			user-select: none;
			pointer-events: none;
			transition: 0.6s ease-in-out transform, 0.2s ease-in-out opacity;
			mix-blend-mode: difference;
		}

		.cursor-follower.active {
			opacity: 0.9;
			transform: scale(3);
		}

		.cursor-follower.hovered {
			opacity: 0.08;
		}

		.path-city {
			stroke: #fff;
		}

		.path-city:hover {
			fill: #fff;
		}

		.path-city-g1 {
			fill: #ca0202;
		}

		.path-city-g2 {
			fill: #ffa71e;
		}

		.path-city-g3 {
			fill: #0290d9;
		}

		.path-city-g4 {
			fill: #89cb2b;
		}

		.rtl {
			direction: rtl !important;
		}

		.table-n {
			border-radius: 50px;
			background: #d2ddea;
			box-shadow: 21px 21px 42px #c8d2de,
				-21px -21px 42px #dde8f6
		}

		.box-n {
			border-radius: 50px;
			background: linear-gradient(315deg, #e1ecfa, #bdc7d3);
			box-shadow: -20px -20px 60px #b3bcc7,
				20px 20px 60px #f2feff;
		}

		.container-n {
			border-radius: 50px;
			background: #c4cdd8;
			box-shadow: 20px 20px 42px #b2bbc5,
				-20px -20px 42px #d6dfeb;
		}

		.item-n {
			border-radius: 50px;
			background: #bdc7d3;
			box-shadow: 8px 8px 21px #aab3be,
				-8px -8px 21px #d0dbe8;
			
		}
		button{
			border:none;
		}
		.scaling-svg-container {
			position: relative;
			width: 100%;
			padding: 0;
			/* override this inline for aspect ratio other than square */
		}

		.scaling-svg {
			position: absolute;
			height: 100%;
			width: 100%;
			left: 0;
			top: 0;
		}

		.field {
			position: relative;
			font-family: Arial;
			text-transform: uppercase;
			font-weight: bold;
			display: inline-block;
		}

		label {
			position: absolute;
			right: 0;
			top: 0;
			transition: all .2s linear;
			color: #26c281;
			font-size: 13px;
		}

		input {
			border: 1px solid #999;
			padding: 3px 2px;
		}

		input:invalid+label {
			top: 5px;
			z-index: -1000;
			opacity: 0;
		}

		input:valid+label {
			display: initial;
			top: -20px;
			opacity: 1;
		}

		input:focus {
			outline: none;
		}

		input:focus+label {
			color: #26c281;
		}

		.s-label {
			position: absolute;
			opacity: 1;
			top: -20px;
		}

		.c-active {
			border-radius: 50px;
			background: #6cd0ee;
			width: 12px;
			height: 12px;
			right: -7px;
		}

		.circle {
			border-radius: 50px;
			background: #bdc7d3;
			width: 12px;
			height: 12px;
			right: -7px;
			opacity: 0.5;
		}

		.b-active {
			border-right: 3px solid #6cd0ee;

		}

		.borders {
			border-right: 3px solid #bdc7d3;
			opacity: 0.5;
		}

		.h-sm {
			font-size: 15px;
			;
		}

		.hidden{
			display: none;
		}

		.show{
			display:initial;
		}
		#progress{
			display:none;
		}
		.cancel {
			cursor: pointer;
		}
		#report-menu{
			display:none;
		}
		.phone {
			position: absolute;
			width: 100%;
			height: 100%;
			background: rgba(256, 256, 256, 0.85);
			z-index: 1000;
			display: none;
		}
		.fa{
			cursor: pointer;
		}
		.fa-cog{
			cursor: none;
		}
		@media screen and (max-width: 750px) {
			.phone {
				display: initial;
			}
		}
		.hdd{
			fill:#f5a7c4;
		}
		.hsd{
			fill:#f4c872;
		}
		.csd{
			fill:#fdff69;
		}
		.med{
			fill:#c2e2ff;
		}
		.cas{
			fill:#23de65;
		}
		.vcm{
			fill:#e9f1f1;
		}
		.cm{
			fill:#6ca2ff;
		}
		.preloader {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: 9999;
   background-color: #FFF;
}
.load{
	position: absolute;
	left:48%;
	top:48%;
	
}
.st0 {
          fill: #ffffff;
          stroke: #000000;
          stroke-miterlimit: 10;
        }
        .st1 {
          fill: #ffffff;
        }
        .st2 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
        }
        .st3 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 5.1573, 5.1573;
        }
        .st4 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 4.578, 4.578;
        }
        .st5 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 4.5635, 4.5635;
        }
        .st6 {
          fill: #ffffff;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 5;
        }
        .st7 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 5.2593, 5.2593;
        }
        .st8 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 5.1003, 5.1003;
        }
        .st9 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 5;
        }
        .st10 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 4.3658, 4.3658;
        }
        .st11 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 4.7237, 4.7237;
        }
        .st12 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 5.021, 5.021;
        }
        .st13 {
          fill: none;
          stroke: #000000;
          stroke-miterlimit: 10;
          stroke-dasharray: 5.2223, 5.2223;
        }
		
		@-webkit-keyframes blinker {
			from {
				opacity: 1.0;
			}

			to {
				opacity: 0.0;
			}
		}

		.blink {
			stroke: #001799 !important;
			stroke-width: 2;
			text-decoration: blink;
			-webkit-animation-name: blinker;
			-webkit-animation-duration: 0.6s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-timing-function: ease-in-out;
			-webkit-animation-direction: alternate;
		}
		@-webkit-keyframes bordered {
			from {
				border: 6px solid rgba(38, 194, 129, 0);
			}

			to {
				border: 6px solid rgba(38, 194, 129, 1);
			}
		}
		.bordered{
			-webkit-animation-name: bordered;
			-webkit-animation-duration: 0.6s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-timing-function: ease-in-out;
			-webkit-animation-direction: alternate;	
		}
		.link{
			cursor:pointer;
		}
		.section-btn{
			cursor:pointer;
		}
	</style>
</head>

<body>
	<div class="cursor"></div>
	<div class="cursor-follower"></div>
	<div class="preloader align-items-center justify-content-center">
		<div class="spinner-border load text-success" role="status">
			<span class="sr-only">Loading...</span>
		  </div>
	</div>
	<div class="phone rtl">
		<h6 class="text-dark text-center mx-auto mt-4">در حال حاضر نمایشگر کوچک پشتیبانی نمی‌شود.</h6>

	</div>
	<div class="head d-flex align-items-center">
		<img class="link logo" src="assets/img/gt-sm.png"></img>
		<h6 class="d-line mx-2"><i class="fa fa-clock mx-3"></i>۱۵:۳۴</h6>
		<h6 class="d-line mx-2">دوشنبه ، ۱۵ آذر ۹۹</h6>
	</div>
	<div class="main p-3">
		<!--shape-->
		<section id="shape" class="hidden">
			<div class="row rtl">
				
				<div class="col-7 container-n p-3 justify-content-center" style="height:65vh; overflow-y: scroll;">
					<h6 class="text-center text-ultralight">لطفا ابعاد گلخانه را به "متر" وارد کنید.</h6>
					<div class="row justify-content-center">
						<div class="col-3 d-flex justify-content-center align-items-center">
							<h3 class="text-center">مثلثی</h3>
						</div>
					<div class="col-5 mx-3" style="width:30%; height:auto; ">
						<div class="scaling-svg-container">
							<svg id="aa" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 135 110"
								style="enable-background:new 0 0 500 500;" xml:space="preserve">
								<g>
									<path class="st0 s-l-m" d="M49.14,100.72l81.19-44.68" />
									<path class="st0" d="M130.12,28.59v27.89" />
									<line class="st0" x1="129.81" y1="29" x2="48.62" y2="73.68" />
									<path class="st0 s-h-m" d="M48.89,101.16V73.27" />
									<path class="st0" d="M49.14,73.64L29.38,45.06" />
									<path class="st0" d="M0.04,47.15l29.77-1.87" />
									<g>
									  <path class="st1" d="M0.76,74.15l81.19-44.68" />
									  <g>
										<g>
										  <line class="st2" x1="0.76" y1="74.15" x2="2.95" y2="72.94" />
										  <line class="st3" x1="7.47" y1="70.46" x2="77.5" y2="31.92" />
										  <line class="st2" x1="79.76" y1="30.67" x2="81.95" y2="29.47" />
										</g>
									  </g>
									</g>
									<g>
									  <line class="st1" x1="81.74" y1="2.02" x2="81.74" y2="29.91" />
									  <g>
										<line class="st2" x1="81.74" y1="2.02" x2="81.74" y2="4.52" />
										<line class="st4" x1="81.74" y1="9.1" x2="81.74" y2="25.12" />
										<line class="st2" x1="81.74" y1="27.41" x2="81.74" y2="29.91" />
									  </g>
									</g>
									<line class="st0" x1="81.43" y1="2.43" x2="0.24" y2="47.11" />
									<line class="st0" x1="0.51" y1="74.59" x2="0.51" y2="46.7" />
									<path class="st0 s-w-m" d="M48.63,100.72L0.27,74.11" />
									<g>
									  <line class="st1" x1="130.33" y1="56.08" x2="81.97" y2="29.47" />
									  <g>
										<line class="st2" x1="130.33" y1="56.08" x2="128.14" y2="54.87" />
										<line class="st5" x1="124.15" y1="52.67" x2="86.16" y2="31.77" />
										<line class="st2" x1="84.16" y1="30.67" x2="81.97" y2="29.47" />
									  </g>
									</g>
									<path class="st0" d="M130.23,28.87L110.47,0.29" />
									<line class="st0" x1="81.13" y1="2.37" x2="110.9" y2="0.5" />
									<line class="st0" x1="110.67" y1="0.59" x2="29.48" y2="45.27" />
									<path class="st6 s-hh-m" d="M110.47,45.29V0.57" />
								  </g>
							</svg>
							
						</div>
					</div>
					
				</div>
			
					<div class="row justify-content-center">
						<div class="col-4 my-3">
							<div class="field">
								<input type="text" name="ghname"
									class="form-control item-n bg-white text-center" placeholder="نام" required=""
									autofocus="" style="direction:rtl; ">
								<label>نام</label>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-4 my-3">
							<div class="field">
								<input type="text" name="length" id="length"
									class="form-control item-n bg-white text-center l-m" placeholder="طول" required=""
									autofocus="" style="direction:rtl; ">
								<label>طول</label>
							</div>
						</div>
						<div class="col-4 my-3">
							<div class="field">
								<input type="text" name="width" id="width"
									class="form-control item-n bg-white text-center w-m" placeholder="عرض" required=""
									autofocus="" style="direction:rtl; ">
								<label>عرض</label>
							</div>
						</div>
						<div class="col-4 my-3">
							<div class="field">
								<input type="text" name="wall_height" id="wall_height"
									class="form-control item-n bg-white text-center h-m" placeholder="ارتفاع دیواره"
									required="" autofocus="" style="direction:rtl; ">
								<label>ارتفاع دیواره</label>
							</div>
						</div>
						<div class="col-4 my-3">
							<div class="field">
								<input type="text" name="roof_height"
									class="form-control item-n bg-white text-center hh-m" style="font-size: 15px;" placeholder="ارتفاع بلندترین سقف"
									required="" autofocus="" style="direction:rtl; ">
								<label>ارتفاع بلندترین سقف</label>
							</div>
						</div>
						<div class="col-4 my-3">
							<label class="s-label text-bold">پوشش سقف</label>
							<select id="roof_cover_type" class="form-control " style="width:80%;" name="roof_cover_type">
								<option value="">بدون پوشش</option>
								<option value="A">شیشه</option>
								<option value="B">پلی اتیلن تک‌جداره</option>
								<option value="C">پلی اتیلن دوجداره</option>
								<option value="D">پلی کربنات تک‌جداره</option>
								<option value="E">پلی کربنات دوجداره</option>

							</select>
						</div>
						<div class="col-4 my-3">
							<label class="s-label text-bold">پوشش دیواره</label>
							<select id="wall_cover_type" class="form-control " style="width:80%;" name="wall_cover_type">
								<option value="">بدون پوشش</option>
								<option value="A">شیشه</option>
								<option value="B">پلی اتیلن تک‌جداره</option>
								<option value="C">پلی اتیلن دوجداره</option>
								<option value="D">پلی کربنات تک‌جداره</option>
								<option value="E">پلی کربنات دوجداره</option>

							</select>
						</div>
						<script>
							function blink(id) {
								$("." + id).focus(function () {
									$(".s-" + id).addClass("blink");
								});
								$("." + id).focusout(function () {
									$(".s-" + id).removeClass("blink");
								});
							}
							blink("l-m");
							blink("w-m");
							blink("h-m");
							blink("hh-m");
						</script>
					</div>
					<div class="row justify-content-center mb-4">
						<div class="col-3">
							<div class="field">
								<input type="text" name="username" id="username"
									class="form-control item-n bg-white text-center" placeholder="تعداد" required=""
									autofocus="" style="direction:rtl; ">
								<label>تعداد</label>
							</div>
						</div>
						<button class="col-2 btn-n mx-2">
							<h6 class="link px-3 py-1 text-center text-ultralight" style="bottom:0px;">افزودن</h6>
						</button>
					</div>
					
				</div>
				
				<div class="position-absolute row" style="bottom:5%; right:25%; ">
					<button id="b-shape" data-section="product" class="section-btn link btn-n px-3 py-1 text-center text-ultralight">ادامه</button>
				</div>	
			
				<div class="col-5">
					<div class="row container-n p-3 mx-2 justify-content-center"
						style="height:44vh; overflow-y:scroll;">
						<div class="col-3 rounded item-n p-2 m-2 ">
							<div class="scaling-svg-container">
								<svg id="aa" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 135 110"
									style="enable-background:new 0 0 500 500;" xml:space="preserve">
									<g>
										<path class="st0" d="M49.14,100.72l81.19-44.68" />
										<path class="st0" d="M130.12,28.59v27.89" />
										<line class="st0" x1="129.81" y1="29" x2="48.62" y2="73.68" />
										<path class="st0" d="M48.89,101.16V73.27" />
										<path class="st0" d="M49.14,73.64L29.38,45.06" />
										<path class="st0" d="M0.04,47.15l29.77-1.87" />
										<g>
										  <path class="st1" d="M0.76,74.15l81.19-44.68" />
										  <g>
											<g>
											  <line class="st2" x1="0.76" y1="74.15" x2="2.95" y2="72.94" />
											  <line class="st3" x1="7.47" y1="70.46" x2="77.5" y2="31.92" />
											  <line class="st2" x1="79.76" y1="30.67" x2="81.95" y2="29.47" />
											</g>
										  </g>
										</g>
										<g>
										  <line class="st1" x1="81.74" y1="2.02" x2="81.74" y2="29.91" />
										  <g>
											<line class="st2" x1="81.74" y1="2.02" x2="81.74" y2="4.52" />
											<line class="st4" x1="81.74" y1="9.1" x2="81.74" y2="25.12" />
											<line class="st2" x1="81.74" y1="27.41" x2="81.74" y2="29.91" />
										  </g>
										</g>
										<line class="st0" x1="81.43" y1="2.43" x2="0.24" y2="47.11" />
										<line class="st0" x1="0.51" y1="74.59" x2="0.51" y2="46.7" />
										<path class="st0" d="M48.63,100.72L0.27,74.11" />
										<g>
										  <line class="st1" x1="130.33" y1="56.08" x2="81.97" y2="29.47" />
										  <g>
											<line class="st2" x1="130.33" y1="56.08" x2="128.14" y2="54.87" />
											<line class="st5" x1="124.15" y1="52.67" x2="86.16" y2="31.77" />
											<line class="st2" x1="84.16" y1="30.67" x2="81.97" y2="29.47" />
										  </g>
										</g>
										<path class="st0" d="M130.23,28.87L110.47,0.29" />
										<line class="st0" x1="81.13" y1="2.37" x2="110.9" y2="0.5" />
										<line class="st0" x1="110.67" y1="0.59" x2="29.48" y2="45.27" />
										<path class="st6" d="M110.47,45.29V0.57" />
									  </g>
								</svg>
								<h6 class="text-center text-ultralight">مثلثی</h6>

							</div>
						</div>

						<div class="col-3 rounded item-n p-2 m-2 ">
							<div class="scaling-svg-container">
								
								<svg id="aa" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 135 110"
									style="enable-background:new 0 0 500 500;" xml:space="preserve">
									<g>
										<path class="st0" d="M49.14,100.43l81.19-44.68"/>
										<path class="st0" d="M130.12,28.3v27.89"/>
										<line class="st0" x1="129.81" y1="28.71" x2="48.62" y2="73.39"/>
										<path class="st0" d="M48.89,100.87V72.98"/>
										<path class="st0" d="M48.89,72.98l-5.01-22.85"/>
										<path class="st0" d="M0.04,46.86l43.85,3.27"/>
										<g>
										   <path class="st1" d="M0.76,73.86l81.19-44.68"/>
										   <g>
											   <g>
												   <line class="st2" x1="0.76" y1="73.86" x2="2.95" y2="72.66"/>
												   <line class="st3" x1="7.47" y1="70.17" x2="77.51" y2="31.63"/>
												   <line class="st2" x1="79.76" y1="30.39" x2="81.95" y2="29.18"/>
											   </g>
										   </g>
										</g>
										<g>
										   <line class="st1" x1="81.74" y1="1.73" x2="81.74" y2="29.62"/>
										   <g>
											   <line class="st2" x1="81.74" y1="1.73" x2="81.74" y2="4.23"/>
											   <line class="st4" x1="81.74" y1="8.81" x2="81.74" y2="24.83"/>
											   <line class="st2" x1="81.74" y1="27.12" x2="81.74" y2="29.62"/>
										   </g>
										</g>
										<line class="st0" x1="81.43" y1="2.14" x2="0.24" y2="46.82"/>
										<line class="st0" x1="0.51" y1="74.3" x2="0.51" y2="46.41"/>
										<path class="st0" d="M48.64,100.43L0.27,73.82"/>
										<g>
										   <line class="st1" x1="130.34" y1="55.79" x2="81.97" y2="29.18"/>
										   <g>
											   <line class="st2" x1="130.34" y1="55.79" x2="128.14" y2="54.58"/>
											   <line class="st5" x1="124.15" y1="52.38" x2="86.16" y2="31.49"/>
											   <line class="st2" x1="84.16" y1="30.39" x2="81.97" y2="29.18"/>
										   </g>
										</g>
										<path class="st0" d="M110.47,0 M130.24,28.58"/>
										<line class="st0" x1="81.13" y1="2.09" x2="125.29" y2="5.76"/>
										<line class="st0" x1="125.54" y1="5.63" x2="47.39" y2="48.2"/>
										<path class="st6" d="M124.74,52.71V5.8"/>
										<line class="st0" x1="130.12" y1="28.47" x2="125.11" y2="5.63"/>
										</g>
								</svg>
								<h6 class="text-center text-ultralight">مثلثی با سقف شیب‌دار</h6>

							</div>
						</div>


						<div class="col-3 rounded item-n p-2 m-2 ">
							<div class="scaling-svg-container">
								<svg id="aa" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 145 110"
									style="enable-background:new 0 0 500 500;" xml:space="preserve">
									<g>
										<path class="st0" d="M58.42,86.24l81.19-44.68" />
										<path class="st0" d="M81.86,20.75 M0.67,65.43" />
										<path class="st0" d="M16.79,48.17L97.98,3.49" />
										<g>
										  <path class="st1" d="M0.68,65.41l81.19-44.68" />
										  <g>
											<g>
											  <line class="st2" x1="0.68" y1="65.41" x2="2.88" y2="64.2" />
											  <line class="st3" x1="7.39" y1="61.72" x2="77.43" y2="23.18" />
											  <line class="st2" x1="79.69" y1="21.93" x2="81.88" y2="20.73" />
											</g>
										  </g>
										</g>
										<g>
										  <line class="st1" x1="113.3" y1="1.11" x2="113.3" y2="32.41" />
										  <g>
											<line class="st2" x1="113.3" y1="1.11" x2="113.3" y2="3.61" />
											<line class="st7" x1="113.3" y1="8.87" x2="113.3" y2="27.28" />
											<line class="st2" x1="113.3" y1="29.91" x2="113.3" y2="32.41" />
										  </g>
										</g>
										<path class="st0" d="M57.9,86.08L0.67,65.18" />
										<g>
										  <line class="st1" x1="139.33" y1="41.52" x2="81.86" y2="20.75" />
										  <g>
											<line class="st2" x1="139.33" y1="41.52" x2="136.98" y2="40.67" />
											<line class="st8" x1="132.18" y1="38.93" x2="86.61" y2="22.47" />
											<line class="st2" x1="84.21" y1="21.6" x2="81.86" y2="20.75" />
										  </g>
										</g>
										<path
										  class="st2"
										  d="M139.35,41.9c3.43-22.22-11.88-40.44-28.09-41.36C99.65-0.13,87.63,8.09,81.64,20.96"
										/>
										<path
										  class="st2"
										  d="M58.16,86.58c3.43-22.22-11.88-40.44-28.09-41.36C18.45,44.55,6.43,52.77,0.45,65.64"
										/>
									  </g>	
								</svg>
								<h6 class="text-center text-ultralight">قوس دار</h6>

							</div>
						</div>

						<div class="col-3 rounded item-n p-2 m-2 ">
							<div class="scaling-svg-container">
								
								<svg id="aa" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 130"
								style="enable-background:new 0 0 500 500;" xml:space="preserve">
								<g>
									<path class="st0" d="M58.47,88.57l81.19-44.68" />
									<path class="st6" d="M111.67,59.03V0" />
									<path class="st0" d="M58.47,116.01l81.19-44.68" />
									<path class="st0" d="M81.91,23.52 M0.72,68.2" />
									<path class="st0" d="M16.84,50.95L98.03,6.27" />
									<g>
									  <path class="st1" d="M0.73,95.18L81.92,50.5" />
									  <g>
										<g>
										  <line class="st2" x1="0.73" y1="95.18" x2="2.92" y2="93.98" />
										  <line class="st3" x1="7.44" y1="91.49" x2="77.47" y2="52.95" />
										  <line class="st2" x1="79.73" y1="51.71" x2="81.92" y2="50.5" />
										</g>
									  </g>
									</g>
									<g>
									  <path class="st1" d="M0.73,68.65l81.19-44.68" />
									  <g>
										<g>
										  <line class="st2" x1="0.73" y1="68.65" x2="2.92" y2="67.45" />
										  <line class="st3" x1="7.44" y1="64.96" x2="77.47" y2="26.42" />
										  <line class="st2" x1="79.73" y1="25.18" x2="81.92" y2="23.97" />
										</g>
									  </g>
									</g>
									<path class="st0" d="M57.95,115.86L0.31,95.59" />
									<g>
									  <line class="st1" x1="139.38" y1="71.29" x2="81.91" y2="50.52" />
									  <g>
										<line class="st2" x1="139.38" y1="71.29" x2="137.03" y2="70.44" />
										<line class="st8" x1="132.23" y1="68.71" x2="86.66" y2="52.24" />
										<line class="st2" x1="84.26" y1="51.37" x2="81.91" y2="50.52" />
									  </g>
									</g>
									<path
									  class="st2"
									  d="M139.39,44.67c3.43-22.22-11.88-40.44-28.09-41.36c-11.62-0.66-23.64,7.56-29.62,20.43"
									/>
									<path
									  class="st2"
									  d="M58.2,89.35c3.43-22.22-11.88-40.44-28.09-41.36C18.5,47.33,6.48,55.55,0.5,68.42"
									/>
									<path class="st0" d="M58.24,116.42V88.53" />
									<path class="st0" d="M0.5,96.09V68.2" />
									<path class="st0" d="M139.44,71.78V43.89" />
									<g>
									  <line class="st1" x1="81.91" y1="23.67" x2="81.91" y2="50.5" />
									  <g>
										<line class="st2" x1="81.91" y1="23.67" x2="81.91" y2="26.17" />
										<line class="st10" x1="81.91" y1="30.54" x2="81.91" y2="45.82" />
										<line class="st2" x1="81.91" y1="48" x2="81.91" y2="50.5" />
									  </g>
									</g>
									<path class="st0" d="M50.97,124.59" />
								  </g>
							</svg>
							<h6 class="text-center text-ultralight">قوس‌دار با دیوار عمودی</h6>
							</div>
						</div>

						<div class="col-3 rounded item-n p-2 m-2 ">
							<div class="scaling-svg-container">
								<svg id="aa" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 170 130"
									style="enable-background:new 0 0 500 500;" xml:space="preserve">
									<g>
										<path
										  class="st2"
										  d="M53.31,89.95c-0.26-5.8-1.74-21.04-13.07-34.82c-6.03-7.33-12.73-11.67-17.39-14.15"
										/>
										<path
										  class="st2"
										  d="M0.86,70.08c0.18-2.9,1.11-11.67,7.95-19.52c5.31-6.09,11.53-8.56,14.44-9.51"
										/>
										<line class="st0" x1="22.87" y1="41.11" x2="137.18" y2="0.47" />
										<path
										  class="st2"
										  d="M167.2,49.43c-0.26-5.8-1.74-21.04-13.07-34.82c-6.03-7.33-12.73-11.67-17.39-14.15"
										/>
										<path
										  class="st9"
										  d="M114.74,29.56c0.18-2.9,1.11-11.67,7.95-19.52c5.31-6.09,11.53-8.56,14.44-9.51"
										/>
										<line class="st0" x1="53.01" y1="89.6" x2="167.63" y2="49.43" />
										<line class="st6" x1="0.32" y1="69.51" x2="114.94" y2="29.35" />
										<line class="st0" x1="52.85" y1="117.04" x2="167.47" y2="76.87" />
										<line class="st6" x1="0.17" y1="96.96" x2="114.79" y2="56.79" />
										<path class="st0" d="M167.2,77.32V49.43" />
										<path class="st0" d="M53.31,117.49V89.6" />
										<path class="st0" d="M0.86,97.4V69.51" />
										<g>
										  <line class="st1" x1="114.74" y1="29.63" x2="114.74" y2="56.46" />
										  <g>
											<line class="st2" x1="114.74" y1="29.63" x2="114.74" y2="32.13" />
											<line class="st10" x1="114.74" y1="36.49" x2="114.74" y2="51.77" />
											<line class="st2" x1="114.74" y1="53.96" x2="114.74" y2="56.46" />
										  </g>
										</g>
										<g>
										  <line class="st1" x1="167.78" y1="77.22" x2="114.74" y2="56.46" />
										  <g>
											<line class="st2" x1="167.78" y1="77.22" x2="165.46" y2="76.31" />
											<line class="st11" x1="161.06" y1="74.59" x2="119.27" y2="58.23" />
											<line class="st2" x1="117.07" y1="57.37" x2="114.74" y2="56.46" />
										  </g>
										</g>
										<line class="st0" x1="53.31" y1="117.04" x2="0.27" y2="96.27" />
										<path class="st6" d="M136.72,65.22V0.72" />
									  </g>
								</svg>
								<h6 class="text-center text-ultralight">قوس دار شکسته با دیوار عمودی</h6>

							</div>
						</div>

						<div class="col-3 rounded item-n p-2 m-2 ">
							<div class="scaling-svg-container">
								<svg id="aa" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 180 130"
									style="enable-background:new 0 0 500 500;" xml:space="preserve">
									<g>
										<path
										  class="st2"
										  d="M56.19,89.95c-0.26-5.8-1.74-21.04-13.07-34.82c-6.03-7.33-12.73-11.67-17.39-14.15"
										/>
										<path
										  class="st2"
										  d="M3.73,70.08c0.18-2.9,1.11-11.67,7.95-19.52C17,44.47,23.21,42,26.12,41.05"
										/>
										<line class="st0" x1="25.74" y1="41.11" x2="140.05" y2="0.47" />
										<path
										  class="st2"
										  d="M170.07,49.43c-0.26-5.8-1.74-21.04-13.07-34.82c-6.03-7.33-12.73-11.67-17.39-14.15"
										/>
										<path
										  class="st9"
										  d="M117.61,29.56c0.18-2.9,1.11-11.67,7.95-19.52c5.31-6.09,11.53-8.56,14.44-9.51"
										/>
										<line class="st0" x1="55.88" y1="89.6" x2="170.5" y2="49.43" />
										<line class="st6" x1="3.19" y1="69.51" x2="117.81" y2="29.35" />
										<path class="st6" d="M117.66,56.79" />
										<path class="st6" d="M3.04,96.96" />
										<path class="st0" d="M170.07,49.43 M170.07,77.32" />
										<path class="st0" d="M56.19,89.6 M56.19,117.49" />
										<path class="st0" d="M3.73,69.51 M3.73,97.4" />
										<g>
										  <path class="st2" d="M117.61,56.46" />
										</g>
										<g>
										  <path class="st0" d="M117.61,29.63" />
										</g>
										<g>
										  <path class="st2" d="M117.61,56.46" />
										</g>
										<g>
										  <path class="st9" d="M170.66,77.22" />
										</g>
										<path class="st0" d="M3.14,96.27" />
										<path class="st0" d="M56.19,117.04" />
										<path class="st6" d="M139.6,65.22V0.72" />
										<path class="st0" d="M59.42,118.63L56.19,89.6" />
										<line class="st0" x1="173.39" y1="78.53" x2="170.15" y2="49.5" />
										<line class="st6" x1="117.56" y1="29.19" x2="114.32" y2="58.22" />
										<line class="st0" x1="3.73" y1="69.51" x2="0.5" y2="98.55" />
										<g>
										  <line class="st1" x1="0.82" y1="98.11" x2="114.32" y2="57.69" />
										  <g>
											<line class="st2" x1="0.82" y1="98.11" x2="3.18" y2="97.28" />
											<line class="st12" x1="7.91" y1="95.59" x2="109.6" y2="59.37" />
											<line class="st2" x1="111.97" y1="58.53" x2="114.32" y2="57.69" />
										  </g>
										</g>
										<line class="st0" x1="58.84" y1="118.26" x2="173.47" y2="78.1" />
										<g>
										  <line class="st1" x1="173.41" y1="77.9" x2="114.32" y2="57.69" />
										  <g>
											<line class="st2" x1="173.41" y1="77.9" x2="171.04" y2="77.09" />
											<line class="st13" x1="166.1" y1="75.4" x2="119.16" y2="59.35" />
											<line class="st2" x1="116.69" y1="58.5" x2="114.32" y2="57.69" />
										  </g>
										</g>
										<line class="st0" x1="59.23" y1="118.26" x2="0.5" y2="98.11" />
									  </g>
								</svg>
								<h6 class="text-center text-ultralight">قوس دار شکسته با دیوار شیب دار</h6>

							</div>
						</div>
					</div>
					<div class="row container-n mx-2 justify-content-center "
						style="height:24vh; margin-top:4vh; overflow-y:scroll;">
						<table class=" p-4 table table-hover text-center rtl text-right">
							<thead>

							</thead>
							<tbody>
								<tr>
									<td class="col-9">سازۀ اول</td>
									<td class="col-1">۱x</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1" ><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سازۀ دوم</td>
									<td class="col-1">۱x</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سازۀ سوم</td>
									<td class="col-1">۱x</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سازۀ چهارم</td>
									<td class="col-1">۱x</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</section>
		
		<section id="heat" class="hidden">
			<form action="" method="POST" id="f-heat">
			<h6 class="text-ultralight text-center rtl position-relative" style="z-index:100;">لطفا ظرفیت و بازۀ دمایی فعالیت سامانۀ گرمایشی گلخانه را انتخاب کنید.</h6>
			<h6 class="text-ultralight text-center text-bold rtl position-relative" style="z-index:100;">(بازۀ زمانی پیش فرض بر مبنای محصول مورد نظر مشخص شده‌اند .)</h6>
			<div class="row">
				<div class="col-3 row justify-content-center  d-flex justify-content-center align-items-center">
					<button class="link btn-n mt-4  px-3 py-1 text-center text-ultralight">افزودن سامانۀ جدید</button>
				</div>
				<div class="col-1 row justify-content-center  d-flex justify-content-center align-items-center">
					<button class="link btn-n mt-4 mr-4 px-3 py-1 text-center text-ultralight">ذخیره</button>
				</div>
			<div class="col-8  p-4 container-n justify-content-center rtl">
				<div class="row">
					<div class="col-1 d-flex justify-content-center align-items-center">
						<h3 class="text-center"><i class="fa fa-fire"></i></h3>
					</div>
				<div class="col-5 d-flex justify-content-center align-items-center">
					<h6 class="text-center">سامانۀ گرمایشی ۱</h6>
				</div>
				<div class="col-5">
					<div class="field">
						<input type="text" name="warmer_capacity" id="warmer_capacity"
							class="form-control item-n bg-white text-center" placeholder="ظرفیت (به کیلووات)" required=""
							autofocus="" style="direction:rtl; ">
						<label>ظرفیت (به کیلووات)</label>
					</div>
					
				</div>
			</div>
			</div>
			
		</div>
			<div class="row justify-content-center my-4">
				<div class=" mx-2 justify-content-center "
						style="overflow-y:scroll;">
						<table class=" p-4 table table-hover text-center rtl text-right">
							<thead>

							</thead>
							<tbody>
								<tr>
									<td class="col-9">سامانه گرمایشی ۱</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1" ><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سامانه گرمایشی ۲</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سامانه گرمایشی ۳</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سامانه گرمایشی ۴</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
							</tbody>
						</table>
					</div>
				<div class="col-4 container-n mx-2" style="padding-top:30px; padding-bottom: 60px;">
					<h5 class="text-center mb-4">روز</h5>
					<img class="text-center" src="assets/img/sun2.png" style="width: 30%; height:auto; margin: auto;  display: block; opacity:0.8;"></img>
					<div id="daySlider"  style="margin-top:50px;"></div>
				</div>
				<div class="col-4 container-n mx-2" style="padding-top:30px; padding-bottom: 60px;">
					<h5 class="text-center mb-4" >شب</h5>
					<img class="text-center" src="assets/img/moon.png" style="width: 30%; height:auto; margin: auto;  display: block; opacity:0.8;"></img>
					<div id="nightSlider" style="margin-top:50px;"></div>
				</div>
				
			</div>
			<div class="row  justify-content-center">
				<a href="#colding" class="h5 text-bold text-warning blink scrolls-btn link m-4  px-3 py-1 text-center text-ultralight">سامانۀ سرمایشی <i class="fa fa-arrow-circle-down"></i></a>
			</div>
			<br/>
			<br/>
			<div id="colding">
			<h6 class="text-ultralight text-center rtl position-relative" style="z-index:100;">لطفا ظرفیت و بازۀ دمایی فعالیت سامانۀ گرمایشی گلخانه را انتخاب کنید.</h6>
			<h6 class="text-ultralight text-center text-bold rtl position-relative" style="z-index:100;">(بازۀ زمانی پیش فرض بر مبنای محصول مورد نظر مشخص شده‌اند .)</h6>
			<div class="row">
				<div class="col-3 row justify-content-center  d-flex justify-content-center align-items-center">
					<button class="link btn-n mt-4  px-3 py-1 text-center text-ultralight">افزودن سامانۀ جدید</button>
				</div>
				<div class="col-1 row justify-content-center  d-flex justify-content-center align-items-center">
					<button class="link btn-n mt-4 mr-4 px-3 py-1 text-center text-ultralight">ذخیره</button>
				</div>
			<div class="col-8  p-4 container-n justify-content-center rtl">
				<div class="row">
					<div class="col-1 d-flex justify-content-center align-items-center">
						<h3 class="text-center"><i class="fa fa-snowflake-o"></i></h3>
					</div>
				<div class="col-5 d-flex justify-content-center align-items-center">
					<h6 class="text-center">سامانۀ سرمایشی ۱</h6>
				</div>
				<div class="col-5">
					<div class="field">
						<input type="text" name="cooler_capacity" id="cooler_capacity"
							class="form-control item-n bg-white text-center" placeholder="ظرفیت (به کیلووات)" required=""
							autofocus="" style="direction:rtl; ">
						<label>ظرفیت (به کیلووات)</label>
					</div>
					
				</div>
			</div>
			</div>
			
		</div>
			<div class="row justify-content-center my-4">
				<div class=" mx-2 justify-content-center "
						style="overflow-y:scroll;">
						<table class=" p-4 table table-hover text-center rtl text-right">
							<thead>

							</thead>
							<tbody>
								<tr>
									<td class="col-9">سامانه سرمایشی ۱</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1" ><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سامانه سرمایشی ۲</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سامانه سرمایشی ۳</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
								<tr>
									<td class="col-9">سامانه سرمایشی ۴</td>
									<td class="link col-1"><i class="fa fa-edit"></i></td>
									<td class="link col-1"><i class="fa fa-trash"></i></td>
								</tr>
							</tbody>
						</table>
					</div>
				<div class="col-4 container-n mx-2" style="padding-top:30px; padding-bottom: 60px;">
					<h5 class="text-center mb-4">روز</h5>
					<img class="text-center" src="assets/img/sun2.png" style="width: 30%; height:auto; margin: auto;  display: block; opacity:0.8;"></img>
					<div id="daySlider2"  style="margin-top:50px;"></div>
				</div>
				<div class="col-4 container-n mx-2" style="padding-top:30px; padding-bottom: 60px;">
					<h5 class="text-center mb-4" >شب</h5>
					<img class="text-center" src="assets/img/moon.png" style="width: 30%; height:auto; margin: auto;  display: block; opacity:0.8;"></img>
					<div id="nightSlider2" style="margin-top:50px;"></div>
				</div>
				
			</div>
			</div>
			<div class="row  justify-content-center">
				<button type="submit" data-section="ventilation" class="section-btn link btn-n m-4  px-3 py-1 text-center text-ultralight">ادامه</button>
			</div>
		</form>
		</section>
		<section id="ventilation" class="hidden">
			<h6 class="text-ultralight text-center rtl mt-2 position-relative" style="z-index:100;">لطفا تعداد دفعات تعویض هوا در ساعت را وارد کنید.</h6>
			<h6 class="text-bold text-center rtl mb-4" style="font-size: 15px;">(میتوانید از گزینه های پیش فرض زیر استفاده کنید.)</h6>
			<form action="" method="POST" id="f-ventilation">
			<div class="row col-8 mx-auto p-4 container-n justify-content-center rtl">
				<img class="mb-4" src="assets/img/gh2.png"></img>
				<div class="row">
				<div class="col-5">
					<label class="s-label text-bold">نوع گلخانه</label>
					<select id="ghlist" class="form-control " style="width:80%;" name="state">
						<option value="1">نوساز با شیشه</option>
						<option value="2">نوساز با پوشش پلاستیکی</option>
						<option value="3">قدیمی با شرایط قابل قبول</option>
						<option value="4">قدیمی با شرایط قدیمی</option>
					</select>
				</div>
				<div class="col-6">
					<div class="field">
						<input type="text" name="ventilagin_every_houre" id="ventilagin_every_houre"
							class="form-control item-n bg-white text-center" placeholder="دفعات تعویض هوا در ساعت" required=""
							autofocus="" style="direction:rtl; ">
						<label>دفعات تعویض هوا در ساعت</label>
					</div>
				</div>
			</div>
			</div>
			
			<div class="row  justify-content-center">
				<button type="submit" data-section="finance" class="section-btn link btn-n m-4  px-3 py-1 text-center text-ultralight">ادامه</button>
			</div>
		</form>
		</section>
		<section id="finance" class="hidden">
			<h6 class="text-ultralight text-center rtl">لطفا در صورت تمایل برای دریافت تحلیل های مالی، فایل اکسل زیر را دانلود کرده و بعد از تکمیل، آپلود نمایید.</h6>
			<h6 class="text-bold text-center rtl mb-4" style="font-size: 15px;">در غیر اینصورت میتوانید بدون ایجاد تغییر گزینه "اتمام" را انتخاب کنید.</h6>
			<div class="row col-8 mx-auto p-4 container-n justify-content-center rtl">
				<div class="col-4">
					<img src="assets/img/finance.png" style="width:100%;"></img>
				</div>
				<div class="col-8">
					<div class="row mt-4">
						<div class="col-4 link">
							<button class="item-n py-2 px-4 h6" onclick="location.href ='assets/file/finance.xlsx';"><i class="fa fa-download"></i>  دریافت فایل اکسل</button>
						</div>
						<div class="col-4 link">
							<button class="item-n py-2 px-4 h6" onclick="location.href ='assets/file/finance.pdf';"><i class="fa fa-question-circle"></i>دریافت فایل راهنما</button>
						</div>
						<div class="col-4 link">
							<h6 class="item-n py-2 px-4"><i class="fa fa-upload"></i>  آپلود فایل تکمیل شده</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="row  justify-content-center">
				<button id="finish" data-section="report" class="section-btn link btn-n m-4  px-3 py-1 text-center text-ultralight">اتمام</button>
			</div>
		</section>
		<section id="report" class="hidden">
			<h6 class="text-ultralight text-center rtl">در این قسمت گزارشات کلی شبیه سازی انجام گرفته را دریافت میکنید.</h6>
			<h6 class="text-bold text-center rtl mb-4" style="font-size: 15px;">برای دریافت توضیحات مفصل تر گزینه "گزارش کامل" را انتخاب کنید.</h6>
			<div class="row col-8 mx-auto p-4 container-n justify-content-center">
				<div class="col-4">
					<img src="assets/img/analytics.png" style="width:100%;"></img>
				</div>
				<div class="col-8">
					<div class="row mt-4 justify-content-center">
						<h5 class="mt-4">نگاه کلی</h5>
					</div>
					<div class="row mt-1 justify-content-center">
						<h2 class="p-name">پروژۀ اول</h2>	
					</div>
					
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-4">
					<canvas id="myChart" width="auto" height="auto"></canvas> 
				</div>
			</div>
		</section>
		<section id="project" class="show">
			
		<div class="row rtl justify-content-center align-content-center align-items-center">
			<div class="col-4  p-4 justify-content-center">
				<div class="row justify-content-center">
					<img src="assets/img/gh1.png" style="width:80%; height:auto;"></img>
				</div>
				<div class="row justify-content-center">
					<button id="add" class="btn-n mt-4">
						<h6 class="py-2 text-ultralight">ایجاد پروژۀ جدید</h6>
					</button>
				</div>
			</div>
			<table class="col-7 mt-4 table-n p-4 table table-hover text-center rtl text-right">
				<tbody>
					<tr>
						<th class="text-center" style="width:5%;">۱</th>
						<td style="width:61%;">پروژۀ اول</td>
						<td style="width:10%;"></td>
						<td class="link" style="width:8%;"><i class="fa fa-edit"></i></td>
						<td class="link" style="width:8%;"><i class="fa fa-eye"></i></td>
						<td class="link" style="width:8%;"><i class="fa fa-trash"></i></td>
					</tr>
					<tr>
						<th class="text-center" style="width:5%;">۲</th>
						<td style="width:61%;">پروژۀ دوم</td>
						<td style="width:10%;"></td>
						<td class="link" style="width:8%;"><i class="fa fa-edit"></i></td>
						<td class="link" style="width:8%;"><i class="fa fa-eye"></i></td>
						<td class="link" style="width:8%;"><i class="fa fa-trash"></i></td>
					</tr>
					<tr>
						<th class="text-center" style="width:5%;">۳</th>
						<td style="width:61%;">پروژۀ سوم</td>
						<td style="width:10%;"></td>
						<td class="link" style="width:8%;"><i class="fa fa-edit"></i></td>
						<td class="link" style="width:8%;"><i class="fa fa-eye"></i></td>
						<td class="link" style="width:8%;"><i class="fa fa-trash"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		</section>
		
		<!--
			<div class="col-4">
				<div class="tab"></div>
			</div>
			<div class="col-4">
				<div id="myGrid" style="height: 200px; width:500px;" class="ag-theme-material iransans"></div>
			</div>-->
		<!--<svg width="12cm" height="3.6cm" viewBox="0 0 1000 300" version="1.1"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <path id="MyPath"
          d="M 100 200 
             C 200 100 300   0 400 100
             C 500 200 600 300 700 200
             C 800 100 900 100 900 100" />
  </defs>
  <desc>Example toap01 - simple text on a path</desc>

  <use xlink:href="#MyPath" fill="none" stroke="red"  />
  <text font-family="Verdana" font-size="42.5" fill="blue" >
    <textPath xlink:href="#MyPath">
      آذربایجان شرقی آذربایجان غربی
    </textPath>
  </text>

</svg>-->
		<!--map-->
		<section id="map" class="hidden">
			<div class="row rtl justify-content-center">
				<div class="col-5 rtl justify-content-center">
					<form action="" method="POST" id="f-map">
					<h6 class="text-ultralight text-center m-4">لطفا محل قرارگیری گلخانه را انتخاب کنید.</h6>
					<h3 id="cityname" class="text-bold text-center mb-4"><i class="fa fa-map-marked m-3"></i></h3>
					<div class="row justify-content-center">
						<script src="assets/js/cities.js"></script>
						<div class="col-5 my-1">
							<label class="s-label text-bold">استان</label>
						<select id="statelist" class="form-control mx-auto my-2"  name="state"
							onChange="CityList(this.value); ">
							<option value="0">استان</option>
							<option value="1" data-name="tehran">تهران</option>
							<option value="2">گیلان</option>
							<option value="3">آذربایجان شرقی</option>
							<option value="4">خوزستان</option>
							<option value="5">فارس</option>
							<option value="6">اصفهان</option>
							<option value="7">خراسان رضوی</option>
							<option value="8">قزوین</option>
							<option value="9">سمنان</option>
							<option value="10">قم</option>
							<option value="11">مرکزی</option>
							<option value="12">زنجان</option>
							<option value="13">مازندران</option>
							<option value="14">گلستان</option>
							<option value="15">اردبیل</option>
							<option value="16">آذربایجان غربی</option>
							<option value="17">همدان</option>
							<option value="18">کردستان</option>
							<option value="19">کرمانشاه</option>
							<option value="20">لرستان</option>
							<option value="21">بوشهر</option>
							<option value="22">کرمان</option>
							<option value="23">هرمزگان</option>
							<option value="24">چهارمحال و بختیاری</option>
							<option value="25">یزد</option>
							<option value="26">سیستان و بلوچستان</option>
							<option value="27">ایلام</option>
							<option value="28">کهگلویه و بویراحمد</option>
							<option value="29">خراسان شمالی</option>
							<option value="30">خراسان جنوبی</option>
							<option value="31">البرز</option>
						</select>
					</div>
					<div class="col-5 my-1">
						<label class="s-label text-bold">شهر</label>
						<select class="form-control mx-auto my-2" name="city" id="city">
							<option value="0">ابتدا استان را انتخاب کنید</option>
						</select>
					</div>
					</div>

					<div class="mt-2 p-4 box-n">
						<img src="assets/img/map.png" class="d-flex mx-auto mt-2 mb-4"
							style="width:50%; height:auto;"></img>
						<div class="field col-5 mx-2">
							<input type="text" name="username" id="username"
								class="form-control box-n bg-white mb-4 text-center" placeholder="طول جغرافیایی"
								required="" autofocus="" style="direction:rtl; ">
							<label>طول جغرافیایی</label>
						</div>
						<div class="field col-5 mx-2">
							<input type="text" name="username" id="username"
								class="form-control box-n bg-white mb-4 text-center" placeholder="عرض جغرافیایی"
								required="" autofocus="" style="direction:rtl; ">
							<label>عرض جغرافیایی</label>
						</div>
						<h6 class="text-ultralight text-center" style="font-size:15px;">
							*درصورت نیاز میتوانید به منظور تعیین دقیق‌تر ، طول و عرض را تغییر دهید.
						</h6>
					</div>
					<div class="row justify-content-center">
						<button type="submit" data-section="shape" class="section-btn link btn-n m-4  px-3 py-1 text-center text-ultralight"
							>ادامه</button>
					</div>
				</form>
				</div>
				<div class="col-7 align-items-center">
					<svg viewBox="0 0 550 500" style="overflow: visible; position: relative;" version="1.1"
						xmlns="http://www.w3.org/2000/svg">

						<a xlink:href="#" xlink:title="آذربایجان غربی">
							<path class="path-city cm"
								d="M82.7,37.8C82.2,37.8,81.5,38,80.4,38.3C76.9,39.2,76.1,39.8,74.6,42.7C73.4,45.1,75.5,46.5,73.7,48.9C72,51.1,70.6,49.7,70.6,53.3C70.6,55.5,70.6,57.7,70.6,60C70.6,62.2,68.2,64.1,67,65.3C65.2,67.1,60.1,65.5,59,64.4C57.3,62.7,53.8,63.7,52.3,64C50.2,64.4,50.1,63.3,47,62.7C43.8,62.1,45.2,66.7,45.7,67.6C47,70.2,47.7,72.4,48.4,75.1C49.3,78.5,47,79.5,49.7,82.2C51.5,84,56,82.7,55,86.6C54.3,89.4,51.7,88.2,52.8,92.4C53.3,94.5,50.6,96.1,50.6,99.1C50.6,101.8,51.9,102.8,51.9,106.2C51.9,107.5,56.3,109.2,57.2,111.1C57.4,111.5,56.4,114.5,55.9,115.5C55.8,116.2,55.6,117,55.5,117.7C55.1,119.8,54.8,123.1,55.1,124.4C55.7,126.8,57.3,125.9,57.3,129.3C57.3,131.9,57.9,134.5,56,136.4C54.5,137.9,54.8,140.4,54.2,142.6C53.5,145.3,54.5,146.9,56.4,147.9C59.3,149.3,61.8,146.4,64.4,147.5C66.8,148.5,65.6,152.1,64.8,153.7C64.2,154.9,61.2,156,60.4,156.8C58.7,158.5,59.3,160.8,58.2,163C57.1,165.2,55.9,167.1,53.8,169.2C52.4,170.6,51.2,172.3,50.2,173.6C48.3,176.2,47.3,176.7,46.7,179.4C46.1,181.8,45.8,183.8,45.8,186.1C45.8,189.3,50.6,188.2,52.9,188.8C56.3,189.7,55.2,190.2,56.4,192.8C57.2,194.3,59.8,194.1,60.8,195.5C62.4,197.7,66,196.7,67.9,198.6C69.3,200,68.1,203.3,67,204.4C66.1,205.3,64.9,205.6,64.3,206.2C63.4,207.1,67.7,212.8,67.9,213.3C68.4,215.2,67.4,219.1,66.1,220.4C64,222.5,65.2,225.2,67.4,225.7C69.8,226.3,70.8,226.4,71.4,228.8C71.7,230,75.6,231.7,76.3,232.4C78.7,234.8,78.8,235.9,79.4,239.1C79.7,240.6,76.1,242.7,76.7,245.8C77.3,249,76.6,248.8,75.8,252C75,255.1,74.2,254.1,78,256C80.6,257.3,82.4,257.4,82.4,260.4C82.4,262.6,80.3,263.8,81.1,266.6C82,270.1,81.5,270.6,78.9,273.3C76.7,275.5,79.6,278.6,81.6,278.6C82.1,278.6,82.5,278.9,82.9,279C87.3,279,88.1,282.6,90.5,284.3C92.5,285.8,91.5,290,90.1,291.4C88.8,292.7,87,297.7,86.5,299.4C86.2,300.6,89.2,300.8,89.2,302.1C89.2,305.5,90.5,306.5,91.9,309.2C93.2,311.7,96.7,311,98.6,309.6C100.7,308,102.6,312.8,103.5,314C104.5,315.4,102.2,319.4,102.2,321.1C102.2,323,104.9,323.2,104.9,326.4C104.9,329.3,101.9,330,105.3,331.7C108,333.1,105,337.5,104.4,338.4C102.6,340.9,103.1,343.3,106.2,343.3C108.8,343.3,111.2,341.5,114.6,341.5C116.2,341.5,117.4,341.8,118.2,342.4C118.9,339.9,119.7,337.7,120.5,336C125,326.2,125.9,328.8,125.9,328.8C125.9,328.8,125.9,324.4,132.2,322.6C138.5,320.8,141.1,322.6,146.5,321.7C151.9,320.8,148.3,312.8,152.8,309.2C154.2,308.1,155.3,307.7,156.4,307.6C158.7,307.6,160.7,309.5,164.4,310.1C169.8,311,181.3,314.6,192.1,311.9C202.8,309.2,201,309.2,205.5,316.4C210,323.5,219.8,320.9,225.2,322.7C230.6,324.5,229.6,312,235.9,310.2C236.2,310.1,236.4,310.1,236.7,310C236.5,309.2,236.1,308.1,235.9,307.5C233.8,299.8,228.5,297.1,228.8,291.6C225,291,222.1,290.6,220.8,290.6C213.7,290.6,210.1,295.1,207.4,288.8C204.7,282.6,211.8,278.1,208.3,273.6C204.7,269.1,206.5,265.6,201.2,265.6C195.8,265.6,198.5,257.6,194,262C189.5,266.5,191.3,262.9,186,263.8C180.6,264.7,183.3,272.7,178,271.8C172.6,270.9,176.2,276.3,171.7,271.8C167.2,267.3,164.6,259.3,156.5,256.6C148.4,253.9,143.1,246.8,137.7,245C132.3,243.2,123.4,240.5,121.6,235.2C119.8,229.9,119.8,224.5,119.8,219.1C119.8,213.7,116.2,209.3,114.5,203.9C112.8,198.5,113.6,177.1,113.6,171.8C113.6,166.5,103.8,159.3,105.6,154.8C107.4,150.3,119,142.3,121.7,137.9C124.4,133.4,126.2,136.1,124.4,128.1C122.6,120.1,121.7,118.3,127.1,111.1C128,109.9,130.3,107.3,133.1,104.3C132.6,103.9,132.2,103.6,131.9,103.5C129.2,102.1,129.2,100.3,129.2,97.3C129.2,93.3,126.9,92.3,126.1,89.3C125.2,85.8,120.5,86.3,118.1,84.9C117.3,84.4,116.2,83.9,115.4,83.6C114.7,83,113.9,82.4,113.2,81.8C111.6,80.6,111.4,75.9,110.9,74.2C110.5,72.8,107.9,69.8,106.9,68.9C104.6,66.6,102.4,65.8,102.4,62.2C102.4,59.8,101.6,57.9,101.1,56C100.4,53.4,98.8,51.5,98,50.7C96.3,49,93.9,48.2,91.8,45.4C89.9,42.9,88.1,42.2,86,40.1C84.6,38.7,84.3,38,83.4,37.9C83,37.8,82.9,37.8,82.7,37.8ZM229.1,288.8C229,289,228.9,289.3,228.8,289.5C228.9,289.2,229,289,229.1,288.8Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="سیستان و بلوچستان">
							<path class="path-city hsd"
								d="M1154.3,711C1153.8,715.5,1153.4,719.1,1153,720.8C1151.2,728.8,1144.1,743.1,1144.1,757.4C1144.1,771.7,1146.8,774.3,1150.4,784.2C1154,794,1150.4,797.6,1141.5,797.6C1132.6,797.6,1128.1,787.8,1123.6,780.6C1119.1,773.5,1104.9,772.6,1103.1,769C1101.3,765.4,1097.7,766.3,1093.3,769.9C1088.8,773.5,1054.9,779.7,1049.6,782.4C1044.2,785.1,1045.1,786.9,1043.3,794C1041.5,801.1,1034.4,844.8,1033.5,851.1C1032.6,857.4,1033.5,855.6,1039.8,860C1046,864.5,1043.4,871.6,1043.4,882.3C1043.4,893,1043.4,896.6,1038.9,903.7C1034.4,910.8,1038.9,914.4,1038.9,919.8C1038.9,925.2,1039.8,924.3,1044.3,930.5C1048.8,936.7,1023.8,946.6,1014.8,951.9C1005.9,957.3,1009.4,956.4,1016.6,961.7C1023.7,967.1,1021.1,970.6,1018.4,978.6C1015.7,986.6,1013.1,981.3,1013.1,990.2C1013.1,999.1,1014.9,1009,1014.9,1015.2C1014.9,1021.4,1007.8,1052.7,1007.8,1058.9C1007.8,1065.1,1010.5,1076.8,1014.1,1082.1C1017.7,1087.5,1021.2,1085.7,1021.2,1092.8C1021.2,1099.9,1019.4,1099.9,1021.2,1107.1C1023,1114.2,1021.2,1109.8,1019.4,1116C1017.6,1122.2,1022.1,1124,1020.3,1130.3C1018.5,1136.5,1017.6,1134.8,1017.6,1141.9C1017.6,1149,1014.9,1149.1,1014,1155.3C1013.1,1161.5,1022.9,1162.4,1028.3,1167.8C1033.7,1173.2,1031,1173.1,1036.3,1178.5C1041.7,1183.9,1043.4,1186.5,1044.3,1193.7C1044.5,1195.3,1044.9,1197.6,1045.4,1200.3C1048,1199.3,1051.3,1197.8,1052.2,1197.6C1054.3,1197.1,1055,1195.9,1056.9,1195.4C1058.3,1195,1060.7,1193.8,1061.9,1193.8C1064.8,1193.8,1067.1,1194.3,1069.1,1196.3C1070.8,1198,1072.4,1199.1,1075.4,1199.1C1077.6,1199.1,1078.6,1198.2,1080.7,1198.2C1082.6,1198.2,1083.5,1197.9,1085.4,1197.9C1086.8,1197.9,1090.5,1197.3,1091.4,1198.5C1091.6,1198.8,1094.3,1202.8,1094.8,1202.6C1095.2,1202.5,1095.6,1202.4,1096.1,1202.3C1096.4,1202.3,1097.4,1202.4,1097.7,1202.3C1099.3,1201.3,1101.3,1199.7,1103,1198.8C1104.8,1197.9,1107,1198.8,1108.9,1199.7C1110.7,1200.6,1111.6,1202.8,1113.3,1203.2C1114.6,1203.5,1116.7,1203.2,1117.7,1201.9C1118.9,1200.3,1119.4,1198,1122.4,1198.7C1124.3,1199.2,1125.3,1200.1,1126.5,1201.2C1127.5,1202.2,1130.8,1205.2,1132.8,1203.7C1133.8,1202.9,1135.5,1201.3,1133.7,1199.9C1132.3,1198.9,1130.4,1197.8,1132.1,1196.1C1132.9,1195.3,1134.2,1193.7,1135.9,1193.3C1136.5,1193.1,1141.1,1192.9,1141.6,1193.3C1142.9,1193.6,1144.3,1193.8,1145.4,1194.9C1146.5,1196,1147.9,1197.2,1147.9,1199C1147.9,1200.7,1149,1204.5,1150.1,1205C1153.4,1206.7,1172.9,1208.8,1174.2,1208.8C1176.9,1208.8,1181.6,1209.7,1184.2,1210.4C1186,1210.9,1188.2,1210.5,1189.9,1211.3C1191,1211.9,1193.1,1214.7,1194,1214.8C1196.1,1215.2,1198.2,1215.3,1200.3,1215.7C1201.9,1216,1203.8,1216,1205.6,1216C1207.3,1216,1208.9,1216,1210.6,1215.7C1211.8,1215.5,1214.5,1214.8,1215,1212.9C1215.5,1210.9,1213.7,1210.7,1213.7,1209.1C1213.7,1207.8,1214.8,1206.2,1215.9,1205.3C1218.4,1203.4,1219,1204.5,1220.3,1206.2L1220.5,1205.3L1222.3,1198.6L1221.9,1170.2L1224.1,1169.3L1224.1,1165.3L1222.8,1164L1222.8,1156.9L1226.8,1157.8L1228.6,1155.5L1230.8,1126.2C1230.8,1124.5,1231.6,1121.8,1233.5,1120.9C1234.8,1120.2,1237,1118.2,1239.3,1118.2C1242.4,1118.2,1243.2,1117.8,1245.1,1115.9C1246.5,1114.5,1247.7,1114.8,1250,1113.7C1251.6,1112.9,1250.5,1108.5,1252.2,1108.8C1255.4,1109.4,1256.5,1110.3,1259.7,1109.7C1264.1,1108.8,1260,1107,1261.5,1103.9C1262.4,1102,1262.7,1101.2,1263.3,1099C1263.9,1096.6,1264.7,1096.8,1268.2,1095.9C1269.6,1095.5,1269.4,1092.6,1270.9,1092.3C1272,1092.1,1276.1,1091,1278,1091C1281.4,1091,1282.1,1090.5,1284.7,1089.2C1286.4,1088.4,1288.3,1087.5,1290.5,1087C1293,1086.4,1294.4,1084.8,1296.3,1084.3C1298.9,1083.6,1302.3,1083.4,1305.2,1083.4C1307.3,1083.4,1310.1,1081,1311.9,1082.1C1314.8,1083.9,1316.1,1083.2,1318.6,1082.5C1320.3,1082.1,1322,1085.2,1323.5,1084.3C1324.2,1083.9,1325,1083.4,1325.7,1083L1325.3,1066.1L1327.5,1065.2L1330.6,1063.4L1331,1060.7L1327.9,1058.9L1327.9,1045.6L1329.7,1042.5L1331.9,1042.1L1330.1,1039.4C1330.1,1039.4,1329.7,1035.8,1327.9,1034.5C1326.1,1033.2,1322.1,1032.3,1322.1,1032.3L1319.9,1035L1308.4,1036.8L1303.9,1038.6L1299.9,1037.3L1296.3,1037.3L1293.2,1036L1292.8,1031.1L1291.9,1028.9L1291.9,1024.9L1295,1018.2L1294.6,1014.7L1290.6,991.6L1285.7,976.5L1286.6,958.3L1285.3,955.6C1284.3,955.8,1281.4,956.2,1280,956.5C1279.2,956.7,1273.9,957.5,1273.3,958.3C1272.1,960.2,1269.7,955.6,1268.4,954.3C1267,952.9,1266.9,949.4,1264.9,949.4C1260.7,949.4,1262.8,946.7,1259.6,945.9C1257,945.2,1253.4,944.5,1250.3,943.7C1247.7,943.1,1243.2,941.9,1241,941.9C1238.2,941.9,1236.3,940.1,1233.9,939.7C1232.8,939.5,1227.8,939.6,1226.8,938.8C1224.9,937.4,1223.2,935.9,1221,934.8C1218.4,933.5,1218.5,931.8,1216.6,930.4C1215,929.2,1213.2,926.4,1211.7,925.5C1210.2,924.6,1207,924.2,1205.9,921.9C1204.8,919.8,1202.9,918.5,1201.5,917C1200.6,916.1,1198.9,913.2,1198.4,912.1C1197.6,910.1,1195.6,906.9,1195.3,905.4C1194.8,902.9,1193.7,901.6,1193.1,898.7C1192.6,896.3,1189.1,895.3,1189.1,894.7C1189.1,890.6,1185.1,893,1184.7,891.1C1184.2,888.9,1184.8,886.5,1182.5,885.3C1181.9,885,1181.3,884.7,1180.7,884.4C1180.7,884.4,1180.7,874.6,1179.8,873.3C1178.9,872,1177.1,873.3,1177.1,873.3L1144.2,837.8L1202.4,756.5L1202.9,745.8L1205.1,744L1205.5,740L1203.3,738.7L1203.3,736.5L1201.1,732.5C1201.1,732.5,1201.5,728.5,1201.5,727.2C1201.5,725.9,1197.5,724.5,1197.5,724.5L1196.6,718.7L1194.4,713.4L1154.3,711L1154.3,711Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="خراسان">
							<path class="path-city med"
								d="M870.6,179.5C865.5,179.5,867.8,181.8,865.3,183C863.5,183.9,862.4,186.6,860.4,186.6C859.7,186.6,858.9,186.6,858.2,186.6C855.7,186.6,852.6,187.1,850.2,186.6C845.9,185.7,844.9,181.8,842.2,181.3C838.2,180.5,837.2,181.3,835.1,183.5C832.2,186.4,831.2,181.7,827.1,181.7C823,181.7,820.1,181.4,816.9,183C815.4,183.8,811.7,187.6,813.4,189.2C814.3,190.1,817.4,194.1,814.7,195.4C812.5,196.5,811.5,198.4,808.5,197.6C808.2,197.5,807.9,197.5,807.7,197.4C807.8,200,807.9,202.7,807.9,203.6C807.9,208.6,805.4,217.5,805.4,223.8C805.4,230.1,805.4,228.9,811.7,231.4C818,233.9,807.9,240.2,799.1,242.7C790.3,245.2,783.9,259.1,783.9,259.1C783.9,259.1,791.5,275.5,796.5,275.5C801.5,275.5,796.5,278,800.3,283.1C804.1,288.1,801.6,289.4,800.3,295.7C799,302,805.4,302,811.7,309.6C818,317.2,824.3,313.4,829.4,315.9C834.4,318.4,838.2,313.4,845.8,315.9C853.4,318.4,844.5,328.5,842,333.6C839.5,338.6,848.3,362.6,850.8,367.7C853.3,372.7,873.5,386.6,873.5,391.7C873.5,396.8,859.6,408.1,859.6,414.4C859.6,420.7,852,422,839.4,429.6C832.5,433.8,821.3,450.1,811.9,465.1C813.2,465.2,814.3,465.2,814.8,465C820.5,463.1,836.2,460.6,840,454.9C843.8,449.2,858.3,439.1,864,435.3C866.5,433.6,869.4,433.1,872.7,433C876.9,432.9,881.5,433.7,886.1,434C894.3,434.6,901.9,440.3,898.7,449.8C895.5,459.3,898.1,468.1,889.9,468.7C881.7,469.3,880.4,475.6,877.3,480C874.1,484.4,879.8,482.5,874.1,495.2C868.4,507.8,864,510.4,864.6,517.3C865.2,524.2,863.3,530.6,869,533.7C874.7,536.9,878.5,550.1,884.2,552C889.9,553.9,900.6,552.7,904.4,549.5C908.2,546.3,915.1,549.5,913.2,552.7C911.3,555.9,905,565.9,911.3,571.6C917.6,577.3,913.8,587.4,917,595.6C920.2,603.8,918.9,611.4,924.6,611.4C930.3,611.4,942.3,627.8,942.3,634.7C942.3,641.6,953,651.7,950.5,657.4C948,663.1,937.2,674.4,934.1,680.1C930.9,685.8,933.5,683.9,929.1,697.1C928.4,699.3,927.1,702.5,925.6,706.1C967.3,721.9,1009.8,737.5,1013.6,740C1021.2,745,1028.7,767.8,1036.3,777.9C1039.6,782.3,1042.3,784.7,1045.2,786.3C1045.9,784.7,1047,783.6,1049.6,782.2C1055,779.5,1088.9,773.3,1093.3,769.7C1097.8,766.1,1101.4,765.3,1103.1,768.8C1104.8,772.3,1119.1,773.3,1123.6,780.4C1128.1,787.5,1132.6,797.4,1141.5,797.4C1150.4,797.4,1154,793.8,1150.4,784C1146.8,774.2,1144.1,771.5,1144.1,757.2C1144.1,742.9,1151.3,728.6,1153,720.6C1153.4,719,1153.8,715.4,1154.3,710.8L1131.8,709.2L1131.8,700.3L1130,697.6L1128.7,695.8L1131.4,690.5L1128.7,681.6L1127.8,671.4C1127.8,671.4,1126.5,665.6,1128.2,664.3C1130,663,1128.6,662.1,1128.6,662.1L1129.9,655.4L1129,648.3L1105.9,583.5C1109,585.1,1105,580,1105.9,578.2C1107.1,575.9,1108,573.8,1109.9,572C1111.5,570.4,1113.8,570,1114.8,568C1116,565.7,1116.5,563.1,1118.4,561.3C1119.1,560.6,1122.6,557.7,1122.8,556.9C1122.9,556.5,1123.4,550.9,1123.7,550.7C1123.8,550.6,1130.3,548.3,1129.9,547.6C1128,543.8,1125.4,545.4,1121.9,545.4C1116.1,545.4,1111.2,544.9,1105.9,543.6C1103.5,543,1102.1,542.5,1100.6,540.9C1099.6,539.9,1097.9,538,1097.9,536C1097.9,532.9,1098,532.5,1099.7,530.2C1101.1,528.3,1101.6,525.5,1100.6,523.5C1099.8,522,1100.2,519.2,1099.3,517.3C1098.3,515.3,1098,513.8,1098,511.1C1098,508.9,1098,506.7,1098,504.4C1098,501.7,1098.4,500.3,1098.9,498.2C1099.2,496.9,1101.6,493.4,1102.9,492.4C1104.6,491.1,1105.8,489.4,1106.9,488C1108.2,486.3,1109.5,484.9,1112.7,484.9C1114.6,484.9,1120.2,485.9,1121.1,484C1122.1,482,1122.1,480.3,1120.2,477.8C1118.8,475.9,1118,474.6,1115.8,472.9C1115.2,472.4,1109.9,468.1,1110.9,467.6C1111.8,467.1,1118.9,467.2,1119.3,466.3C1120.6,463.8,1119.2,461.6,1122.4,461C1125.7,460.3,1126.4,460.4,1126.4,456.6C1126.4,454.2,1127.1,450.1,1128.6,448.6C1130.6,446.6,1130.4,444.5,1130.4,441.5C1130.4,438.5,1130.4,436.9,1130.4,433.9C1130.4,431,1131.6,430,1132.2,427.7C1132.8,425.4,1133.5,423.6,1133.5,421C1133.5,418.6,1128,416.2,1129.9,414.8C1129.9,413.6,1129.2,408.1,1130.3,407.2C1132.7,405.4,1134.3,405.9,1134.3,402.3C1134.3,399,1136.7,398,1137.4,395.2C1138.1,392.2,1137.7,390.5,1139.6,388.5C1141.2,386.9,1140.9,384.9,1140.9,382.3C1140.9,378.9,1139.7,378.8,1136.9,377.4C1135.2,376.6,1134,373.7,1135.6,371.6C1136.9,369.9,1136.9,367.9,1136.9,364.9C1136.9,362.4,1136.9,360.1,1136.5,357.8C1136.1,355.8,1134.6,352.5,1132.1,352.5C1128.1,352.5,1128.3,352.2,1129.9,348.9C1130.6,347.5,1133.5,344.3,1133.5,342.2C1133.5,339.6,1133.5,337.6,1133.1,335.5C1132.5,332.4,1132,331.5,1130.9,329.3C1130.1,327.7,1129.9,324.7,1128.6,323.5C1126,320.9,1127.4,321.4,1128.2,318.2C1128.6,316.7,1129.3,313.2,1128.6,311.5C1127.6,309,1128.8,308.1,1129.5,305.3C1130.7,300.4,1128.2,303.5,1126.4,300.4C1126,299.7,1125.5,298.9,1125.1,298.2L1126,297.8L1076.7,300.5C1073.4,300.5,1073.4,299.4,1072.3,297.8C1072.1,297.4,1071.9,293,1071,292.5C1068.1,291,1066.8,288.2,1065.2,287.2C1062.7,285.7,1061.8,284.3,1060.3,281.4C1059.2,279.1,1058,276.7,1056.7,274.3C1055.8,272.5,1053.5,268.8,1050.9,269.4C1046.6,270.5,1045,267.9,1042,267.2C1039,266.5,1035.8,263.6,1032.7,263.6C1030,263.6,1028.8,265.9,1026.9,264C1025.8,262.9,1026.2,257.9,1023.8,259.1C1023.3,259.4,1015.5,262.2,1016.7,257.3C1017.1,255.6,1014.6,252.9,1012.7,252C1010.5,250.9,1009.2,249.7,1008.7,247.1C1008.2,244.8,1008.4,242.3,1007.8,240C1007.7,239.5,1007.2,233.3,1006.9,233.3C1004.6,233.3,1003,236.5,1001.6,236C999.3,235.1,996.4,233.5,994.9,232C992.7,229.8,990.5,228.8,989.1,228.4C987.2,227.9,985.9,224.4,983.8,224.4C981.7,224.4,977.1,225.2,975.8,223.5C973.4,220.3,974,220.8,971.8,223.1C971,223.9,967.5,227.5,965.6,227.1C963,226.6,960,222.2,958,222.2C952,222.2,955.1,226.4,952.7,227.5C949.5,229.1,947.8,227.5,944.3,226.6C942.7,226.2,934.8,224.8,934.5,223.5C934.1,221.5,933.4,217.5,930.9,216.8C927.9,216.1,924.4,216.9,921.6,215.5C920.3,214.8,917.1,213.5,916.3,212.4C913.7,208.9,913.9,211.5,911,211.5C908.9,211.5,905.4,210.4,904.3,209.3C904.2,209.2,904.1,208.9,903.9,208.9C900.5,207.6,895.6,206.7,891.9,206.7C889.2,206.7,887.8,207.6,885.2,206.3C883.6,205.5,879.4,203.8,879.4,201C879.4,199.9,880.1,194.6,879.4,193.9C878.7,193.2,876.3,191.4,875.9,189.9C875.4,188,873.2,186.8,873.2,185C873.3,183.2,873.4,179.5,870.6,179.5L870.6,179.5ZM796.3,489.8C795.8,490.5,795.4,491.1,795.1,491.5C795.4,491.1,795.8,490.5,796.3,489.8ZM1200.5,727.1C1200.6,727.2,1200.6,727.3,1200.7,727.4C1200.6,727.3,1200.5,727.2,1200.5,727.1Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="هرمزگان">
							<path class="path-city hsd"
								d="M749.7,920.7C749.7,920.7,755.1,932.3,749.7,935.9C744.3,939.5,749.7,942.2,755.1,946.6C760.5,951.1,771.2,959.1,772.9,965.4C774.7,971.6,769.3,986.8,769.3,993.1C769.3,999.4,775.5,998.4,777.3,1004.7C779.1,1010.9,764.8,1012.7,760.3,1012.7C755.8,1012.7,759.4,1016.3,754,1018.1C748.6,1019.9,745.1,1034.2,738.8,1038.6C732.6,1043.1,725.4,1035.9,720,1035C714.6,1034.1,709.3,1037.7,703,1038.6C696.8,1039.5,697.7,1037.7,686.1,1037.7C674.5,1037.7,660.2,1044.8,663.8,1047.5C667.4,1050.2,658.4,1056.4,662.9,1059.1C667.4,1061.8,659.3,1063.6,654.9,1067.1C650.4,1070.7,636.2,1060.9,629,1062.7C621.9,1064.5,621.8,1057.3,612,1057.3C602.2,1057.3,599.5,1057.3,595.1,1052.9C590.6,1048.4,588.8,1047.5,588.8,1047.5C588.8,1047.5,587,1049.3,577.2,1052C575.4,1052.5,573.4,1053.5,571.3,1055C573,1055.5,573.4,1056.3,573.4,1056.3L577.8,1059.5L582.2,1063.6L586,1065.5C586,1065.5,593.8,1071.8,596,1073.4C598.2,1075,624.2,1083.8,624.2,1083.8C624.5,1084.1,625,1084.4,625.2,1084.8C625.9,1086.5,626.9,1087.5,627.4,1089.5C627.8,1091.3,628.1,1093,629.3,1094.3C630.9,1095.9,631.3,1097.4,633.4,1098.4C635.6,1099.5,637.4,1099.9,639.1,1101.6C640.3,1102.8,642,1104.4,643.5,1105.1C645,1105.9,646.8,1105.7,648.8,1105.7C650.9,1105.7,653,1105.7,655.1,1105.7C656.3,1105.7,660.5,1106.4,661.4,1105.7C662.1,1105.1,663.8,1103.2,665.2,1103.2C667,1103.2,668.7,1103.5,670.2,1103.5C672.9,1103.5,672.4,1104.6,674.6,1105.7C677,1106.9,679.1,1106.3,681.8,1106.3C683.6,1106.3,686.5,1105.4,688.1,1107C689.3,1108.2,691.1,1110,692.2,1111.4C693.2,1112.7,694,1115.3,695.6,1116.2C697.8,1117.3,699.6,1116.8,701.9,1117.2C703.9,1117.5,707.3,1117.9,708.2,1120C708.9,1121.8,711.2,1124.2,714.2,1123.5C716.1,1123,717.2,1120.9,719.2,1121.9C720.5,1122.5,722.9,1124.1,724.5,1122.8C726.1,1121.6,727.3,1119.9,729.2,1119C730.3,1118.4,732.9,1116.9,733.6,1115.5C734.8,1113.1,737.2,1113.6,738.6,1111.7C739.9,1110.4,741.1,1109.4,742.7,1108.2C744.5,1106.8,745.9,1106,748.4,1105.4C749.8,1105,752,1103.7,753.1,1102.6C754.2,1101.5,756.6,1099.3,758.7,1100.4C760.7,1101.4,762.4,1101.3,764.7,1101.3C766.4,1101.3,768,1101.3,769.7,1101.3C772.4,1101.3,773,1100.4,775,1099.4C776.1,1098.9,778.5,1099.1,779.7,1097.8C780.6,1096.9,781.1,1095.5,780.6,1093.7C780.2,1092,779.7,1091.1,779.7,1089.3C779.7,1087.4,780.6,1086.5,781.6,1085.2C782.9,1083.5,783.5,1082.9,785.7,1082.3C787.2,1081.9,788.6,1081.8,790.4,1081.4C792.1,1081,794.2,1080.5,796.1,1080.5C798,1080.5,800.5,1081,802.4,1080.5C804.6,1079.9,805,1079.5,806.5,1078C807.8,1076.7,809.6,1076.4,810.6,1075.5C812.2,1073.8,813.2,1073.5,814.7,1072C815.9,1070.8,816.2,1069.9,817.2,1068.5C818.3,1067,819.9,1066.2,821.9,1065.7C824,1065.2,826.2,1065.5,828.2,1065C829.8,1064.6,832.8,1064.2,834.5,1065C836.1,1065.8,838.4,1066.9,840.1,1066.9C842.7,1066.9,845.4,1068.2,847.9,1068.2C850,1068.2,852.5,1068,854.5,1068.5C855.9,1068.9,859,1068.3,860.2,1069.4C861.4,1070.6,862.5,1071.9,864.6,1071.9C867.3,1071.9,867.7,1073.4,869.3,1075.1C870.9,1076.7,872.5,1077.4,874,1078.9C875.5,1080.4,875.6,1081.5,876.5,1083.3C876.7,1083.7,876.9,1084.1,877.1,1084.6C877.1,1084.6,879.6,1089.1,881.2,1090C882.8,1091,884.3,1098.5,884.3,1098.5C884.3,1098.5,889,1111.2,889.6,1112.8C890.2,1114.4,888.3,1118.2,888.3,1118.2C888.1,1118.8,888.8,1118.3,888,1119.1C886.3,1120.8,886,1123,887.1,1125.1C887.9,1126.6,889.8,1127.3,889.3,1129.5C888.9,1131.1,889,1132.9,889.3,1134.3C889.6,1136,889.9,1136.5,890.9,1137.8C892.1,1139.4,893.2,1140.8,894.7,1142.2C896.1,1143.6,896.5,1144.6,896,1147C895.7,1148.3,894.3,1149.3,894.7,1151.1C895,1152.4,894.7,1154.4,895.3,1155.5C895.8,1156.4,896.6,1159.9,897.2,1160.6C898.5,1161.9,900.1,1162.3,901.3,1164.1C901.7,1164.7,902.1,1165.4,902.6,1166C902.8,1166.6,902.9,1167.3,903.2,1167.9C903.9,1169.3,904,1172.2,905.1,1173.3C906.4,1174.7,907.7,1177.2,909.8,1177.7C912,1178.3,912.6,1177.7,914.8,1177.7C916.5,1177.7,919.2,1179.6,920.5,1179C921.6,1178.4,923.2,1177.6,924.9,1178C927,1178.5,926.8,1179.6,929.3,1179.6C931.5,1179.6,932.9,1178,934.6,1178C936.1,1178,938.8,1179,939.3,1180.9C939.5,1181.6,940.8,1185,942.1,1185C944.5,1185,946.7,1182.2,948.7,1182.2C952,1182.2,950.9,1181.4,953.7,1182.8C955.2,1183.6,956.9,1186.3,957.8,1187.9C958.8,1189.6,959.8,1191.6,961.2,1192.7C962.9,1194,966,1195.5,968.4,1194.9C970.3,1194.4,973.7,1191.6,975.6,1191.1C976.7,1190.8,981.2,1189,982.8,1188.6C984,1188.3,986.4,1187.8,987.5,1188.6C989.9,1190.4,989.5,1188.3,991.3,1187.9C992.7,1187.6,995.1,1187.2,996.6,1187.6C998.7,1188.1,999.7,1189.2,1002.2,1189.2C1004.2,1189.2,1006.2,1189.2,1008.2,1189.2C1011,1189.2,1012.8,1189.5,1015.4,1190.1C1017.6,1190.7,1018.6,1193,1021.3,1193C1023.3,1193,1024.6,1194.4,1025.7,1195.8C1026.8,1197.3,1028.1,1199.1,1029.5,1200.6C1030.6,1201.7,1033.5,1203.6,1035.4,1203.1C1035.8,1203,1036.2,1202.9,1036.7,1202.8C1038.3,1202.6,1041.1,1201.8,1042.7,1201.8C1043.2,1201.8,1044.5,1201.3,1046,1200.7C1045.5,1198,1045.1,1195.6,1044.9,1194.1C1044,1187,1042.2,1184.3,1036.9,1178.9C1031.5,1173.5,1034.2,1173.6,1028.9,1168.2C1023.5,1162.8,1013.7,1161.9,1014.6,1155.7C1015.5,1149.5,1018.2,1149.4,1018.2,1142.3C1018.2,1135.2,1019.1,1137,1020.9,1130.7C1022.7,1124.5,1018.2,1122.7,1020,1116.4C1021.8,1110.2,1023.6,1114.6,1021.8,1107.5C1020.6,1102.6,1021,1101,1021.5,1098.2C1018.5,1098.7,1016,1099.1,1014.7,1099.5C1007.6,1101.3,1001.3,1100.4,995.9,1103.1C990.5,1105.8,987,1104.9,979.8,1104.9C972.6,1104.9,972.6,1100.4,972.6,1096.9C972.6,1093.3,961.9,1077.3,955.7,1077.3C949.5,1077.3,950.3,1077.3,946.8,1080C943.2,1082.7,941.5,1088,936.1,1084.5C930.7,1080.9,925.4,1074.7,918.2,1074.7C911,1074.7,909.3,1062.2,909.3,1054.2C909.3,1046.2,905.7,1030.1,902.1,1025.6C898.5,1021.1,902.1,1020.2,902.1,1015.8C902.1,1011.3,891.4,997.1,885.2,996.2C879,995.3,881.6,988.1,878.9,976.5C876.2,964.9,866.4,970.3,861.9,976.5C857.4,982.7,848.5,988.1,839.6,988.1C830.7,988.1,815.5,972.9,814.6,966.7C813.7,960.5,813.7,952.4,813.7,945.3C813.7,938.2,816.4,923.9,809.2,923.9C802,923.9,790.5,932.8,784.2,936.4C778,940,776.2,929.3,769,926.6C761.3,923.4,749.7,920.7,749.7,920.7L749.7,920.7Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="بوشهر">
							<path class="path-city hdd"
								d="M397.3,814.4C397,814.4,396.6,814.4,396.3,814.5C392.3,815.2,389.9,818.8,387.7,822C388.4,822.1,389.1,822.3,390.1,822.3C392.1,822.3,393.1,823.6,394.2,825.1C395.2,826.5,395.8,827.2,396.7,828.9C397.3,830.1,398.9,832.3,398.9,834C398.9,835.9,398.7,837.3,398.3,839.1C397.8,841.1,398.3,842.2,399.2,844.2C400,845.9,401.8,847.2,403.6,849C403.8,849.3,404.5,850.9,404.9,851.2C406,852.3,406.5,854.6,407.7,856C409.2,857.5,410.3,859.9,411.8,861.4C413.1,862.7,413.6,864.1,414.9,865.8C415.6,866.8,417.3,868.2,418.4,869.3C419.6,870.5,421,871.8,421.8,873.4C422.5,874.8,423.7,876.6,424.9,877.8C425.6,878.5,427,880.6,428.3,881.3C429,881.6,433.5,883.9,433,884.8C432.7,885.3,432.3,885.8,432.1,886.4C433.4,889.1,431.7,888.9,431.2,891.2C430.5,893.9,432.2,893.8,432.8,895.9C433,896.6,433.7,899.4,432.8,900.3C431.8,901.3,430.6,901.8,430.6,903.8C430.6,905.5,430.8,907.8,432.5,908.2C434.1,908.6,435.7,908.2,437.2,908.2C439.5,908.2,442,908.3,443.8,910.1C445.3,910.9,447.5,911.2,448.5,913.3C449.9,916.1,448.4,916.3,447.6,918C446.5,920.2,445,919.4,443.2,921.2C441.5,922.9,441.9,923.1,441.9,925.6C441.9,928.5,443.6,928.6,444.7,931C445.6,932.8,447,933.8,449.1,934.8C450.9,935.7,454.9,936.2,456,937.6C457.2,939.3,457.9,940.6,458.8,942.4C459.5,943.9,459.7,945.1,459.7,947.2C459.7,949.1,459.7,951,459.7,952.9C459.7,954.3,459.2,957,459.7,958.3C459.9,958.8,460.1,959.4,460.3,959.9C460.4,960.1,460.5,960.3,460.6,960.5C461.2,961.7,463,963.1,463.4,964.6C463.8,966.3,463.6,968.6,465,970C466.6,971.6,467.7,972.7,468.8,974.8C469,975.2,469.2,975.6,469.4,976.1C470.3,978,471.8,979.7,472.8,981.8C473.9,984,473,984.3,472.5,986.2C472.2,987.5,471.8,989.8,472.2,991.3C472.7,993.4,473.8,993.4,475.6,994.8C477.1,995.9,476.8,997.2,477.8,998.6C479,1000.2,480.5,1001.6,481.6,1003C482.9,1004.7,484,1003.6,486,1004.6C487.6,1005.4,489.7,1007.3,491,1008.7C491.8,1009.5,493.5,1012.2,494.8,1012.5C496.9,1013,498.2,1011.9,500.1,1012.8C502,1013.8,505.3,1012.5,506.4,1013.1C508,1012.7,510.5,1012.3,512,1013.1C513.6,1013.9,514.9,1015.2,517,1014.7C518.5,1014.3,520.9,1014.1,522.6,1014.4C525.3,1014.9,527.2,1015.2,529.2,1017.2C530.7,1018.7,531.4,1019.7,533,1021.3C534.6,1022.9,536.4,1023.5,538,1025.1C539.5,1026.6,541.3,1027.2,543.3,1028.3C544.9,1029.1,547.3,1029.6,549.2,1029.6C551.7,1029.6,552.7,1030.1,554.9,1031.2C556.8,1032.2,557.9,1033.6,559.6,1035.3C560.8,1036.6,562.6,1038.2,563.7,1039.7C564.7,1041.1,565.3,1042.7,566.8,1043.5C567.5,1043.9,571.6,1045.9,570.2,1047.3C568.4,1049.1,566.4,1047.2,564.3,1048.3C563.1,1048.9,561.4,1051.5,563.7,1052.4C564.2,1052.6,564.7,1052.8,565.3,1053C565.3,1053,567.5,1054.6,570.3,1054.9C570.8,1055,571.2,1055,571.6,1055.2C573.7,1053.8,575.7,1052.7,577.5,1052.2C587.3,1049.5,589.1,1047.7,589.1,1047.7C589.1,1047.7,589.2,1047.8,589.2,1047.8C582.3,1039.2,567.7,1031.1,564.1,1026.3C558.7,1019.2,548,993.3,548,989.7C548,986.1,548,988.8,540.9,986.1C533.8,983.4,528.4,962,528.4,954C528.4,946,523.9,933.5,523.9,933.5C523.9,933.5,502.5,904.9,501.6,896.9C500.7,888.9,491.8,880.8,485.5,880.8C479.3,880.8,473,862,473,857.6C473,853.1,464.1,849.6,457.8,849.6C451.6,849.6,447.1,849.6,441.7,850.5C436.3,851.4,438.1,838,434.5,837.1C430.9,836.2,426.5,832.7,426.5,826.4C426.5,820.1,416.7,819.2,411.3,819.2C406.4,818.9,402.2,814.2,397.3,814.4L397.3,814.4Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="فارس">
							<path class="path-city hsd"
								d="M540.4,699.1C538.7,699,536.2,700.4,533.6,702.9C529.1,707.4,524.7,707.3,521.1,711.8C517.5,716.3,516.7,715.4,512.2,714.5C507.7,713.6,505.1,714.5,507.7,718.1C510.4,721.7,512.2,724.4,518.4,724.4C524.6,724.4,522,734.2,519.3,742.2C516.6,750.2,511.3,757.4,511.3,763.6C511.3,769.8,511.3,775.2,506,775.2C500.6,775.2,505.1,785,504.2,790.4C503.3,795.8,497.9,794,489,794C480.1,794,473.8,781.5,468.5,781.5C463.1,781.5,466.7,789.5,469.4,794.9C472.1,800.3,469.4,798.5,470.3,802.9C471.2,807.4,473.9,808.3,469.4,812.7C464.9,817.2,456,816.3,450.6,821.6C445.2,827,444.3,819.8,436.3,820.7C433.5,821,429.9,822.9,426.4,825.2C426.4,825.5,426.5,825.8,426.5,826.1C426.5,832.3,431,835.9,434.5,836.8C438.1,837.7,436.3,851.1,441.7,850.2C447.1,849.3,451.5,849.3,457.8,849.3C464,849.3,473,852.9,473,857.3C473,861.7,479.3,880.5,485.5,880.5C491.7,880.5,500.7,888.5,501.6,896.6C502.5,904.6,523.9,933.2,523.9,933.2C523.9,933.2,528.4,945.7,528.4,953.7C528.4,961.7,533.8,983.1,540.9,985.8C548,988.5,548,985.8,548,989.4C548,993,558.7,1018.9,564.1,1026C567.7,1030.8,582.3,1038.9,589.2,1047.5C589.2,1047.5,589.2,1047.5,589.2,1047.5C589.5,1047.7,591.3,1048.7,595.3,1052.8C599.8,1057.3,602.4,1057.2,612.2,1057.2C622,1057.2,622,1064.4,629.2,1062.6C636.3,1060.8,650.6,1070.6,655.1,1067C659.6,1063.4,667.6,1061.6,663.1,1059C658.6,1056.3,667.6,1050.1,664,1047.4C660.4,1044.7,674.7,1037.6,686.3,1037.6C697.9,1037.6,697,1039.4,703.2,1038.5C709.4,1037.6,714.8,1034,720.2,1034.9C725.6,1035.8,732.7,1043,739,1038.5C745.2,1034,748.8,1019.8,754.2,1018C759.6,1016.2,756,1012.6,760.5,1012.6C765,1012.6,779.3,1010.8,777.5,1004.6C775.7,998.4,769.5,999.3,769.5,993C769.5,986.7,774.8,971.6,773.1,965.3C771.3,959.1,760.6,951,755.3,946.5C749.9,942,744.6,939.4,749.9,935.8C753.7,933.3,752.1,926.9,750.9,923.3C745.9,916.2,741.8,908.5,741,902.8C739.2,890.3,740.1,885.8,721.3,884C702.6,882.2,702.6,865.2,699.9,859C697.2,852.8,690.1,846.5,681.1,844.7C672.2,842.9,670.4,834.9,670.4,826.9C670.4,818.9,665.9,806.4,657,799.2C648.1,792.1,636.5,760.8,630.2,746.5C623.9,732.2,615,718.8,608.8,716.2C602.6,713.6,592.7,710.8,582.9,714.4C573.1,718,564.1,718.9,553.4,716.2C542.7,713.5,542.7,706.4,542.7,701.9C542.6,700.1,541.8,699.1,540.4,699.1L540.4,699.1Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="کرمان">
							<path class="path-city hsd"
								d="M850.1,675.7C847.7,678.2,844.8,680.8,841.6,682.4C834.5,686,833.6,688.6,826.4,694C819.3,699.4,804.1,702.9,792.5,709.2C780.9,715.4,784.5,734.2,784.5,744.9C784.5,755.6,778.3,754.7,772.9,756.5C767.5,758.3,751.5,753.8,741.6,756.5C731.8,759.2,720.2,761.8,714.8,760.1C709.4,758.3,708.5,757.4,705,765.5C701.4,773.5,696.1,771.7,698.7,786C701.4,800.3,705.9,800.3,705.9,809.2C705.9,818.1,708.6,811,712.2,817.2C715.8,823.4,707.7,838.6,711.3,844.9C714.9,851.1,710.4,851.2,705,851.2C703.5,851.2,700,852.1,695.7,853.3C697.4,855.2,698.8,857.2,699.7,859.3C702.4,865.5,702.4,882.5,721.1,884.3C739.8,886.1,739,890.6,740.8,903.1C741.6,908.8,745.8,916.5,750.7,923.6C750.2,922.1,749.7,921,749.7,921C749.7,921,761.3,923.7,768.5,926.3C775.6,929,777.4,939.7,783.7,936.1C789.9,932.5,801.5,923.6,808.7,923.6C815.8,923.6,813.2,937.9,813.2,945C813.2,952.1,813.2,960.2,814.1,966.4C815,972.6,830.1,987.8,839.1,987.8C848,987.8,856.9,982.4,861.4,976.2C865.9,970,875.7,964.6,878.4,976.2C881.1,987.8,878.4,995,884.7,995.9C891,996.8,901.6,1011.1,901.6,1015.5C901.6,1020,898,1020.8,901.6,1025.3C905.2,1029.8,908.8,1045.8,908.8,1053.9C908.8,1062,910.6,1074.4,917.7,1074.4C924.8,1074.4,930.2,1080.6,935.6,1084.2C941,1087.8,942.7,1082.4,946.3,1079.7C949.9,1077,949,1077,955.2,1077C961.4,1077,972.1,1093.1,972.1,1096.6C972.1,1100.1,972.1,1104.6,979.3,1104.6C986.4,1104.6,990,1105.5,995.4,1102.8C1000.8,1100.1,1007,1101,1014.2,1099.2C1015.5,1098.9,1018,1098.4,1021,1097.9C1021.2,1096.6,1021.3,1095.1,1021.3,1092.9C1021.3,1085.8,1017.7,1087.5,1014.2,1082.2C1010.6,1076.8,1007.9,1065.2,1007.9,1059C1007.9,1052.8,1015,1021.5,1015,1015.3C1015,1009.1,1013.2,999.2,1013.2,990.3C1013.2,981.4,1015.9,986.7,1018.5,978.7C1021.2,970.7,1023.9,967.1,1016.7,961.8C1009.6,956.4,1006,957.3,1014.9,952C1023.8,946.6,1048.8,936.8,1044.4,930.6C1039.9,924.4,1039,925.2,1039,919.9C1039,914.6,1034.5,911,1039,903.8C1043.5,896.7,1043.5,893.1,1043.5,882.4C1043.5,871.7,1046.2,864.5,1039.9,860.1C1033.7,855.6,1032.8,857.4,1033.6,851.2C1034.5,845,1041.6,801.2,1043.4,794.1C1044.3,790.5,1044.5,788.2,1045.2,786.5C1042.4,784.9,1039.6,782.4,1036.3,778.1C1028.7,768,1021.2,745.3,1013.6,740.2C1006.8,735.6,883.7,692.1,850.1,675.7L850.1,675.7ZM751.7,932.9C751.7,933,751.6,933.2,751.5,933.3C751.6,933.2,751.7,933.1,751.7,932.9ZM1020.3,1100.2C1020.3,1100.6,1020.2,1100.9,1020.2,1101.3C1020.2,1100.9,1020.3,1100.5,1020.3,1100.2ZM1020.3,1103.3C1020.3,1103.7,1020.4,1104.2,1020.5,1104.7C1020.3,1104.2,1020.3,1103.7,1020.3,1103.3ZM1020.5,1105C1020.6,1105.7,1020.8,1106.4,1021,1107.2C1020.8,1106.4,1020.6,1105.7,1020.5,1105Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="سمنان">
							<path class="path-city csd"
								d="M783.8,259.3C783.3,259.3,782.9,259.4,782.6,259.4C778.1,259.4,771.9,276.3,770.1,282.6C768.3,288.8,766.5,294.2,766.5,302.3C766.5,310.4,741.5,301.4,735.2,302.3C729,303.2,711.1,321,708.4,326.4C705.7,331.8,685.2,328.2,678.9,328.2C672.7,328.2,665.5,337.1,663.7,341.6C661.9,346.1,661.9,351.4,656.5,357.7C651.1,363.9,648.5,364.8,643.1,370.2C637.7,375.6,635,373.8,629.7,373.8C624.3,373.8,611,378.3,611,378.3C611,378.3,611,378.3,613.7,385.5C616.4,392.6,615.5,398.9,609.3,405.1C603.1,411.3,588.7,415.8,583.4,415.8C578,415.8,565.6,409.5,557.5,409.5C549.5,409.5,540.6,403.3,537.9,399.7C535.2,396.1,534.3,399.7,529.9,399.7C525.4,399.7,527.2,404.2,527.2,413.1C527.2,422,530.8,422.9,537,428.3C543.2,433.7,538.8,433.7,535.2,439C531.6,444.4,528.1,443.5,530.7,448.8C533.4,454.2,527.1,456,528.9,464C530.7,472,522.6,475.6,522.6,475.6C522.6,475.6,531.5,482.8,537.8,484.5C544,486.3,555.6,483.6,561.9,483.6C568.1,483.6,588.7,493.4,594,497C599.4,500.6,757.3,493.5,762.7,494.3C762.8,494.3,763,494.4,763.2,494.5C763.2,494.5,763.2,494.2,763.2,494.2C763.2,494.2,789.7,498,794.7,491.7C799.7,485.4,826.3,437.4,838.9,429.9C851.5,422.3,859.1,421.1,859.1,414.7C859.1,408.3,873,397,873,392C873,387,852.8,373.1,850.3,368C847.8,363,838.9,339,841.5,333.9C844,328.9,852.9,318.8,845.3,316.2C837.7,313.7,833.9,318.7,828.9,316.2C823.9,313.7,817.6,317.5,811.2,309.9C804.9,302.3,798.6,302.3,799.8,296C801.1,289.7,803.6,288.4,799.8,283.4C796,278.4,801.1,275.8,796,275.8C791.4,275.6,784,259.6,783.8,259.3Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="گلستان">
							<path class="path-city cas"
								d="M780.5,193.3C777.4,193.3,776.4,194.6,773.4,194.6C769.6,194.6,767.2,194.5,763.6,195.9C762.3,196.2,761.9,196.2,760.5,196.8C756.9,198.2,755.7,201.7,752.5,203C750.2,203.9,745.8,207.4,742.7,207.4C738.5,207.4,737.8,209.3,735.6,212.3C733.9,214.5,730.9,216.7,728.5,218.5C727.2,219.5,725.3,222.1,723.6,222.5C719.8,223.4,721.3,225.7,719.2,227.8C717.4,229.6,717.4,230.9,717.4,233.6C717.4,236.5,717.1,238,716.5,240.7C715.8,244,715.6,244.8,713.4,246.9C712.4,247.9,709.8,251.5,707.2,250.5C703.9,249.2,701.7,248.4,698.7,249.6C696.8,250.3,694.9,251.2,693.4,252.7C691.3,254.8,689.8,255,686.7,255.8C684.6,256.3,683,259,680.9,258.5C679.2,258.1,676.3,257.2,674.7,257.2C672.2,257.2,669.8,256.8,667.6,256.8C664.7,256.8,661.4,256.6,660,256.4C658.7,256.2,658.9,256.3,659.5,257.5C660.1,258.7,660.8,260.9,660.8,263.2C660.8,265,661.7,266.3,662.1,267.9C662.5,269.4,662.9,270.8,663.4,272.6C663.9,274.7,664.2,275.5,665,277C665.6,278.3,665.7,281,665.9,282.3C666.2,284,666.8,285.2,666.8,287C666.8,289,666.9,290,667.8,291.7C668.5,293.1,668.1,295.4,667.8,296.7C667.3,298.6,665.9,298.3,664,299.2C663.8,299.3,663.5,299.4,663.2,299.5C662.2,301.7,661.3,304,661.3,305.8C661.3,310.3,667.5,311.2,672.9,313.8C678.3,316.5,681,322.7,684.5,322.7C687.4,322.7,686.2,324.4,689.3,328.8C697.4,329.4,706.8,329.8,708.6,326.3C711.3,320.9,729.1,303.1,735.4,302.2C741.6,301.3,766.7,310.2,766.7,302.2C766.7,294.2,768.5,288.8,770.3,282.5C772.1,276.3,778.3,259.3,782.8,259.3C783,259.3,783.5,259.3,783.9,259.2C783.9,259.2,783.9,259.1,783.9,259.1C783.9,259.1,790.2,245.2,799.1,242.7C807.9,240.2,818,233.9,811.7,231.4C805.4,228.9,805.4,230.1,805.4,223.8C805.4,217.5,807.9,208.7,807.9,203.6C807.9,202.6,807.8,200,807.7,197.4C805.4,196.7,803.9,195.6,801,196.3C798.8,196.8,796.4,197.2,793.4,197.2C790.9,197.2,789,197.2,786.7,196.3C785.2,195.8,782.5,193.3,780.5,193.3L780.5,193.3Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="اصفهان">
							<path class="path-city csd"
								d="M524.3,476.4C522.5,477.7,519.2,479.8,516.7,479.8C513.1,479.8,481,481.6,476.5,482.5C472,483.4,469.4,496.8,468.5,501.2C467.6,505.7,468.5,506.6,472.1,511.9C475.7,517.3,464.1,519.9,464.1,525.3C464.1,530.7,458.7,531.6,458.7,531.6C458.7,531.6,452.5,536.1,447.1,537C441.7,537.9,405.2,548.6,403.4,553.1C401.6,557.6,396.2,559.3,400.7,561.1C405.2,562.9,397.1,567.3,397.1,572.7C397.1,578.1,390,585.2,386.4,585.2C382.8,585.2,381.9,583.4,376.6,588.8C371.2,594.2,372.1,592.4,374.8,596.8C377.5,601.3,369.4,601.3,365.9,602.1C362.3,603,361.4,610.1,364.1,614.6C366.8,619.1,371.2,616.4,376.6,616.4C382,616.4,382,622.7,381.1,628C380.2,633.4,386.4,628.9,386.4,628.9C386.4,628.9,398,625.3,404.2,625.3C410.4,625.3,407.8,628,414,631.6C420.2,635.2,421.1,631.6,425.6,631.6C430.1,631.6,436.3,626.3,441.7,628C447.1,629.8,448.8,624.4,453.3,625.3C457.8,626.2,454.2,630.6,460.4,636.9C466.6,643.1,463.1,647.6,464,653C464.9,658.4,476.5,664.6,480.1,668.2C483.7,671.8,484.5,678.9,484.5,685.1C484.5,691.3,476.5,701.2,476.5,705.6C476.5,710,481.9,727,482.8,730.6C483.7,734.2,482.8,743.1,476.5,744C470.3,744.9,472.9,752,477.4,756.5C481.9,761,489,765.4,497,769.9C498.7,770.9,502.8,773.2,506.5,775.2C511.2,774.8,511.3,769.6,511.3,763.6C511.3,757.4,516.7,750.2,519.3,742.2C522,734.2,524.7,724.4,518.4,724.4C512.2,724.4,510.4,721.7,507.7,718.1C505,714.5,507.7,713.6,512.2,714.5C516.7,715.4,517.5,716.3,521.1,711.8C524.7,707.3,529.1,707.4,533.6,702.9C536.1,700.4,538.6,699,540.4,699.1C541.7,699.2,542.6,700.1,542.6,702C542.6,706.5,542.6,713.6,553.3,716.3C564,719,573,718.1,582.8,714.5C585.1,713.7,587.5,713.2,589.7,712.9C589.3,708.8,589,705.1,589,702.9C589,694.9,592.6,677.9,594.3,667.2C596.1,656.5,589.9,642.2,595.2,638.6C600.6,635,601.4,636.8,605,632.3C608.6,627.8,621.9,625.2,630,626C638,626.9,645.2,632.3,658.6,628.7C672,625.1,680,615.3,688.9,614.4C697.8,613.5,719.3,610.9,724.6,603.7C730,596.6,731.7,581.4,738,574.2C744.2,567.1,746.9,570.6,752.3,567.9C752.7,567.7,753.5,567.4,754.5,567.1C754.2,566.9,752.2,565.7,752.2,565.7C752.2,565.7,762.3,563.2,762.3,539.2C762.3,515.6,763.5,494.7,763.6,494C763.4,493.9,763.2,493.9,763.1,493.8C757.7,492.9,599.8,500,594.4,496.5C589,492.9,568.5,483.1,562.3,483.1C556.1,483.1,544.5,485.8,538.2,484C533.3,482.9,527,478.4,524.3,476.4ZM597.1,713.1C597.4,713.1,597.8,713.2,598.1,713.3C597.8,713.2,597.5,713.1,597.1,713.1ZM603.3,714.4C604.1,714.6,604.8,714.9,605.6,715.1C604.9,714.9,604.1,714.6,603.3,714.4Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="چهارمحال و بختیاری">
							<path class="path-city med"
								d="M452.6,625.2C448.7,625,446.8,629.7,441.8,628C436.4,626.2,430.2,631.6,425.7,631.6C421.2,631.6,420.4,635.2,414.1,631.6C407.9,628,410.5,625.3,404.3,625.3C398.1,625.3,386.5,628.9,386.5,628.9C386.5,628.9,383.7,630.9,382.1,630.6L381.1,631.6C381.1,631.6,378.4,634.3,380.2,640.5C382,646.7,382.9,656.6,390,660.2C397.1,663.8,387.3,662,395.4,666.5C403.4,671,407,678.1,407,685.2C407,692.3,412.3,700.4,415.9,702.2C419.5,704,415.9,711.1,415.9,711.1C415.9,711.1,408.8,716.4,416.8,720C424.8,723.6,427.5,723.6,432.9,724.5C438.3,725.4,445.4,738.8,450.7,744.1C456.1,749.5,458.8,754.8,464.1,752.1C468.2,750,469.7,749.1,473,748.7C472.7,746.4,473.6,744.5,476.6,744.1C482.8,743.2,483.7,734.3,482.9,730.7C482,727.1,476.6,710.2,476.6,705.7C476.6,701.2,484.6,691.4,484.6,685.2C484.6,679,483.7,671.8,480.2,668.3C476.6,664.7,465,658.5,464.1,653.1C463.2,647.7,466.8,643.3,460.5,637C454.3,630.8,457.8,626.3,453.4,625.4C453.1,625.2,452.8,625.2,452.6,625.2L452.6,625.2Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="کهکیلویه و بویراحمد">
							<path class="path-city med"
								d="M413.5,717.4C411.7,718.2,410.3,719.1,409.7,719.9C406.1,724.4,405.2,727,399.9,727.9C394.5,728.8,386.5,735.9,386.5,742.2C386.5,748.5,394.5,757.4,399,759.2C403.5,761,396.3,771.7,407.9,775.3C419.5,778.9,422.2,781.6,418.6,787.8C415,794,411.5,799.4,415,802.1C416.6,803.3,417.3,811.2,417.6,819.5C421.8,820.2,425.9,821.7,426.5,825.3C430,823,433.6,821.1,436.4,820.8C444.4,819.9,445.3,827.1,450.7,821.7C456.1,816.3,465,817.2,469.5,812.8C474,808.3,471.3,807.4,470.4,803C469.5,798.5,472.2,800.3,469.5,795C466.8,789.6,463.2,781.6,468.6,781.6C474,781.6,480.2,794.1,489.1,794.1C498,794.1,503.4,795.9,504.3,790.5C505.2,785.1,500.7,775.3,506.1,775.3C506.3,775.3,506.5,775.3,506.7,775.3C503,773.2,498.9,770.9,497.2,770C489.2,765.5,482,761.1,477.6,756.6C475.3,754.3,473.5,751.2,473.1,748.7C469.8,749.1,468.3,750.1,464.2,752.1C458.8,754.8,456.1,749.4,450.8,744.1C445.4,738.7,438.3,725.4,433,724.5C427.6,723.6,425,723.6,416.9,720C415,719.1,414,718.2,413.5,717.4L413.5,717.4ZM475.5,744.2C475.2,744.3,474.9,744.4,474.6,744.6C474.9,744.4,475.2,744.3,475.5,744.2ZM511,770.7C510.9,771,510.9,771.3,510.8,771.5C510.9,771.2,510.9,771,511,770.7ZM510.5,772.3C510.4,772.5,510.3,772.7,510.2,772.9C510.4,772.6,510.5,772.4,510.5,772.3ZM509.8,773.6C509.7,773.7,509.6,773.8,509.5,773.9C509.6,773.9,509.7,773.7,509.8,773.6ZM507.3,775.1C507.1,775.1,507,775.2,506.8,775.2C506.9,775.2,507.1,775.1,507.3,775.1Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="خوزستان">
							<path class="path-city hdd"
								d="M305.1,587.7C301.4,587.7,297,588,293.7,589.6C288.3,592.3,282.1,587.8,276.7,587.8C271.3,587.8,269.6,603.9,262.4,612.8C255.2,621.7,245.5,637.8,242.8,643.1C240.1,648.5,246.4,652,241,656.5C239.8,657.5,236.6,659.5,232.5,661.8C233.4,662.7,233.7,663.7,234.2,665.4C234.9,668.3,236.6,666.9,237.3,669.9C238.1,673.1,240.1,673.4,240.9,676.6C241.2,677.9,243.1,680.9,243.6,681.9C244.8,684.4,247,683.1,247.6,686.4C247.8,687.4,247.8,687.5,248,688.6L236.9,716.1C236.9,716.1,234.7,737,235.1,739.2C235.5,741.4,234.7,751.2,234.7,751.2L256.9,752.1L254.6,788.6C254.6,789.5,254.3,790.4,254.6,791.2C256.6,796.3,258.5,792.9,262.1,795.6C264.4,797.3,264.3,798.1,264.3,801.4C264.3,805.5,265.7,806.8,269.2,808.5C273.8,810.8,272,810.9,274.5,814.3C275.6,815.8,276.7,817.6,276.7,819.6C276.7,822.1,276.6,823.9,278,825.8C279.5,827.8,278.2,829.8,279.3,832C281.2,835.9,282.1,833.3,285.1,835.5C288.1,837.7,286.9,835.9,287.2,835.8C287.5,835.7,288,835.4,288.5,835.5C289.6,835.8,290.2,836.3,291.2,836.8C291.8,837,293.1,837.4,293.9,837.1C294.9,836.7,295.3,836.3,296,835.7C296.5,835.2,297,834.9,297.4,834.1C297.8,833.3,298,832.8,298,831.7C298,830.5,297.7,830.2,297.2,829.2C297,828.9,297,826.6,297.5,827.3C298,827.9,298.7,828.8,299.4,829.3C300.2,829.9,300.8,830.9,301.6,831.3C302.5,831.7,303.8,832.7,304.6,832.9C305.2,833,306.9,833,307.6,833.4C308.9,834.2,309.9,834.4,311.2,834C312.3,833.7,312.9,833.4,313.9,832.9C314.4,832.6,315.8,832.5,316.3,832C316.7,831.6,317.8,830.8,318.3,830.6C319,830.2,319.4,829.8,319.9,829.2C320.3,828.7,321.1,827.7,320.7,826.7C320.4,825.9,320.1,825.2,320.4,824.2C320.5,823.6,320.8,822.8,321,822.2C321.3,821.5,321.3,820.8,321.3,819.9C321.3,818.9,321.3,818,321.1,817.2C320.9,816.2,320.8,815.7,320.5,815C320.2,814.4,319.6,813,319.1,812.5C318.6,812,317.3,811,316.9,810.3C316.8,810.2,316.8,810.1,316.7,810C316.4,809.7,315.3,808.7,315.4,808C315.6,807.4,315.5,805.8,316.3,805.6C317,805.4,318.2,804.6,318.2,803.9C318.2,803.1,318,802.1,318.2,801.2C318.4,800.4,318.7,799.4,319.5,799C320,798.8,321.2,797.5,321.6,797.6C322.6,797.8,323.6,798,324.3,798.9C324.6,799.3,325.4,800.9,326,800.9C327.1,800.9,327.7,800.7,328.7,800.7C330,800.7,330.5,800.4,331.4,799.6C331.9,799.1,332.5,798.6,332.5,797.7C332.5,796.8,332.5,795.8,333.3,795.4C333.7,795.2,335.3,794.2,335.6,794.6C336.3,795.3,336.8,795.8,337,796.8C337.2,797.8,337.5,798.5,337.8,799.5C338,800.3,338.2,801.3,337.5,802C337.1,802.4,336.2,803.6,335.5,803.6C334.9,803.6,333.1,803.3,332.7,803.8C332.2,804.3,332,804.9,330.8,804.9C329.8,804.9,328.8,804.7,327.8,804.7C326.8,804.7,326.3,804.8,325.4,805.2C324.8,805.5,323.3,806.1,322.9,806.6C322.3,807.4,321.6,808.3,321.6,809.3C321.6,810.2,321.7,810.9,322.2,811.5C322.7,812,324,812.8,324.4,813.6C324.7,814.1,325.7,815.2,326.3,815.3C326.5,815.4,326.7,815.4,327,815.5C327.9,815.7,329.2,816,329.7,816.5C331.8,818.7,331.8,816.5,334.1,816.5C336.4,816.5,335.7,818.5,335.7,820.6C335.7,822.2,335.8,825,338.2,825C340.7,825.6,341,824,343.2,824C345,824,350.2,824,351,825.6C351.7,827,352.2,828.3,352.9,829.7C353.6,831.1,354.1,833.1,354.8,834.5C355.6,836.2,358.3,838.9,360.8,837.7C362.4,836.9,362.8,836.1,364.6,835.2C365.9,834.5,368.9,832.8,369.9,831.4C371,829.9,372.1,827.7,373.7,827C375.5,826.1,377.5,826.3,379,825.1C381.6,823.1,381.7,822.9,385.3,822.2C386.4,822,387.1,822.1,387.9,822.3C390,819,392.5,815.4,396.5,814.8C396.8,814.7,397.2,814.7,397.5,814.7C402.4,814.6,406.7,819.3,411.7,819.3C413.4,819.3,415.7,819.4,417.9,819.7C417.6,811.4,416.9,803.5,415.3,802.3C411.7,799.6,415.3,794.3,418.9,788C422.5,781.8,419.8,779.1,408.2,775.5C396.6,771.9,403.8,761.2,399.3,759.4C394.8,757.6,386.8,748.7,386.8,742.4C386.8,736.1,394.8,729,400.2,728.1C405.6,727.2,406.4,724.5,410,720.1C410.7,719.3,412,718.4,413.8,717.6C411.8,714.5,416.2,711.2,416.2,711.2C416.2,711.2,419.8,704,416.2,702.3C412.6,700.5,407.3,692.5,407.3,685.3C407.3,678.1,403.7,671,395.7,666.6C387.7,662.1,397.5,663.9,390.3,660.3C383.2,656.7,382.3,646.9,380.5,640.6C378.7,634.4,381.4,631.7,381.4,631.7L382.4,630.7C381.6,630.6,381.1,629.9,381.4,628.1C382.3,622.7,382.3,616.5,376.9,616.5C371.5,616.5,367.1,619.2,364.4,614.7C363.3,612.9,362.8,610.7,362.8,608.6C359.2,608.5,355.9,608.4,353.6,608.4C345.6,608.4,344.7,606.6,341.1,601.3C337.5,595.9,326.8,594.1,321.5,594.1C316.1,594.1,314.4,587.8,310.8,587.8C309.2,587.8,307.3,587.7,305.1,587.7Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="لرستان">
							<path class="path-city med"
								d="M253.5,479.8C249,479.8,245.5,481.6,245.5,481.6C245.5,481.6,247.3,491.4,242.8,492.3C238.3,493.2,231.2,496.7,231.2,496.7C231.2,496.7,232.1,501.2,234.8,504.7C237.5,508.3,236.6,511.8,233,517.2C229.4,522.6,226.7,526.1,219.6,526.1C212.5,526.1,200.9,529.7,197.3,533.2C193.7,536.8,189.3,537.7,196.4,548.4C203.5,559.1,207.1,562.7,217.8,562.7C228.5,562.7,237.5,581.4,245.5,586.8C253.3,592,254.3,608.3,257.7,619.1C259.3,616.8,260.9,614.6,262.4,612.7C269.5,603.8,271.3,587.7,276.7,587.7C282.1,587.7,288.3,592.2,293.7,589.5C297,587.8,301.4,587.5,305.1,587.6C307.3,587.6,309.3,587.7,310.6,587.7C314.2,587.7,316,594,321.3,594C326.7,594,337.4,595.8,340.9,601.2C344.5,606.6,345.4,608.3,353.4,608.3C355.6,608.3,358.9,608.4,362.6,608.5C362.6,605.4,363.8,602.6,365.9,602.1C369.5,601.2,377.5,601.2,374.8,596.8C372.1,592.3,371.2,594.1,376.6,588.8C382,583.4,382.8,585.2,386.4,585.2C390,585.2,397.1,578.1,397.1,572.7C397.1,567.3,405.1,562.9,400.7,561.1C398.3,560.1,398.8,559.1,400,557.8C399.6,557.6,399.3,557.5,398.9,557.5C393.5,557.5,397.1,553,397.1,549.5C397.1,546,393.5,540.6,388.2,545.9C382.8,551.3,387.3,541.5,379.3,543.2C371.3,545,373.1,537.8,374,532.5C374.9,527.1,371.3,522.7,365.1,522.7C358.9,522.7,356.1,525.4,355.3,530.7C354.4,536.1,349.1,533.4,346.4,537C343.7,540.6,337.5,534.3,333,534.3C328.5,534.3,333.9,527.1,333,519.1C332.1,511.1,325,511.1,321.4,505.7C317.8,500.3,314.3,503.9,310.7,503C307.1,502.1,306.3,504.8,298.2,504.8C290.1,504.8,286.6,503,281.2,501.2C275.8,499.4,273.2,492.3,266.9,492.3C260.6,492.3,257.9,479.8,253.5,479.8Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="ایلام">
							<path class="path-city hsd"
								d="M124.9,498.6C119.5,498.6,124,503.1,124,506.6C124,510.1,118.6,523.5,116.8,528C116.6,528.5,116.3,529.8,115.9,531.5C116,531.6,116.1,531.6,116.3,531.7C119.2,533.1,113.9,536,118.5,534.8C121.4,534.1,123.4,533.4,126.1,534.8C128.2,535.9,127.2,540,126.1,541.5C124,544.3,127.2,544.6,130.1,544.6C133,544.6,133.7,548,133.7,550.4C133.7,553.8,135.8,554.7,136.8,556.6C137.3,557.6,137.8,558.5,138.6,559.3C140.3,562.7,143.9,561.9,143.9,566C143.9,568.9,145.1,570.6,143,572.7C141.7,574,137.1,574.1,135,574.5C131.6,575.2,136.6,578.7,137.7,578.9C140.2,579.5,137.2,584.9,136.8,585.6C135.7,587.8,139.6,589.2,141.2,589.2C144.3,589.2,147.4,589.2,150.5,589.2C153.1,589.2,156.7,590.5,158.5,592.3C159.6,593.4,163.2,594.7,164.7,595.4C166.5,596.3,168.7,598.9,170,600.7C171.8,603.1,173.5,605.1,176.2,606.5C177,606.9,180.3,609.7,181.5,610.9C183,612.4,184.3,613.3,185.9,614.9C187.7,616.7,189,617.2,190.3,619.8C191.4,621.9,194,624.4,195.6,626C196,626.7,196.5,627.5,196.9,628.2C198,630,201.2,630.1,202.2,632.2C203.2,634.1,207.6,632.7,209.3,632.7C211.9,632.7,213.6,630.5,216.9,630.5C218.6,630.5,219.2,634.5,220,635.4C222,637.4,222.7,635.5,222.7,639.8C222.7,642.3,220.1,642.9,222.7,645.6C224.1,647,223.9,648.7,225.8,649.6C228.8,651.1,227.3,654.5,226.7,655.8C225,659.1,228.3,659.7,230.3,660.7C231.1,661.1,231.7,661.5,232.2,662C236.3,659.7,239.5,657.7,240.7,656.7C246.1,652.2,239.8,648.7,242.5,643.3C244.6,639.1,251.2,628.1,257.4,619.3C254,608.6,253,592.3,245.2,587C237.2,581.6,228.2,562.9,217.5,562.9C206.8,562.9,203.2,559.3,196.1,548.6C189,537.9,193.4,537,197,533.4C200.6,529.8,212.2,526.3,219.3,526.3C226.4,526.3,229.1,522.7,232.7,517.4C236.3,512,237.2,508.5,234.5,504.9C233.8,504,233.3,503,232.8,502.1C228.8,503.3,224.6,504.5,222.9,504.9C219.3,505.8,214,509.4,219.3,511.2C224.7,513,221.1,517.5,216.6,517.5C212.1,517.5,210.3,515.7,205.9,517.5C201.4,519.3,194.3,522,188.9,522C183.5,522,180.9,522.9,175.5,519.3C170.1,515.7,166.6,507.7,161.2,506.8C155.8,505.9,151.4,506.8,147.8,504.1C144.2,501.4,143.3,499.6,138.9,499.6C134.8,499.4,130.3,498.6,124.9,498.6ZM233.4,663.2C233.5,663.4,233.5,663.5,233.6,663.7C233.6,663.5,233.5,663.3,233.4,663.2Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="مرکزی">
							<path class="path-city csd"
								d="M423,382.5C423,382.5,415.8,384.3,409.6,387C403.4,389.7,384.6,391.4,382.8,395.9C381,400.4,378.3,399.5,378.3,399.5C378.3,399.5,376.5,399.5,373,399.5C369.4,399.5,367.6,399.5,370.3,403.9C373,408.4,370.3,410.2,365.8,408.4C361.3,406.6,361.3,406.6,361.3,413.8C361.3,421,364.9,417.4,366.7,420.9C368.5,424.5,363.1,427.1,359.5,426.2C355.9,425.3,353.3,427.1,357.7,430.7C362.2,434.3,363.9,431.6,369.3,435.2C374.7,438.8,374.7,444.1,375.6,448.6C376.5,453.1,375.6,456.6,371.1,457.5C366.6,458.4,370.2,454.8,365.8,448.6C361.3,442.4,365.8,440.6,362.2,440.6C358.6,440.6,350.6,438.8,346.1,438.8C341.6,438.8,348.8,448.6,344.3,451.3C339.8,454,340.7,457.5,340.7,461.1C340.7,464.7,338.9,462,332.7,462C326.5,462,328.2,463.8,332.7,467.3C337.2,470.9,337.2,468.2,336.3,474.4C335.4,480.6,336.3,480.7,339,484.2C341.7,487.8,343.5,497.6,343.5,497.6C343.5,497.6,342.6,504.7,339,509.2C338.1,510.4,335.4,512.9,331.9,515.9C332.3,516.8,332.6,517.8,332.7,519C333.6,527,328.2,534.2,332.7,534.2C337.2,534.2,343.4,540.5,346.1,536.9C348.8,533.3,354.1,536,355,530.6C355.9,525.2,358.6,522.6,364.8,522.6C371,522.6,374.6,527.1,373.7,532.4C372.8,537.8,371,544.9,379,543.1C387,541.3,382.6,551.1,387.9,545.8C393.3,540.4,396.8,545.8,396.8,549.4C396.8,553,393.2,557.4,398.6,557.4C398.9,557.4,399.3,557.5,399.7,557.7C400.7,556.5,402.3,555.1,403.1,553C404.9,548.5,441.5,537.8,446.8,536.9C452.2,536,458.4,531.5,458.4,531.5C458.4,531.5,463.8,530.6,463.8,525.2C463.8,519.8,475.4,517.2,471.8,511.8C469.1,507.8,468,506.3,467.9,503.9C462.9,504.2,455.7,504.8,450.4,506.4C441.5,509.1,442.4,503.7,437.9,503.7C433.4,503.7,432.6,491.2,427.2,492.1C421.8,493,417.4,498.4,412,498.4C406.6,498.4,409.3,489.5,404.9,482.3C400.4,475.2,405.8,475.1,408.5,468.9C411.2,462.7,412.1,460.9,413.8,452.8C415.6,444.8,419.1,449.2,425.4,446.5C431.6,443.8,440.6,442,445.9,442C451.3,442,453.1,430.4,454.8,423.3C456.6,416.2,464.6,405.4,464.6,400.1C464.6,394.7,457.5,390.3,457.5,390.3C457.5,390.3,453.9,386.7,450.3,390.3C446.7,393.9,448.5,387.6,442.3,387.6C436.1,387.6,435.2,386.7,430.7,386.7C426.6,387,423,382.5,423,382.5Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="قم">
							<path class="path-city vcm"
								d="M455.9,421.3C455.6,422.1,455.3,422.9,455.1,423.6C453.3,430.7,451.5,442.3,446.2,442.3C440.8,442.3,431.9,444.1,425.7,446.8C419.5,449.5,415.9,445,414.1,453.1C412.3,461.1,411.4,462.9,408.8,469.2C406.1,475.4,400.8,475.5,405.2,482.6C409.7,489.7,407,498.7,412.3,498.7C417.7,498.7,422.1,493.3,427.5,492.4C432.9,491.5,433.7,504,438.2,504C442.7,504,441.8,509.4,450.7,506.7C456,505.1,463.3,504.4,468.2,504.2C468.2,503.4,468.3,502.5,468.5,501.4C469.4,496.9,472.1,483.6,476.5,482.7C481,481.8,513.1,480,516.7,480C519.2,480,522.5,477.9,524.3,476.6C523.5,476,523,475.6,523,475.6C523,475.6,531,472,529.3,464C527.5,456,533.8,454.2,531.1,448.8C530,446.6,530,445.4,530.6,444.5C530.5,444.5,530.4,444.4,530.3,444.4C520.5,441.7,519.6,436.3,512.5,436.3C505.4,436.3,477.7,422,470.5,422C468.3,421.8,462.7,421.6,455.9,421.3L455.9,421.3ZM468.3,504.7C468.3,504.9,468.4,505,468.4,505.2C468.3,505,468.3,504.8,468.3,504.7ZM469.2,507.4C469.4,507.8,469.7,508.2,470,508.7C469.7,508.2,469.4,507.8,469.2,507.4Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="تهران و البرز">
							<path class="path-city csd"
								d="M439.7,331.7C435.4,331.8,434.9,332.5,436.4,338C438.2,344.2,445.3,342.5,448.9,347.8C452.5,353.2,445.3,354.1,441.8,363C438.2,371.9,427.5,370.1,423,371.9C419.9,373.1,420.3,379.4,420.7,383.2C422,382.8,423,382.6,423,382.6C423,382.6,426.6,387.1,431,387.1C435.5,387.1,436.3,388,442.6,388C448.8,388,447.1,394.3,450.6,390.7C454.2,387.1,457.8,390.7,457.8,390.7C457.8,390.7,464.9,395.2,464.9,400.5C464.9,405.3,458.5,414.4,455.8,421.4C462.6,421.7,468.2,421.9,470.2,421.9C477.3,421.9,505,436.2,512.2,436.2C519.3,436.2,520.2,441.6,530,444.3C530.1,444.3,530.2,444.4,530.3,444.4C531.1,443,533.2,442.1,535.3,438.9C538.9,433.5,543.3,433.5,537.1,428.2C530.9,422.8,527.3,422,527.3,413C527.3,404,525.5,399.6,530,399.6C534.5,399.6,535.4,396,538,399.6C540.7,403.2,549.6,409.4,557.6,409.4C565.6,409.4,578.1,415.7,583.5,415.7C588.9,415.7,603.2,411.2,609.4,405C615.6,398.8,616.5,392.5,613.8,385.4C611.1,378.3,611.1,378.2,611.1,378.2C611.1,378.2,611.9,377.9,612.7,377.7C607.9,374.2,603.7,371.2,602.2,370.2C596.8,366.6,598.6,370.2,594.2,375.5C589.7,380.9,587.1,370.2,579.9,370.2C572.8,370.2,574.5,362.2,567.4,366.6C560.3,371.1,560.3,370.2,557.6,376.4C554.9,382.6,547.8,378.2,543.3,377.3C538.8,376.4,530.8,370.1,529,365.7C527.2,361.2,514.7,357.7,507.6,357.7C500.5,357.7,504,358.6,498.7,352.4C493.3,346.2,488.9,345.2,484.4,345.2C479.9,345.2,477.3,338.1,470.1,338.1C463,338.1,447.8,331.8,441.6,331.8C441,331.7,440.3,331.6,439.7,331.7L439.7,331.7ZM455.9,421.4C455.8,421.8,455.6,422.1,455.5,422.5C455.6,422.1,455.7,421.7,455.9,421.4Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="مازندران">
							<path class="path-city cas"
								d="M449.4,283.3C446.1,285.9,443.6,287.6,442.6,287.9C437.2,289.7,438.1,289.7,437.3,294.2C436.4,298.7,437.3,302.2,433.7,303.1C430.1,304,434.6,309.4,434.6,309.4C434.6,309.4,452.5,324.6,457.8,326.4C461.1,327.5,463,332.5,465,337.3C467,337.7,468.8,338,470.3,338C477.4,338,480.1,345.1,484.6,345.1C489.1,345.1,493.5,346,498.9,352.3C504.3,358.5,500.7,357.6,507.8,357.6C514.9,357.6,527.4,361.2,529.2,365.6C531,370.1,539,376.3,543.5,377.2C548,378.1,555.1,382.5,557.8,376.3C560.5,370.1,560.5,370.9,567.6,366.5C574.7,362,573,370.1,580.1,370.1C587.2,370.1,589.9,380.8,594.4,375.4C598.9,370,597.1,366.5,602.4,370.1C604,371.1,608.1,374.1,612.9,377.6C616.3,376.5,625.7,373.6,630,373.6C635.4,373.6,638.1,375.4,643.4,370C648.8,364.6,651.4,363.7,656.8,357.5C662.2,351.3,662.2,345.9,664,341.4C665.8,336.9,672.9,328,679.2,328C680.9,328,683.9,328.3,687.1,328.6L687.6,325.8C686.6,323.6,686.6,322.6,684.5,322.6C680.9,322.6,678.2,316.3,672.9,313.7C667.5,311,661.3,310.1,661.3,305.7C661.3,303.9,662.2,301.6,663.2,299.4C662.1,299.7,660.7,299.7,659.3,300C657.1,300.4,654.8,299.8,652.7,300.3C651.2,300.7,648.9,300.3,647.4,300.3C644.9,300.3,643.5,300,642.1,298.1C641.4,297.1,640.9,296.5,641,296.1C641.1,295.6,641.7,295.3,643.1,295C645.4,294.7,644.4,294.8,646.3,294.5C644.8,295,629.6,294.8,622.5,296.2C621.9,296.3,621.3,296.2,620.7,296.2C615.1,296.2,608.9,299.4,603.8,300.6C598.8,301.8,594,303.8,589.6,305.9C585.6,307.9,578,307.5,573.6,308.6C568.3,309.9,562.7,309.2,558.5,311.3C555.4,312.9,548.1,313,545.5,313.6C540.8,314.8,535.3,315.7,530,315.7C523.9,315.7,519.4,315,514,313.9C507.3,312.6,501.2,308.6,495.3,308.6C492.3,308.6,482.8,304.6,478.4,303.5C473.4,302.2,464.3,294.7,463.3,294C458.3,290.5,453.7,287.2,449.4,283.3Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="کرمانشاه">
							<path class="path-city med"
								d="M152.8,402.5C152.7,402.6,152.6,402.7,152.4,402.9C152.4,403.8,152.4,404.7,152.4,405.6C152.4,407.5,154.8,407.5,156.4,408.3C158.3,409.2,153.7,411.9,153.7,414.1C153.7,418.2,153.1,418.7,149.3,417.2C146.4,416.1,145.8,416.3,144.4,419C143.1,421.5,138.5,417.3,136,418.6C134.4,419.4,135.1,421.9,132.4,422.6C130.3,423.1,133.7,426.7,133.7,428.8C133.7,432.8,131.3,432.6,128.4,431.9C125.1,431.1,124.5,431.9,125.3,435C126.1,438.4,122.4,437.6,120.4,438.6C119.9,438.8,118.9,441.8,117.3,442.6C114.6,444,116.3,446.6,117.7,447.9C119.1,449.3,119.5,451.8,119.5,454.1C119.5,457.2,119.3,458.5,115.9,458.5C113.8,458.5,111.5,455.4,109.2,454.5C108.9,454.4,108.6,454.5,108.3,454.5C103.5,452.6,107.7,460.3,107.9,460.7C109.4,463.7,105.9,465.6,103.9,465.1C100.4,464.2,100,468.4,100.4,470C100.8,471.7,101.7,474,102.6,474.9C104.1,476.4,106.8,474.9,108.8,477.6C110.4,479.8,109.6,483,108.8,484.7C107.7,486.9,107.5,488,107.5,490.9C107.5,491.6,103,494.3,102.2,494.5C100.1,495,100.4,498.9,100.4,500.7C100.4,502.6,95.9,501.8,95.9,505.6C95.9,506.2,102.9,507.3,103.9,508.3C105.4,509.8,104.6,513,106.6,515C107.9,516.3,107.8,518.5,108.4,520.8C109.1,523.5,111.2,524.7,112.4,527C113.9,529.9,113.2,530.2,116,531.7C116.4,530,116.7,528.7,116.9,528.2C118.7,523.7,124.1,510.4,124.1,506.8C124.1,503.2,119.6,498.8,125,498.8C130.4,498.8,134.8,499.7,139.3,499.7C143.8,499.7,144.7,501.5,148.2,504.2C151.8,506.9,156.2,506,161.6,506.9C167,507.8,170.5,515.8,175.9,519.4C181.3,523,183.9,522.1,189.3,522.1C194.7,522.1,201.8,519.4,206.3,517.6C210.8,515.8,212.6,517.6,217,517.6C221.5,517.6,225,513.1,219.7,511.3C214.3,509.5,219.7,505.9,223.3,505C225,504.6,229.2,503.4,233.2,502.2C231.8,499.4,231.3,496.9,231.3,496.9C231.3,496.9,238.4,493.4,242.9,492.5C247.4,491.6,245.6,481.8,245.6,481.8C245.6,481.8,249.2,480,253.6,480C254.7,480,255.7,480.8,256.7,481.9C256.5,478.2,256.3,475.4,256.3,474.6C256.3,471,262.6,471,267,474.6C271.5,478.2,273.3,464.8,273.3,464.8L265.3,463.9C265.3,463.9,263.5,462.1,260,462.1C256.4,462.1,259.1,456.7,252.8,455.8C246.5,454.9,250.1,448.7,254.6,449.5C259.1,450.4,259.1,448.6,260.9,442.3C262.7,436.1,267.1,435.2,262.7,435.2C258.2,435.2,257.4,423.6,252,423.6C246.6,423.6,244,413.8,239.5,418.2C235,422.7,229.7,419.1,227.9,424.5C226.1,429.9,226.1,429,221.7,428.1C217.2,427.2,212.8,435.2,212.8,440.6C212.8,446,207.4,441.5,203.9,445.1C200.3,448.7,196.8,446,191.4,446C186,446,185.1,434.4,181.6,430.8C178,427.2,173.6,413,170,413C166.5,412.9,157.5,405.7,152.8,402.5Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="همدان">
							<path class="path-city med"
								d="M283,368.1C282,368.2,281.1,369.6,277.6,370.1C271.4,371,281.2,376.3,283.9,379.9C286.6,383.5,278.5,381.7,274.1,383.5C269.6,385.3,269.6,386.2,268.7,380.8C267.8,375.4,269.6,376.3,264.2,381.7C258.8,387.1,270.5,400.5,270.5,400.5C270.5,400.5,275,409.4,280.3,413C285.7,416.6,286.6,421,283,426.4C279.4,431.8,277.6,431.8,275,428.2C272.3,424.6,271.4,430.9,267,430.9C265.8,430.9,263,431.9,259.6,433.3C260.4,434.5,261.4,435.4,262.6,435.4C267.1,435.4,262.6,436.3,260.8,442.5C259,448.7,259,450.5,254.5,449.7C250,448.8,246.5,455.1,252.7,456C258.9,456.9,256.3,462.3,259.9,462.3C263.5,462.3,265.2,464.1,265.2,464.1L273.2,465C273.2,465,271.4,478.4,266.9,474.8C262.4,471.2,256.2,471.2,256.2,474.8C256.2,475.7,256.4,478.5,256.6,482.1C259.5,485.6,262.2,492.7,266.9,492.7C273.1,492.7,275.8,499.8,281.2,501.6C286.6,503.4,290.1,505.2,298.2,505.2C306.3,505.2,307.1,502.5,310.7,503.4C314.3,504.3,317.8,500.7,321.4,506.1C324.4,510.6,330,511.3,332.2,516.4C335.6,513.4,338.3,510.9,339.3,509.7C342.9,505.2,343.8,498.1,343.8,498.1C343.8,498.1,342,488.3,339.3,484.7C336.6,481.1,335.8,481.1,336.6,474.9C337.5,468.7,337.5,471.3,333,467.8C328.5,464.2,326.8,462.5,333,462.5C339.2,462.5,341,465.2,341,461.6C341,458,340.1,454.5,344.6,451.8C349.1,449.1,341.9,439.3,346.4,439.3C350.9,439.3,358.9,441.1,362.5,441.1C366.1,441.1,361.6,442.9,366.1,449.1C370.6,455.3,367,458.9,371.4,458C375.9,457.1,376.8,453.5,375.9,449.1C375,444.6,375,439.3,369.6,435.7C364.2,432.1,362.5,434.8,358,431.2C353.5,427.6,356.2,425.8,359.8,426.7C363.4,427.6,368.7,424.9,367,421.4C365.2,417.8,361.6,421.4,361.6,414.3C361.6,407.2,361.6,407.1,366.1,408.9C370.6,410.7,373.2,408.9,370.6,404.4C368,400,369.6,400,373,400C372,399.4,371.1,399.1,370.6,399.1C366.1,399.1,354.5,394.6,349.2,394.6C343.8,394.6,342.1,394.6,343,390.1C343.9,385.6,342.1,381.2,335.8,381.2C329.6,381.2,330.5,380.3,328.7,383.9C326.9,387.5,328.7,387.5,321.5,387.5C314.4,387.5,311.7,387.5,309.9,383C308.1,378.5,304.5,383,300.1,383C295.6,383,291.2,376.8,286.7,371.4C284.5,368.6,283.8,368,283,368.1Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="قزوین">
							<path class="path-city med"
								d="M360.6,293.3C353.5,293.3,352.5,298.7,347.2,300.5C341.8,302.3,339.2,305,343.6,310.3C348.1,315.7,350.8,316.5,358.8,320.1C366.8,323.7,371.3,329.9,369.5,333.5C367.7,337.1,370.4,343.3,370.4,343.3L367.7,348.7C367.7,348.7,366.8,348.7,365,353.2C363.2,357.7,366.8,361.2,360.5,357.6C354.3,354,347.1,363,342.7,360.3C338.2,357.6,340,355,334.7,355C329.3,355,332.9,363,329.3,363C325.7,363,324.8,363,326.6,371C327.1,373.2,328.2,377,329.5,381.4C330.2,380.4,331.1,380.8,335.5,380.8C341.7,380.8,343.5,385.2,342.7,389.7C341.8,394.2,343.6,394.2,348.9,394.2C354.3,394.2,365.9,398.7,370.3,398.7C370.9,398.7,371.7,399,372.7,399.6C372.8,399.6,372.9,399.6,373,399.6C376.6,399.6,378.3,399.6,378.3,399.6C378.3,399.6,381,400.5,382.8,396C384.6,391.5,403.3,389.8,409.6,387.1C413.8,385.3,418.2,384,420.8,383.3C420.8,383.3,420.8,383.3,420.8,383.3C420.3,379.5,420,373.2,423.1,372C427.6,370.2,438.3,372,441.9,363.1C445.5,354.2,452.6,353.3,449,347.9C445.4,342.5,438.3,344.3,436.5,338.1C434.9,332.6,435.4,331.9,439.8,331.8C440.4,331.8,441.1,331.8,441.9,331.8C446.9,331.8,457.5,335.7,465.2,337.4C463.2,332.6,461.2,327.6,458,326.5C452.6,324.7,434.8,309.5,434.8,309.5C434.8,309.5,433,307.3,432.6,305.5C429.6,305.2,427,305,425.8,305C419.6,305,398.1,313,393.7,313C389.2,313,389.3,310.3,384.8,310.3C380.3,310.3,373.2,305.8,369.6,302.3C365.9,298.6,367.7,293.3,360.6,293.3L360.6,293.3Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="کردستان">
							<path class="path-city cm"
								d="M156.2,307.8C155.1,307.8,154,308.2,152.6,309.4C148.1,313,151.7,321,146.3,321.9C140.9,322.8,138.3,321,132,322.8C125.7,324.6,125.7,329,125.7,329C125.7,329,124.8,326.3,120.3,336.2C119.5,337.9,118.8,340.1,118,342.6C119.3,343.5,119.9,345,120.7,346.6C121.4,347.9,124.9,349,126,351.9C127.4,355.5,126.8,357,130.4,359.4C131,359.8,131.6,360,132.2,360.3C135.3,361.8,137.9,361,140.2,359.8C140.7,359.5,148.9,358.7,150,358.9C154.5,360,154.4,356.2,155.8,361.6C156.2,363.2,165.6,361.3,166.9,361.6C170.4,362.3,164.4,365.4,163.8,366C161,368.8,162.3,368,158.5,369.1C152.6,370.9,154.9,368.7,150.5,370.9C147.6,372.3,144.9,370.9,146.9,374.9C148.3,377.7,145.6,379.8,143.8,380.2C141.7,380.7,143.6,384.1,143.8,385.1C143.2,388.8,146.2,390.3,146.9,393.1C147.7,396.4,145,396.3,149.1,398C151.8,399.1,153.5,396.9,153.5,401.1C153.5,402,153.1,402,152.6,402.5C157.3,405.7,166.3,412.9,169.4,412.9C173,412.9,177.4,427.2,181,430.7C184.6,434.3,185.5,445.9,190.8,445.9C196.2,445.9,199.7,448.6,203.3,445C206.9,441.4,212.2,445.9,212.2,440.5C212.2,435.1,216.7,427.1,221.1,428C225.6,428.9,225.5,429.8,227.3,424.4C229.1,419,234.5,422.6,238.9,418.1C243.4,413.6,246,423.5,251.4,423.5C255.3,423.5,256.8,429.7,259.1,433C262.5,431.6,265.3,430.6,266.5,430.6C271,430.6,271.9,424.3,274.5,427.9C277.2,431.5,279,431.5,282.5,426.1C286.1,420.7,285.2,416.3,279.8,412.7C274.4,409.1,270,400.2,270,400.2C270,400.2,258.4,386.8,263.7,381.4C269.1,376,267.3,375.2,268.2,380.5C269.1,385.9,269.1,385,273.6,383.2C278.1,381.4,286.1,383.2,283.4,379.6C280.7,376,270.9,370.7,277.1,369.8C278.5,369.6,279.5,369.3,280.2,368.9C277.9,367.2,275.7,365.3,272.6,361.7C267.2,355.5,271.7,357.2,273.5,350.1C275.3,343,275.3,333.1,271.7,327.8C268.1,322.4,262.8,317.1,258.3,317.1C253.8,317.1,249.4,312.6,244.9,312.6C240.4,312.6,241.3,308.2,235.1,309.9C228.9,311.6,229.8,324.2,224.4,322.4C219,320.6,209.2,323.3,204.7,316.1C200.2,309,202,309,191.3,311.6C180.6,314.3,169,310.7,163.6,309.8C160.5,309.6,158.5,307.7,156.2,307.8Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="زنجان">
							<path class="path-city med"
								d="M264.8,260.8C264.3,260.8,263.7,260.9,262.6,261.1C262.5,261.1,262.5,261.1,262.4,261.1C257,262,245.5,273.6,243.7,273.6C243.7,273.6,235.6,276.3,230.3,286.1C224.9,295.9,233,297.7,235.6,307.5C235.8,308.1,236.1,309.2,236.4,310C241.8,308.8,241.2,312.8,245.5,312.8C250,312.8,254.4,317.3,258.9,317.3C263.4,317.3,268.7,322.7,272.3,328C275.9,333.4,275.9,343.2,274.1,350.3C272.3,357.4,267.8,355.6,273.2,361.9C276.3,365.5,278.5,367.3,280.8,369.1C281.9,368.6,282.5,368.1,283.1,368C283.9,367.9,284.6,368.5,286.6,370.9C291.1,376.3,295.5,382.5,300,382.5C304.5,382.5,308,378,309.8,382.5C311.6,387,314.3,387,321.4,387C328.5,387,326.8,387,328.6,383.4C329.1,382.4,329.4,381.7,329.7,381.3C328.4,377,327.2,373.1,326.8,370.9C326.6,369.9,326.4,369,326.3,368.2C326.2,367.4,326,366.8,326,366.2C326,365.9,326,365.7,326,365.4C325.9,362.8,327.1,362.8,329.6,362.8C333.2,362.8,329.6,354.8,335,354.8C340.4,354.8,338.6,357.5,343,360.1C347.5,362.8,354.6,353.8,360.8,357.4C367,361,363.5,357.4,365.3,353C367.1,348.5,368,348.5,368,348.5L370.7,343.1C370.7,343.1,368,336.9,369.8,333.3C371.6,329.7,367.1,323.5,359.1,319.9C351.1,316.3,348.4,315.4,343.9,310.1C339.4,304.7,342.1,302.1,347.5,300.3C352.9,298.5,353.8,293.1,360.9,293.1C361.1,293.1,361.3,293.1,361.5,293.1C361.4,292.7,361.3,292.4,361.2,292C361,291.4,360.8,290.7,360.6,290.1C360.6,290,360.5,289.9,360.5,289.8C360.4,289.4,360.2,288.9,360,288.5C359.9,288.2,359.7,287.8,359.5,287.4C359.3,287,359.1,286.5,358.8,286.1C358.7,285.9,358.6,285.8,358.5,285.6C358.3,285.3,358.2,285,358,284.6C357.7,284.1,357.4,283.5,357,283C356.7,282.5,356.4,282,356,281.5C355.9,281.4,355.9,281.3,355.8,281.2C355.5,280.8,355.2,280.4,354.9,280C354.7,279.8,354.5,279.5,354.3,279.2C353.8,278.5,353.2,277.8,352.6,277C350.1,273.9,348.4,271.4,347,269.5C346,268.1,345.2,267,344.5,266.1C344,265.5,343.6,265.1,343.2,264.8C343,264.6,342.8,264.5,342.6,264.4C342.4,264.3,342.2,264.2,342,264.1C341.8,264,341.6,264,341.4,263.9C341.4,263.9,341.4,263.9,341.4,263.9C340.8,263.8,340.1,263.9,339.2,264.2C338.9,264.3,338.6,264.4,338.3,264.5C338,264.6,337.6,264.7,337.3,264.8C336.7,264.9,336.2,264.9,335.7,264.8C335.5,264.8,335.3,264.7,335,264.6C335,264.6,335,264.6,335,264.6C334.8,264.5,334.6,264.5,334.4,264.4C333.8,264.1,333.3,263.8,332.9,263.5C332.9,263.5,332.9,263.5,332.9,263.5C332.5,263.2,332.1,263,331.8,262.9C331.5,262.8,331.2,262.9,330.9,263.3C330.9,263.3,330.9,263.3,330.9,263.3C330.7,263.6,330.5,263.9,330.3,264.5C329.2,267.3,329.1,269.7,328.1,270.3C328,270.4,327.9,270.4,327.8,270.4C327.2,270.5,326.3,270.1,324.9,269C322.7,267.2,321.8,266.3,320.7,265.9C320.7,265.9,320.7,265.9,320.7,265.9C320.2,265.7,319.5,265.6,318.7,265.5C318.7,265.5,318.7,265.5,318.7,265.5C317.8,265.4,316.7,265.4,315.2,265.4C314.4,265.4,313.8,265.3,313.4,265.2C313.2,265.2,313,265.1,312.8,265C312.6,264.9,312.5,264.8,312.4,264.7C312.3,264.6,312.2,264.5,312.2,264.4C312.2,264.4,312.2,264.4,312.2,264.4C312.1,264.3,312.1,264.2,312,264.1C311.7,263,312.5,261.4,308,260.8C307.1,260.7,306.4,260.7,305.8,260.7C305.5,260.7,305.2,260.7,305,260.8C305,260.8,305,260.8,305,260.8C304.8,260.8,304.6,260.9,304.4,261C304,261.2,303.8,261.4,303.6,261.6C303.4,261.8,303.2,262.1,303.1,262.4C302.9,262.8,302.7,263.3,302.5,263.7C302.4,263.8,302.3,264,302.2,264.1C302.1,264.2,302,264.4,301.9,264.5C301.8,264.6,301.6,264.7,301.4,264.8C301.2,264.9,301,265,300.8,265.1C300.6,265.2,300.3,265.3,300,265.3C298.9,265.5,297.7,265.6,296.6,265.7C294.4,265.8,292.3,265.6,291.1,265.4C290.5,265.3,290.2,265.3,290.2,265.3C290.2,265.3,290,265,289.5,264.6C289.4,264.5,289.2,264.4,289.1,264.2C289,264.1,288.9,264,288.8,263.9C288.8,263.9,288.8,263.9,288.8,263.9C288.5,263.6,288.2,263.3,287.8,263.1C286.2,262,284,260.9,281.3,260.9C280.8,260.9,280.2,260.9,279.7,261C279.2,261,278.7,261.1,278.3,261.1C274.8,261.5,272.3,262.5,268.8,261.8C268,261.6,267.6,261.5,267.2,261.3C267.2,261.3,267.2,261.3,267.2,261.3C267.1,261.3,267.1,261.3,267.1,261.2C267,261.1,266.8,261.1,266.7,261C266.5,260.9,266.4,260.8,266.3,260.7C266.2,260.7,266.2,260.6,266.1,260.6C266.1,260.6,266.1,260.6,266,260.6C265.9,260.6,265.9,260.5,265.8,260.5C265.8,260.5,265.8,260.5,265.7,260.5C265.6,260.5,265.5,260.5,265.4,260.5C265.2,260.8,265,260.8,264.8,260.8L264.8,260.8Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="گیلان">
							<path class="path-city cas"
								d="M341.9,160.7C339.5,160.7,336.6,161,334.5,162.6C331.8,164.6,330,165.1,327.5,163.4C327,165,326.7,166.4,326.6,167.4C325.7,177.2,332.9,167.4,332,176.3C331.1,185.2,323.1,188.8,324,195.1C324.9,201.3,321.3,201.3,321.3,210.3C321.3,219.3,331.1,238.9,335.6,244.2C340.1,249.6,340.1,250.5,339.2,256.7C339,258.4,338.7,261.3,338.5,264.7C343.6,263,342.9,264.9,352.6,277.3C359.3,285.9,360.2,289.4,361.2,293.4C367.6,293.7,366,298.8,369.5,302.3C373.1,305.9,380.2,310.3,384.7,310.3C389.2,310.3,389.1,313,393.6,313C398.1,313,419.5,305,425.7,305C426.9,305,429.4,305.2,432.5,305.5C432.3,304.5,432.5,303.6,433.8,303.2C437.4,302.3,436.5,298.8,437.4,294.3C438.3,289.8,437.4,289.8,442.7,288C443.7,287.7,446.1,285.9,449.5,283.4C449.4,283.3,449.4,283.3,449.3,283.2C445.2,279.4,442.3,277.8,437.8,275C431.8,271.4,430.1,268.7,427.4,263.3C425.9,260.2,426.1,258,425.9,255.8C425.7,253.7,427.6,251.7,424.3,249.3C423.4,248.6,416.5,247.3,413.6,246.1C412.2,245.5,410,244.6,409.4,244.1C408.8,243.6,408.3,242.3,407.1,242.1C404.6,241.7,404.8,242.7,403.1,243.1C401.4,243.5,397.9,243.3,396.8,243C391.4,241.7,387.2,241.7,381.1,240.2C377.5,239.3,373.1,238.4,369.3,236.7C365.4,235,362.2,232.5,359.1,230.9C356.5,229.6,352.8,226.8,351.1,224.4C349.4,222,348.8,219.2,346.9,217.4C344.2,214.7,345.2,207.6,344.2,203.8C343.6,201.2,343.5,198.4,343.5,195.7C343.4,193,343.3,190.5,343.3,187.8C343.3,183.1,343.3,178.3,343.3,173.6C343.3,169.6,343.4,163.8,344,160.7C343.4,160.8,342.7,160.7,341.9,160.7L341.9,160.7Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="اردبیل">
							<path class="path-city med"
								d="M291.3,57.1C290.7,57.1,290,57.3,289.2,57.8C287,58.9,288.2,59.1,283.9,58.2C282,57.8,279.1,61.6,278.6,62.2C276.5,64.3,276.7,64.6,273.7,65.3C271,66,268.3,67.1,266.6,68.4C263.1,71,264.2,72.8,259.1,72.8C255.5,72.8,254.1,72.9,250.7,74.6C249.5,75.2,247.6,78.2,247.6,79.5C247.6,80.5,242.8,82.2,242.7,82.2C240.4,82.7,237.6,84.9,235.6,85.7C233.5,86.6,232.9,88.5,232,90.2C231.8,90.6,231.6,90.9,231.3,91.3C232.3,93.5,233.2,95.6,233.9,96.9C237.5,104,235.7,104.1,235.7,110.3C235.7,116.5,234.8,119.2,234.8,122.8C234.8,126.4,239.3,121.9,242.8,118.4C246.4,114.8,250.8,107.7,257.1,105.9C263.4,104.1,256.2,113.9,258.9,119.3C261.6,124.7,258.9,122.9,256.2,127.3C253.5,131.8,255.3,131.8,250.9,133.6C246.4,135.4,250.9,137.2,255.4,137.2C259.9,137.2,253.6,139.9,258.1,143.5C262.6,147.1,257.2,146.2,255.4,150.7C253.6,155.2,243.8,164.1,243.8,164.1C243.8,164.1,250.9,171.2,259,175.7C267.1,180.2,269.7,171.2,272.4,175.7C275.1,180.2,279.6,190,279.6,198C279.6,206,280.5,204.3,285.9,204.3C291.3,204.3,290.4,204.3,290.4,210.6C290.4,216.9,285.9,222.2,286.8,230.2C287.7,238.2,297.5,239.1,298.4,247.2C299.3,255,299.3,252.8,305,261.5C305.7,261.3,306.7,261.3,308.2,261.4C315.3,262.3,309.1,265.9,315.3,265.9C321.5,265.9,320.6,265.9,325.1,269.5C329.6,273.1,328.7,269.5,330.5,265C332.3,260.5,333.2,266.8,338.5,265C338.6,265,338.6,265,338.7,264.9C338.9,261.6,339.1,258.6,339.4,256.9C340.3,250.7,340.3,249.8,335.8,244.4C331.3,239,321.5,219.4,321.5,210.5C321.5,201.6,325.1,201.6,324.2,195.3C323.3,189.1,331.3,185.5,332.2,176.5C333.1,167.6,325.9,177.4,326.8,167.6C326.9,166.6,327.3,165.2,327.7,163.6C327.5,163.5,327.3,163.4,327.1,163.2C325.1,161.7,323.7,159.4,322.2,157.9C320.7,156.4,319.1,153.9,317.8,152.1C316.5,150.4,316.1,147,315.6,145C315.1,143,310.8,146.5,309.4,145C307.5,143.1,304.9,142.8,303.6,140.1C302,136.9,301.8,136.4,297.8,133.4C295,131.3,293.2,129.2,290.7,126.7C289.4,125.4,293.7,121.6,294.3,120.9C297,117.3,295.9,116.9,301.4,116.9C304.2,116.9,306.7,116.3,309.4,115.6C312.7,114.8,312.4,111.9,310.7,110.3C311,110.2,306.5,103.2,304.9,102.8C302.8,102.3,301.2,98.2,300,97C297,94,300.5,91.2,302.2,89.4C303.5,88.1,307.6,88,309.3,87.2C312.3,85.7,314.6,84.5,313.7,81C313,78,309,74.9,306.6,72.6C303.5,69.5,300.7,66.7,298.2,63.3C297.1,61.9,295.6,60.7,294.6,59.7C293.2,57.8,292.3,57.1,291.3,57.1ZM335.3,162.1C335,162.2,334.8,162.4,334.5,162.6C334.7,162.4,335,162.2,335.3,162.1ZM331.3,164.3C331.1,164.3,331,164.4,330.8,164.4C331,164.4,331.1,164.4,331.3,164.3ZM339.6,264.3C339.5,264.3,339.3,264.4,339.2,264.4C339.3,264.4,339.5,264.3,339.6,264.3Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="آذربایجان شرقی">
							<path class="path-city med"
								d="M231.2,91.3C230.2,92.7,228.7,93.9,227.5,95.1C226.2,96.4,221.3,95.1,219.5,96C217,97.2,215.2,99,213.3,100.5C212.3,101.2,212.2,105.6,211.1,106.7C208.5,109.3,207.2,109,205.8,112C205.3,112.9,200.3,115.9,199.1,116.4C197.5,117.2,194.2,117.3,192.4,117.3C188.6,117.3,185.5,112.7,182.2,116C180.3,117.9,177.8,119.1,175.1,119.1C171.5,119.1,169,116.8,165.8,116C163.6,115.5,161.4,115.6,159.1,115.6C156.5,115.6,154.3,113.4,152.4,112C150.2,110.4,147.8,109.9,145.7,108.9C143.8,107.9,140.5,108.4,138.2,108.4C137.2,108.4,134.6,105.8,132.7,104.4C129.9,107.5,127.6,110.1,126.7,111.2C121.3,118.3,122.3,120.1,124,128.2C125.7,136.3,124,133.6,121.3,138C118.6,142.5,107,150.5,105.2,154.9C103.4,159.3,113.2,166.5,113.2,171.9C113.2,177.3,112.3,198.7,114.1,204C115.9,209.3,119.4,213.8,119.4,219.2C119.4,224.6,119.4,229.9,121.2,235.3C123,240.7,131.9,243.3,137.3,245.1C142.7,246.9,148,254,156.1,256.7C164.2,259.4,166.8,267.4,171.3,271.9C175.8,276.4,172.2,271,177.6,271.9C183,272.8,180.3,264.8,185.6,263.9C191,263,189.2,266.6,193.6,262.1C198.1,257.6,195.4,265.7,200.8,265.7C206.2,265.7,204.4,269.3,207.9,273.7C211.5,278.2,204.3,282.6,207,288.9C209.7,295.1,213.2,290.7,220.4,290.7C221.7,290.7,224.6,291.1,228.4,291.7C228.5,290.2,229,288.4,230.2,286.2C235.6,276.4,243.6,273.7,243.6,273.7C243.6,273.7,255.3,261.2,262.5,261.2C262.5,261.2,262.5,261.2,262.5,261.2C266.6,260.5,265.2,261,266.9,261.7C270.8,262.1,272.4,262,276.6,261.3C277.1,261.2,277.6,261.3,278.1,261.5C279,261.4,280,261.3,281.1,261.3C286.5,261.3,290,265.8,290,265.8C290,265.8,295.3,266.7,299.8,265.8C303.3,265.1,301.9,262.2,304.6,261.4C299,252.7,298.9,254.8,298,247.1C297.1,239.1,287.3,238.2,286.4,230.1C285.5,222,290,216.7,290,210.5C290,204.3,290.9,204.2,285.5,204.2C280.1,204.2,279.2,206,279.2,197.9C279.2,189.8,274.7,180,272,175.6C269.3,171.1,266.7,180.1,258.6,175.6C250.5,171.1,243.4,164,243.4,164C243.4,164,253.2,155.1,255,150.6C256.8,146.1,262.1,147,257.7,143.4C253.2,139.8,259.5,137.1,255,137.1C250.5,137.1,246.1,135.3,250.5,133.5C255,131.7,253.2,131.7,255.8,127.2C258.5,122.7,261.2,124.5,258.5,119.2C255.8,113.8,263,104,256.7,105.8C250.4,107.6,246,114.7,242.4,118.3C238.8,121.9,234.4,126.3,234.4,122.7C234.4,119.1,235.3,116.5,235.3,110.2C235.3,103.9,237.1,103.9,233.5,96.8C233.1,95.6,232.2,93.6,231.2,91.3L231.2,91.3ZM306,261C305.9,261,305.8,261,305.7,261C306,261,306.3,261,306.7,261C306.4,261.1,306.2,261,306,261Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>

						<a xlink:href="#" xlink:title="یزد">
							<path class="path-city hdd"
								d="M872.6,433C869.4,433.1,866.4,433.6,863.9,435.3C858.2,439.1,843.7,449.2,839.9,454.9C836.1,460.6,820.4,463.1,814.7,465C814.1,465.2,813.1,465.2,811.8,465.1C804.1,477.3,797.4,488.6,795.1,491.5C790.1,497.8,763.6,494,763.6,494C763.6,494,763.6,494.2,763.6,494.3C763.6,494.5,763.5,495.6,763.4,497.6C763.4,498,763.4,497.9,763.4,498.4C763.3,500.8,763.1,503.9,763,507.8C763,508.9,762.9,510,762.9,511.2C762.9,512.3,762.8,513.4,762.8,514.6C762.8,514.8,762.8,514.9,762.8,515C762.7,517.3,762.6,519.7,762.6,522.3C762.6,522.4,762.6,522.5,762.6,522.6C762.5,525.2,762.5,527.9,762.5,530.7C762.5,533.6,762.4,536.5,762.4,539.5C762.4,563.5,752.3,566,752.3,566C752.3,566,754.3,567.2,754.6,567.4C753.6,567.7,752.8,568,752.4,568.2C747,570.9,744.4,567.3,738.1,574.5C734.2,579,732,586.6,729.7,593.4C729.5,594.1,729.2,594.8,729,595.4C727.8,598.7,726.5,601.7,724.8,604C720.1,610.2,703.1,613,693,614.3C691.5,614.5,690.2,614.6,689.1,614.7C688,614.8,686.9,615.1,685.8,615.4C685.2,615.6,684.7,615.8,684.1,616C676.9,619,669.6,626,658.7,628.9C645.3,632.5,638.2,627.1,630.1,626.2C623.1,625.4,612,627.4,606.9,630.9C606.5,631.1,606.2,631.4,605.9,631.7C605.6,632,605.3,632.2,605.1,632.5C601.5,637,600.6,635.2,595.3,638.8C589.9,642.4,596.2,656.7,594.4,667.4C593.1,675.4,590.7,687,589.6,695.7C589.3,697.9,589.1,699.9,589,701.6C589,702.2,589,702.7,589,703.2C589,705.4,589.3,709.1,589.7,713.2C592.3,712.9,594.8,713,597.2,713.4C597.5,713.4,597.8,713.5,598.1,713.5C599.9,713.8,601.7,714.2,603.3,714.7C604,714.9,604.7,715.2,605.4,715.4C605.4,715.4,605.5,715.4,605.5,715.4C606.6,715.8,607.6,716.2,608.6,716.6C614.8,719.3,623.8,732.7,630,746.9C636.2,761.2,647.9,792.4,656.8,799.6C665.7,806.7,670.2,819.2,670.2,827.3C670.2,835.4,672,843.4,680.9,845.1C686.9,846.3,692.1,849.5,695.7,853.4C700,852.2,703.5,851.3,705,851.3C705.7,851.3,706.3,851.3,706.9,851.3C707.5,851.3,708.2,851.3,708.7,851.2C712,850.9,713.9,849.7,711.2,845C711.1,844.8,711,844.6,710.9,844.4C708.3,838.2,714.7,825.3,712.7,818.6C712.6,818.4,712.6,818.2,712.5,817.9C712.4,817.7,712.3,817.5,712.2,817.3C708.6,811.1,705.9,818.2,705.9,809.3C705.9,800.4,701.4,800.4,698.7,786.1C696,771.8,701.4,773.6,705,765.6C708.6,757.6,709.5,758.4,714.8,760.2C716.1,760.6,717.9,760.8,719.9,760.8C720.4,760.8,720.9,760.8,721.4,760.7C727.2,760.3,734.8,758.5,741.6,756.6C751.4,753.9,767.5,758.4,772.9,756.6C778.3,754.8,784.5,755.7,784.5,745C784.5,737.3,782.7,725.4,785.9,717.1C786,716.7,786.2,716.4,786.3,716C787.6,713.2,789.6,710.8,792.5,709.3C804.1,703.1,819.3,699.5,826.4,694.1C833.5,688.7,834.4,686.1,841.6,682.5C844.8,680.9,847.8,678.2,850.1,675.8C864.4,682.8,895.1,694.7,926,706.5L925.9,706.2C926.9,702.7,928.2,699.5,928.9,697.3C933.3,684,930.8,685.9,933.9,680.3C937,674.7,947.8,663.3,950.3,657.6C952.8,651.9,942.1,641.8,942.1,634.9C942.1,628,930.1,611.6,924.4,611.6C918.7,611.6,920,604,916.8,595.8C913.6,587.6,917.4,577.5,911.1,571.8C904.8,566.1,911.1,556,913,552.9C914.9,549.7,907.9,546.6,904.2,549.7C900.4,552.9,889.7,554.1,884,552.2C878.3,550.3,874.5,537.1,868.8,533.9C863.1,530.7,865,524.4,864.4,517.5C863.8,510.6,868.2,508,873.9,495.4C879.6,482.8,873.9,484.7,877.1,480.2C880.3,475.7,881.5,469.5,889.7,468.9C897.9,468.3,895.4,459.4,898.5,450C901.6,440.6,894.1,434.8,885.9,434.2C881.4,433.7,876.8,432.9,872.6,433L872.6,433Z"
								stroke-width="5.2631578947368425" stroke-opacity="1"
								transform="matrix(0.38,0,0,0.38,0,0)">
							</path>
						</a>
					</svg>
				</div>

			</div>
		</section>
		<section id="product" class="hidden rtl" style="width:100%; height:100%;">
			<h6 class="text-center"> لطفا محصول گلخانه خود را انتخاب کنید. </h6>
			<div class="row mt-1 justify-content-center" >
			<div class="container-n p-4 mx-2 mt-4 link" onclick='product("cucamber");'>
				<h3 class="text-center mb-4"> خیار </h3>
				<img class="mx-auto" src="assets/img/cucamber.png"></img>
			</div>
			<div class="container-n p-4 mx-2 mt-4 link" onclick='product("cucamber");'>
				<h3 class="text-center mb-4"> گوجه‌فرنگی </h3>
				<img class="mx-auto" src="assets/img/tomato.png"></img>
			</div>
			<div class="container-n p-4 mx-2 mt-4 link" onclick='product("cucamber");'>
				<h3 class="text-center mb-4"> کاهو </h3>
				<img class="mx-auto" src="assets/img/Lettuce.png"></img>
			</div>
			<div class="container-n p-4 mx-2 mt-4 link" onclick='product("cucamber");'>
				<h3 class="text-center mb-4"> فلفل </h3>
				<img class="mx-auto" width="width:50%;" src="assets/img/pepper.png"></img>
			</div>
			<div class="container-n p-4 mx-2 mt-4 link" onclick='product("cucamber");'>
				<h3 class="text-center mb-4"> گل داوودی </h3>
				<img class="mx-auto" src="assets/img/davoodi.png"></img>
			</div>
			<div class="container-n p-4 mx-2 mt-4 link" onclick='product("cucamber");'>
				<h3 class="text-center mb-4"> گل شمعدانی </h3>
				<img class="mx-auto" src="assets/img/shamdani.png"></img>
			</div>
		</div>
			<!--<div class="row justify-content-center">
				<button data-section="heat" class="section-btn link btn-n mt-4  px-3 py-1 text-center text-ultralight"
					style="bottom:0px;">ادامه</button>
			</div>-->
		</section>
	</div>
	<!--end of main-->
	<!--sidenav-->
	<div class="sidenav rounded text-center">
		<div>
			<div class="avatar mx-auto"></div>
			<h6 class="mt-1">
				 کاربر آزمایشی
			</h6>
			<div class="row justify-content-center">
				<button data-section="heat" class="hover-bg setting link btn-n mt-1 mb-4  px-3 py-1 text-center text-ultralight"
					style="bottom:0px;">تنظیمات کاربری</button>
			</div>
		</div>
		<section id="progress">
			<h6 class="p-name mb-4">پروژۀ اول</h6>
			<div class="row justify-content-center px-4" style="opacity: 0.8;">
				<div id="map-b" class="col-8 justify-content-center align-items-center borders pb-2">
					<div id="map-c" class="rounded circle position-absolute"></div>
					<h6 data-section="map" class="section-btn h-sm text-ultralight">موقعیت</h6>
				</div>
				<div id="shape-b" class="col-8 justify-content-center align-items-center borders pb-2">
					<div id="shape-c" class=" rounded position-absolute circle"></div>
					<h6 data-section="shape" class="section-btn h-sm text-ultralight">سازه</h6>
				</div>
				<div id="product-b"  class="col-8 justify-content-center align-items-center borders pb-2">
					<div id="product-c" class=" rounded position-absolute circle"></div>
					<h6 data-section="product" class="section-btn h-sm text-ultralight">محصول</h6>
				</div>
				<div id="heat-b"  class="col-8 justify-content-center align-items-center borders pb-2">
					<div id="heat-c" class=" rounded position-absolute circle"></div>
					<h6 data-section="heat" class="section-btn h-sm text-ultralight">سامانه گرمایشی و سرمایشی</h6>
				</div>
				<div id="ventilation-b" class="col-8 justify-content-center align-items-center borders pb-2">
					<div id="ventilation-c" class=" rounded position-absolute circle"></div>
					<h6 data-section="ventilation" class="section-btn h-sm text-ultralight">سامانه تهویه</h6>
				</div>
				<div id="finance-b"  class="col-8 justify-content-center align-items-center borders pb-2">
					<div id="finance-c" class=" rounded position-absolute circle"></div>
					<h6 data-section="finance" class="section-btn h-sm text-ultralight">تحلیل مالی</h6>
				</div>
			</div>
			<div class="row justify-content-center rtl">
				<div class="col-4 mx-1 link row justify-content-center">
					<h6 class="bg-info mt-3 px-3 py-1 text-white rounded">اتمام</h6>
				</div>
				<div class="col-4 cancel link row justify-content-center">
					<h6 class="bg-danger mt-3 px-3 py-1 text-white rounded">لغو</h6>
				</div>
			</div>
		</section>
		<section id="menu">
			<div class="row justify-content-center m-2">
				<h6 class="menu-active py-2 px-4 text-ultralight col-10 rtl link"><i class="fa fa-tasks"></i> لیست پروژه ها</h6>
			</div>
			<div class="row justify-content-center m-2">
				<div  class="menu-item py-2 px-4 text-ultralight rtl col-10 link h6" onclick="window.open('3Deditor.html','3Deditor','width=600,height=400')"><i class="fa fa-cubes"></i> ویرایشگر سه‌بعدی گلخانه</div>
			</div>
		</section>
		<section id="report-menu">
			<div class="row justify-content-center m-2">
				<h6 class="menu-active py-2 px-4 text-ultralight col-10 rtl link"><i class="fa fa-pie-chart"></i> نگاه کلی</h6>
			</div>
			<div class="row justify-content-center m-2">
				<div  class="menu-item py-2 px-4 text-ultralight rtl col-10 link h6"><i class="fa fa-id-card"></i> گزارش کامل</div>
			</div>
			<div class="cancel link row justify-content-center">
				<h6 class="bg-danger mt-3 px-3 py-1 text-white rounded">لغو</h6>
			</div>
			
		</section>
		
	</div>
	<!--end of sidenav-->

	<div class="link support bg-info d-flex justify-content-center align-items-center">
		<i class="fa fa-comment fa-2x text-white"></i>

	</div>

	<div class="footer text-center">
		<h6 class="d-line link">سبز پایش افرا © ۱۳۹۹</h6>
		<img class="logo link" src="assets/img/logo-sm.png"></img>
	</div>
	<h6 class="link hover h-support">پشتیبانی</h6>
	<h6 class="link hover h-edit text-bold">ویرایش</h6>
	<h6 class="link hover h-setting"><i class="fa fa-cog"></i></h6>
	<h6 class="link hover h-add"><i class="fa fa-plus"></i></h6>
	<!--TweenMax-->
	<script src="assets/framework/TweenMax/TweenMax.min.js"></script>
	<!--sweetalert-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="assets/framework/Mh1PersianDatePicker-master/Mh1PersianDatePicker.js"></script>
	<script>
		var daySlider = document.getElementById('daySlider');
		var nightSlider = document.getElementById('nightSlider');
		noUiSlider.create(daySlider, {
			start: [23, 26],
			step: 1,
			connect: [false, true, false],
			tooltips: [ wNumb({decimals: 0}), wNumb({decimals: 0})],
			range: {
				'min': [10],
				'max': [30]
			}
			,
			pips: {
				mode: 'steps',
				density: 3,
				format: wNumb({
					decimals: 0
				})
			}
		});
		noUiSlider.create(nightSlider, {
			start: [17, 20],
			step: 1,
			connect: [false, true, false],
			tooltips: [ wNumb({decimals: 0}), wNumb({decimals: 0})],
			range: {
				'min': [10],
				'max': [30]
			}
			,
			pips: {
				mode: 'steps',
				density: 3,
				format: wNumb({
					decimals: 0
				})
			}
		});
		var daySlider2 = document.getElementById('daySlider2');
		var nightSlider2 = document.getElementById('nightSlider2');
		noUiSlider.create(daySlider2, {
			start: [23, 26],
			step: 1,
			connect: [false, true, false],
			tooltips: [ wNumb({decimals: 0}), wNumb({decimals: 0})],
			range: {
				'min': [10],
				'max': [30]
			}
			,
			pips: {
				mode: 'steps',
				density: 3,
				format: wNumb({
					decimals: 0
				})
			}
		});
		noUiSlider.create(nightSlider2, {
			start: [17, 20],
			step: 1,
			connect: [false, true, false],
			tooltips: [ wNumb({decimals: 0}), wNumb({decimals: 0})],
			range: {
				'min': [10],
				'max': [30]
			}
			,
			pips: {
				mode: 'steps',
				density: 3,
				format: wNumb({
					decimals: 0
				})
			}
		});
	</script>
	<script>
		var gh={};
		var date="1399/09/26";
		$("#add").click(function () {
			Swal.fire({
				
				title: 'لطفا نام پروژه را وارد کنید',
				input: 'text',

				showCloseButton: true,
				showCancelButton: true,
				confirmButtonText: 'ثبت',
				cancelButtonText: 'لغو',
			}).then((result) => {
    		if (result.value) {
				
				Swal.fire({
  title: 'لطفا بازۀ زمانی ارائۀ گزارش خود را تعیین کنید',
  html:
  '<div class="row">'+
		'<div class="col">'+
			'<input id="swal-input1" class="form-control read" placeholder="تاریخ شروع بازه" anyattr onfocus="Mh1PersianDatePicker.Show(this,date);">' +
		'</div>'+
		'<div class="col">'+
			'<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">'+
				'<input name="start_time" type="text" class="form-control read" placeholder="ساعت شروع بازه" required>'+
			'</div>'+
		'</div>'+
	'</div>'+
	'<div class="row mt-4">'+
		'<div class="col">'+
			'<input id="swal-input2" class="form-control read" placeholder="تاریخ پایان بازه" anyattr onfocus="Mh1PersianDatePicker.Show(this,date);">' +
		'</div>'+
		'<div class="col">'+
			'<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">'+
				'<input name="start_time" type="text" class="form-control read" placeholder="ساعت پایان بازه" required>'+
			'</div>'+
		'</div>'+
	'</div>',
  focusConfirm: false,
  showCancelButton: true,
	confirmButtonText: 'ثبت',
	cancelButtonText: 'لغو',

	onOpen: function() {
        $('.clockpicker').clockpicker();
    },
  preConfirm: () => {
    return [
      document.getElementById('swal-input1').value,
      document.getElementById('swal-input2').value
    ]
  }
  
}).then((date) => {
	gh.start_date=$('#swal-input1').val().split('/').join('-');
	gh.start_date=$('#swal-input2').val().split('/').join('-');
	if (date.value) {
				$(".show").toggleClass("show hidden");
				$("#map").toggleClass("hidden show");
				$("#progress").css("display", "initial");
				$("#menu").css("display", "none");
				gh.name=result.value;
				$(".p-name").text(result.value);
				$("#map-c").toggleClass("circle c-active");
				$("#map-b").toggleClass("borders b-active");
	}
			});
			 }
			});
		});
		$(".section-btn").click(async function () {
			$(".show").toggleClass("show hidden");
			$("#"+$(this).attr("data-section")).toggleClass("show hidden");
			$(".c-active").toggleClass("c-active circle");
			$(".b-active").toggleClass("b-active borders");
			$("#"+$(this).attr("data-section")+"-c").toggleClass("circle c-active");
			$("#"+$(this).attr("data-section")+"-b").toggleClass("borders b-active");
		});
		$(".cancel").click(async function () {
			$("#progress").css("display", "none");
			$("#menu").css("display", "initial");
			$("#report-menu").css("display", "none");
			$(".show").toggleClass("show hidden");
			$("#project").toggleClass("hidden show");
			$(".c-active").toggleClass("c-active circle");
			$(".b-active").toggleClass("b-active borders");
			$("#project-c").toggleClass("circle c-active");
			$("#project-b").toggleClass("borders b-active");
		});
		$("#finish").click(async function () {
			$("#progress").css("display", "none");
			$("#menu").css("display", "none");
			$("#report-menu").css("display", "initial");
		});
		function product(name){
			gh.plant_name=name;
			Swal.fire({
  title: 'آیا از انتخاب خود مطمئنید؟',
  showCancelButton: true,
  confirmButtonText: `ادامه`,
  cancelButtonText: `لغو`,
}).then((result) => {
  if (result.isConfirmed) {
    $(".show").toggleClass("show hidden");
			$("#heat").toggleClass("show hidden");
			$(".c-active").toggleClass("c-active circle");
			$(".b-active").toggleClass("b-active borders");
			$("#heat-c").toggleClass("circle c-active");
			$("#heat-b").toggleClass("borders b-active");
  } 
})
		}
		$(".scroll-btn").click(function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

		function swalerror(){
				Swal.fire({
					icon: 'error',
					title: 'متاسفیم',
					text: 'نام کاربری یا رمز عبور اشتباه است ',
					confirmButtonText: 'باشه'
				})
		}
		function create(e) {
			fetch('http://127.0.0.1:8000/api/create_greenhouse', {
				method: 'post',
				headers: {
				'Accept': 'application/json, text/plain, */*',
				'Content-Type': 'application/json'
				},
				body: JSON.stringify(e)
			}).then((response) => {
				if(response.ok){
					window.location.replace("dashboard.html");
				}
			}).catch(err => {
				console.log('caught it!',err);
			});
		}
		$( "#f-map" ).submit(function(event){
			event.preventDefault();
			var pos=JSON.parse($('#city option:selected').val());
			gh.longitude=pos.longitude;
			gh.latitude=pos.latitude;
			gh.city=pos.name;
			gh.state=$('#statelist option:selected').data('name');
			alert("1");
		});
		$( "#b-shape" ).click(function(event){
			event.preventDefault();
			gh.shape_type="arc_wall";
			gh.length=$("#length").val();
			gh.width=$("#width").val();
			gh.wall_height=$("#wall_height").val();
			gh.roof_cover_type=$('#roof_cover_type option:selected').val();
			gh.wall_cover_type=$('#wall_cover_type option:selected').val();
			alert("2");
		});
		$( "#f-heat" ).submit(function(event){
			event.preventDefault();
			gh.warmer=new Array;
			gh.warmer[0]={
				warmer_number:1,
            	warmer_capacity: $("#warmer_capacity").val()
			}
			gh.cooler=new Array;
			gh.cooler[0]={
				cooler_number:1,
            	cooler_capacity: $("#cooler_capacity").val()
			}
			var daySlider = document.getElementById('daySlider');
			var nightSlider = document.getElementById('nightSlider');
			alert(daySlider.noUiSlider.get());
			gh.T_max_day=daySlider.noUiSlider.get()[1];
			gh.T_min_day=daySlider.noUiSlider.get()[0];
			gh.T_max_night=nightSlider.noUiSlider.get()[1];
			gh.T_min_night=nightSlider.noUiSlider.get()[0];
			console.log(gh);
		});
		$( "#f-ventilation" ).submit(function(event){
			event.preventDefault();
			gh.ventilagin_every_houre=$("#ventilagin_every_houre").val();
		});
		$( "#finish" ).click(function(event){
			event.preventDefault();
			create(gh);
		});
	</script>
	<!--hover-->
	<script>
		function hovern(bg, layer, e) {
			var p = $(bg).offset();

			if ((e.pageX >= p.left) && (e.pageY >= p.top) && (e.pageX <= (p.left + $(bg).width())) && (e.pageY <= (p.top + $(bg).height()))) {
				$(layer).css('display', 'initial');
				$(layer).css('left', e.pageX - $(layer).width() / 2 + "px");
				$(layer).css('top', e.pageY - $(layer).height() / 2 + "px");
				$(layer).css('cursor', 'none');
			}
			else {
				$(layer).css('display', 'none');
			}
		}
		$(document).mousemove(function (e) {
			hovern('.setting', '.h-setting', e);
			hovern('.support', '.h-support', e);
			//hovern('.add','.h-add',e);
		});
	</script>
	<!--graph-->
	<script>
		var x=[12, 19, 3, 5, 2, 3,12, 19, 3, 5, 2, 3,12, 19, 3, 5, 2, 3],y=[12, 19, 3, 5, 2, 3,12, 19, 3, 5, 2, 3,12, 19, 3, 5, 2, 3];
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: x,
				datasets: [{
					label: 'دمای درون',
					data: y,
					borderWidth: 1,
					fill:false
				},{
					label: 'دمای بیرون',
					data: y,
					borderWidth: 1,
					fill:false
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
	
	<!--cursor-->
	<script>
		var cursor = $(".cursor"),
			follower = $(".cursor-follower");

		var posX = 0,
			posY = 0;

		var mouseX = 0,
			mouseY = 0;

		TweenMax.to({}, 0.016, {
			repeat: -1,
			onRepeat: function () {
				posX += (mouseX - posX) / 9;
				posY += (mouseY - posY) / 9;

				TweenMax.set(follower, {
					css: {
						left: posX - 6,
						top: posY - 6
					}
				});
				TweenMax.set(cursor, {
					css: {
						left: mouseX,
						top: mouseY
					}
				});
			}
		});

		$(document).on("mousemove", function (e) {
			mouseX = e.pageX;
			mouseY = e.pageY;
		});

		$(".link").on("mouseenter", function () {
			cursor.addClass("active");
			follower.addClass("active");
		});

		$(".link").on("mouseleave", function () {
			cursor.removeClass("active");
			follower.removeClass("active");
		});
	</script>
	<script>
		$(".fa-trash").click(function(){
			$(this).closest('tr').remove();
		});
	</script>
	
	<script>
		 $(window).on('load', function () {
      
   $('.preloader').fadeOut('slow');
});					
	</script>

</body>
</html>