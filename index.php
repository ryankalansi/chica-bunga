<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		/* CSS untuk style header */
		.header {
			background-color: #421f3b;
			color: white;
			padding: 50px;
			text-align: center;
			font-size: 50px;
			background-image: linear-gradient(to bottom right, #421f3b, #6b1c54);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			position: relative;
			overflow: hidden;
		}
		.header:before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,0.2);
			z-index: -1;
		}

		/* CSS untuk style kolom */
		.column {
			width: 50%;
			padding: 50px;
			text-align: center;
			font-size: 30px;
			height: 500px;
			background-image: linear-gradient(to bottom right, #421f3b, #6b1c54);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			position: relative;
			overflow: hidden;
			display: inline-block;
			vertical-align: top;
			box-sizing: border-box;
		}
		.column:before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(255,255,255,0.2);
			z-index: -1;
			transform: scale(0.8);
			opacity: 0;
			transition: all 0.5s ease;
		}
		.column:hover:before {
			transform: scale(1);
			opacity: 1;
		}

		/* CSS untuk style teks */
		.text {
			display: inline-block;
			position: relative;
			font-size: 40px;
			font-weight: bold;
			color: white;
			margin: 50px 0;
			padding: 0 20px;
			box-sizing: border-box;
			text-shadow: 0 0 20px rgba(0,0,0,0.5);
			animation: slideInLeft 1s ease;
			overflow: hidden;
		}
		.text:before, .text:after {
			content: "";
			position: absolute;
			width: 150px;
			height: 150px;
			background-image: url("https://i.ibb.co/1R6hq
            "); /* gambar bunga mawar */
background-repeat: no-repeat;
background-size: contain;
z-index: -1;
}
.text:before {
top: 0;
left: -150px;
}
.text:after {
bottom: 0;
right: -150px;
transform: rotate(180deg);
}