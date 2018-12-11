
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AUXILIUM</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h2><a href="index.html">AUXILIUM</a></h2>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Auxilium</a></li>
						<li><a href="generic.html">Quem somos</a></li>
						<li><a href="elements.html">Objetivo</a></li>
						<li><a href="entrar.php" class="button special">Entrar</a></li>
					</ul>
				</nav>
			</header>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url("https://cdn.pixabay.com/photo/2015/03/11/02/21/books-668065_960_720.jpg") 50% fixed;
  background-size: cover;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}
/* Basic */

	body {
		background: #fff;
	}

		body.is-loading *, body.is-loading *:before, body.is-loading *:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-o-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-o-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
		}

	body, input, select, textarea {
		color: #444;
		font-family: "Raleway", Helvetica, sans-serif;
		font-size: 13pt;
		font-weight: 400;
		line-height: 1.65em;
	}

	a {
		color: #383b43;
		text-decoration: none;
	}

		a:active, a:hover {
			text-decoration: underline;
		}

	strong, b {
		color: #474747;
		font-weight: 700;
	}

	em, i {
		font-style: italic;
	}

	p {
		margin: 0 0 2em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #474747;
		font-weight: 700;
		line-height: 1em;
		margin: 0 0 1em 0;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			text-decoration: none;
		}

	h2 {
		font-size: 1.75em;
		line-height: 1.5em;
	}

	h3 {
		font-size: 1.35em;
		line-height: 1.5em;
	}

	h4 {
		font-size: 1.1em;
		line-height: 1.5em;
	}

	h5 {
		font-size: 0.9em;
		line-height: 1.5em;
	}

	h6 {
		font-size: 0.7em;
		line-height: 1.5em;
	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	hr {
		border: 0;
		border-bottom: solid 1px rgba(144, 144, 144, 0.25);
		margin: 2em 0;
	}

		hr.major {
			margin: 3em 0;
		}

	blockquote {
		border-left: solid 4px rgba(144, 144, 144, 0.25);
		font-style: italic;
		margin: 0 0 2em 0;
		padding: 0.5em 0 0.5em 2em;
	}

	code {
		background: rgba(144, 144, 144, 0.075);
		border-radius: 4px;
		border: solid 1px rgba(144, 144, 144, 0.25);
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0.25em;
		padding: 0.25em 0.65em;
	}

	pre {
		-webkit-overflow-scrolling: touch;
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0 2em 0;
	}

		pre code {
			display: block;
			line-height: 1.75em;
			padding: 1em 1.5em;
			overflow-x: auto;
		}

	.align-left {
		text-align: left;
	}

	.align-center {
		text-align: center;
	}

	.align-right {
		text-align: right;
	}

/* Section/Article */

	section.special, article.special {
		text-align: center;
	}

	header p {
		color: #858585;
		position: relative;
		margin: 0 0 1.5em 0;
	}

	header h2 + p {
		font-size: 1.25em;
		margin-top: -1em;
		line-height: 1.5em;
	}

	header h3 + p {
		font-size: 1.1em;
		margin-top: -0.8em;
		line-height: 1.5em;
	}

	header h4 + p,
	header h5 + p,
	header h6 + p {
		font-size: 0.9em;
		margin-top: -0.6em;
		line-height: 1.5em;
	}

	header.major {
		text-align: center;
		margin-bottom: 4em;
	}

		header.major h2 {
			font-size: 3em;
			margin-bottom: 0.5em;
		}

		header.major p {
			font-size: 1.5em;
		}

/* Form */

	form {
		margin: 0 0 2em 0;
	}

	label {
		color: #474747;
		display: block;
		font-size: 0.9em;
		font-weight: 700;
		margin: 0 0 1em 0;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-o-appearance: none;
		-ms-appearance: none;
		appearance: none;
		background: rgba(144, 144, 144, 0.075);
		border-radius: 4px;
		border: none;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:invalid,
		input[type="password"]:invalid,
		input[type="email"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		select:focus,
		textarea:focus {
			border-color: #383b43;
			box-shadow: 0 0 0 1px #383b43;
		}

	.select-wrapper {
		text-decoration: none;
		display: block;
		position: relative;
	}

		.select-wrapper:before {
			content: "";
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.select-wrapper:before {
			color: rgba(144, 144, 144, 0.25);
			display: block;
			height: 2.75em;
			line-height: 2.75em;
			pointer-events: none;
			position: absolute;
			right: 0;
			text-align: center;
			top: 0;
			width: 2.75em;
		}

		.select-wrapper select::-ms-expand {
			display: none;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 2.75em;
	}

	textarea {
		padding: 0.75em 1em;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-o-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2em;
		opacity: 0;
		width: 1em;
		z-index: -1;
	}

		input[type="checkbox"] + label,
		input[type="radio"] + label {
			text-decoration: none;
			color: #444;
			cursor: pointer;
			display: inline-block;
			font-size: 1em;
			font-weight: 400;
			padding-left: 2.4em;
			padding-right: 0.75em;
			position: relative;
		}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				background: rgba(144, 144, 144, 0.075);
				border-radius: 4px;
				border: solid 1px rgba(144, 144, 144, 0.25);
				content: '';
				display: inline-block;
				height: 1.65em;
				left: 0;
				line-height: 1.58125em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 1.65em;
			}

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			background: #3cadd4;
			border-color: #3cadd4;
			color: #ffffff;
			content: '\f00c';
		}

		input[type="checkbox"]:focus + label:before,
		input[type="radio"]:focus + label:before {
			border-color: #383b43;
			box-shadow: 0 0 0 1px #383b43;
		}

	input[type="checkbox"] + label:before {
		border-radius: 4px;
	}

	input[type="radio"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		color: #858585 !important;
		opacity: 1.0;
	}

	:-moz-placeholder {
		color: #858585 !important;
		opacity: 1.0;
	}

	::-moz-placeholder {
		color: #858585 !important;
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		color: #858585 !important;
		opacity: 1.0;
	}

	.formerize-placeholder {
		color: #858585 !important;
		opacity: 1.0;
	}

/* Box */

	.box {
		border-radius: 4px;
		border: solid 1px rgba(144, 144, 144, 0.25);
		margin-bottom: 2em;
		padding: 1.5em;
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}

/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.icon:active, .icon:hover {
			text-decoration: none;
		}

		.icon > .label {
			display: none;
		}

		.icon.rounded {
			background-color: #383b43;
			border-radius: 100%;
			color: #ffffff;
			display: inline-block;
			height: 3.25em;
			line-height: 3.25em;
			text-align: center;
			width: 3.25em;
		}

			.icon.rounded.big {
				font-size: 2.5em;
				margin-bottom: 0.5em;
			}

			.icon.rounded.color1 {
				background-color: #3cadd4;
			}

			.icon.rounded.color2 {
				background-color: #3c61d4;
			}

			.icon.rounded.color3 {
				background-color: #633cd4;
			}

			.icon.rounded.color4 {
				background-color: #af3cd4;
			}

			.icon.rounded.color5 {
				background-color: #d43cad;
			}

			.icon.rounded.color6 {
				background-color: #d43c61;
			}

			.icon.rounded.color7 {
				background-color: #d4633c;
			}

			.icon.rounded.color8 {
				background-color: #d4af3c;
			}

			.icon.rounded.color9 {
				background-color: #add43c;
			}

			.icon.rounded.color10 {
				background-color: #61d43c;
			}

			.icon.rounded.fa-twitter {
				background-color: #2daae4;
			}

			.icon.rounded.fa-facebook {
				background-color: #39599f;
			}

			.icon.rounded.fa-google-plus {
				background-color: #c91e1f;
			}

			.icon.rounded.fa-dribbble {
				background-color: #c4376b;
			}

			.icon.rounded.fa-tumblr, .icon.rounded.fa-linkedin {
				background-color: #31516a;
			}

			.icon.rounded.fa-rss {
				background-color: #f2600b;
			}

/* Image */

	.image {
		border-radius: 4px;
		border: 0;
		display: inline-block;
		position: relative;
	}

		.image img {
			border-radius: 4px;
			display: block;
		}

		.image.left {
			float: left;
			padding: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			padding: 0 0 1em 1.5em;
			top: 0.25em;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
			}

		.image.fit {
			display: block;
			margin: 0 0 2em 0;
			width: 100%;
		}

			.image.fit img {
				width: 100%;
			}

/* List */

	ol {
		list-style: decimal;
		margin: 0 0 2em 0;
		padding-left: 1.25em;
	}

		ol li {
			padding-left: 0.25em;
		}

	ul {
		list-style: disc;
		margin: 0 0 2em 0;
		padding-left: 1em;
	}

		ul li {
			padding-left: 0.5em;
		}

		ul.alt {
			list-style: none;
			padding-left: 0;
		}

			ul.alt li {
				border-top: solid 1px rgba(144, 144, 144, 0.25);
				padding: 0.5em 0;
			}

				ul.alt li:first-child {
					border-top: 0;
					padding-top: 0;
				}

		ul.unstyled {
			list-style: none;
			padding-left: 0;
		}

			ul.unstyled li {
				padding: 0.4em 0;
			}

		ul.icons {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.icons li {
				display: inline-block;
				padding: 0 1em 0 0;
			}

				ul.icons li:last-child {
					padding-right: 0;
				}

				ul.icons li .icon:before {
					font-size: 2em;
				}

		ul.actions {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.actions li {
				display: inline-block;
				padding: 0 1em 0 0;
				vertical-align: middle;
			}

				ul.actions li:last-child {
					padding-right: 0;
				}

			ul.actions.small li {
				padding: 0 0.5em 0 0;
			}

			ul.actions.vertical li {
				display: block;
				padding: 1em 0 0 0;
			}

				ul.actions.vertical li:first-child {
					padding-top: 0;
				}

				ul.actions.vertical li > * {
					margin-bottom: 0;
				}

			ul.actions.vertical.small li {
				padding: 0.5em 0 0 0;
			}

				ul.actions.vertical.small li:first-child {
					padding-top: 0;
				}

			ul.actions.fit {
				display: table;
				margin-left: -1em;
				padding: 0;
				table-layout: fixed;
				width: calc(100% + 1em);
			}

				ul.actions.fit li {
					display: table-cell;
					padding: 0 0 0 1em;
				}

					ul.actions.fit li > * {
						margin-bottom: 0;
					}

				ul.actions.fit.small {
					margin-left: -0.5em;
					width: calc(100% + 0.5em);
				}

					ul.actions.fit.small li {
						padding: 0 0 0 0.5em;
					}

	dl {
		margin: 0 0 2em 0;
	}

/* Table */

	.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		margin: 0 0 2em 0;
		width: 100%;
	}

		table tbody tr {
			border: solid 1px rgba(144, 144, 144, 0.25);
			border-left: 0;
			border-right: 0;
		}

			table tbody tr:nth-child(2n + 1) {
				background-color: rgba(144, 144, 144, 0.075);
			}

		table td {
			padding: 0.75em 0.75em;
		}

		table th {
			color: #474747;
			font-size: 0.9em;
			font-weight: 700;
			padding: 0 0.75em 0.75em 0.75em;
			text-align: left;
		}

		table thead {
			border-bottom: solid 2px rgba(144, 144, 144, 0.25);
		}

		table tfoot {
			border-top: solid 2px rgba(144, 144, 144, 0.25);
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border: solid 1px rgba(144, 144, 144, 0.25);
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 1px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 1px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}

/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-o-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-o-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		background-color: #760000;
		border-radius: 30px;
		border: 0;
		color: #ffffff !important;
		cursor: pointer;
		display: inline-block;
		font-weight: 400;
		height: 2.85em;
		line-height: 2.95em;
		padding: 0 2em;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
	}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		.button:hover {
			background-color: #990c0c;
			text-decoration: none;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		.button:active {
			background-color: #990c0c;
			text-decoration: none;
		}

		input[type="submit"].icon,
		input[type="reset"].icon,
		input[type="button"].icon,
		.button.icon {
			padding-left: 1.35em;
		}

			input[type="submit"].icon:before,
			input[type="reset"].icon:before,
			input[type="button"].icon:before,
			.button.icon:before {
				margin-right: 0.5em;
			}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		.button.fit {
			display: block;
			margin: 0 0 1em 0;
			width: 100%;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		.button.small {
			font-size: 0.8em;
		}

		input[type="submit"].big,
		input[type="reset"].big,
		input[type="button"].big,
		.button.big {
			font-size: 1.35em;
		}

		input[type="submit"].alt,
		input[type="reset"].alt,
		input[type="button"].alt,
		.button.alt {
			background-color: transparent;
			box-shadow: inset 0 0 0 2px rgba(144, 144, 144, 0.25);
			color: #474747 !important;
		}

			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			input[type="button"].alt:hover,
			.button.alt:hover {
				background-color: rgba(144, 144, 144, 0.075);
			}

			input[type="submit"].alt:active,
			input[type="reset"].alt:active,
			input[type="button"].alt:active,
			.button.alt:active {
				background-color: rgba(144, 144, 144, 0.2);
			}

			input[type="submit"].alt.icon:before,
			input[type="reset"].alt.icon:before,
			input[type="button"].alt.icon:before,
			.button.alt.icon:before {
				color: #858585;
			}

		input[type="submit"].special,
		input[type="reset"].special,
		input[type="button"].special,
		.button.special {
			background-color: #383b43;
			color: #ffffff !important;
		}

			input[type="submit"].special:hover,
			input[type="reset"].special:hover,
			input[type="button"].special:hover,
			.button.special:hover {
				background-color: #444751;
			}

			input[type="submit"].special:active,
			input[type="reset"].special:active,
			input[type="button"].special:active,
			.button.special:active {
				background-color: #2c2f35;
			}

		input[type="submit"].disabled, input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		.button.disabled,
		.button:disabled {
			background-color: #444 !important;
			box-shadow: inset 0 -0.15em 0 0 rgba(0, 0, 0, 0.15);
			color: #fff !important;
			cursor: default;
			opacity: 0.25;
		}

/* Header */

	body.landing #header {
		background-color: transparent;
		left: 0;
		position: absolute;
		top: 0;
	}

		body.landing #header nav a {
			color: rgba(255, 255, 255, 0.5);
		}

	#header {
		background-color: #760000;
		color: #ffffff;
		cursor: default;
		font-size: 1.1em;
		height: 6em;
		line-height: 6em;
		width: 100%;
		z-index: 10000;
	}

		#header h2 {
			color: #ffffff;
			height: inherit;
			left: 3em;
			line-height: inherit;
			margin: 0;
			padding: 0;
			position: absolute;
		}

			#header h1 a {
				font-size: 1.25em;
			}

		#header nav {
			height: inherit;
			line-height: inherit;
			position: absolute;
			right: 3em;
			vertical-align: middle;
		}

			#header nav > ul {
				list-style: none;
				margin: 0;
				padding-left: 0;
			}

				#header nav > ul > li {
					border-radius: 4px;
					display: inline-block;
					margin-left: 2em;
					padding-left: 0;
				}

					#header nav > ul > li a {
						-moz-transition: color 0.2s ease-in-out;
						-webkit-transition: color 0.2s ease-in-out;
						-o-transition: color 0.2s ease-in-out;
						-ms-transition: color 0.2s ease-in-out;
						transition: color 0.2s ease-in-out;
						color: #cdced0;
						display: inline-block;
						text-decoration: none;
					}

						#header nav > ul > li a:active, #header nav > ul > li a:hover {
							color: #ffffff;
						}

					#header nav > ul > li:first-child {
						margin-left: 0;
					}

					#header nav > ul > li .button {
						background-color: #fff;
						color: #444 !important;
						height: 2.25em;
						line-height: 2.25em;
						margin-bottom: 0;
						padding: 0 1em;
						position: relative;
						top: -0.075em;
						vertical-align: middle;
					}

		#header .container {
			position: relative;
		}

			#header .container h1 {
				left: 0;
			}

			#header .container nav {
				right: 0;
			}

/* Banner */

	#banner {
		background-image: url(../images/36389111_l-1020x520.jpg), url(../images/fundo.jpg);
		background-position: center center;
		background-size: cover;
		color: #ffffff;
		padding: 14em 0em 14em;
		text-align: center;
	}

		#banner :last-child {
			margin-bottom: 0;
		}

		#banner h2 {
			color: #ffffff;
			font-size: 4em;
			line-height: 1.25em;
			margin: 0 0 0.5em 0;
			padding: 0;
		}

		#banner p {
			font-size: 1.5em;
			margin-bottom: 1.75em;
		}

/* Wrapper */

	.wrapper {
		padding: 6em 0em 4em;
		/* Style 1 Wrapper */
		/* Style 2 Wrapper */
		/* Style 3 Wrapper */
	}

		.wrapper.style1 {
			background-color: #F5F5F5;
			border-bottom: 1px solid rgba(144, 144, 144, 0.25);
			border-top: 1px solid rgba(144, 144, 144, 0.25);
		}

			.wrapper.style1 .box {
				background-color: #fff;
				padding: 3em 2.5em;
			}

				.wrapper.style1 .box h2, .wrapper.style1 .box h3, .wrapper.style1 .box h4, .wrapper.style1 .box h5, .wrapper.style1 .box h6 {
					color: #c20229;
				}

		.wrapper.style2 .profiles {
			border-bottom: 1px solid rgba(144, 144, 144, 0.25);
			border-top: 1px solid rgba(144, 144, 144, 0.25);
			margin-bottom: 4em;
			padding-top: 4em;
		}

		.wrapper.style2 .profile {
			margin-bottom: 2em;
			text-align: left;
		}

			.wrapper.style2 .profile img {
				border-radius: 50%;
				float: left;
				margin-bottom: 1em;
				margin-right: 1em;
			}

			.wrapper.style2 .profile h4 {
				margin-bottom: 0;
				margin-top: 1em;
			}

		.wrapper.style2 footer {
			margin-left: auto;
			margin-right: auto;
			width: 70%;
		}

			.wrapper.style2 footer p {
				margin-bottom: 3em;
			}

		.wrapper.style3 {
			background-color: #3cadd4;
			color: #ffffff;
		}

			.wrapper.style3 h2, .wrapper.style3 h3, .wrapper.style3 p {
				color: #ffffff;
			}

			.wrapper.style3 input[type="text"],
			.wrapper.style3 input[type="password"],
			.wrapper.style3 input[type="email"],
			.wrapper.style3 select,
			.wrapper.style3 textarea {
				background-color: #fff;
				color: #444;
			}

/* Footer */

	#footer {
		background:#343536;
		padding: 6em 0em 4em;
	}

		#footer h2, #footer h3, #footer h4 {
			color: #ffffff;
		}

		#footer p, #footer a, #footer li {
			color: #cdced0;
		}

		#footer .links {
			border-bottom: 1px solid rgba(144, 144, 144, 0.25);
			margin-bottom: 4em;
			padding-bottom: 1em;
		}

		#footer .copyright {
			margin-top: 0.65em;
			padding: 0;
		}

			#footer .copyright li {
				color: #FFF;
				display: inline-block;
				list-style: none;
				margin-left: 0.5em;
				padding-left: 0.5em;
			}

				#footer .copyright li:first-child {
					margin-left: 0;
					padding-left: 0;
				}

			#footer .copyright a {
				color: #858585;
			}

		#footer .icons {
			text-align: right;
		}

		#footer a.icon {
			color: #ffffff;
			font-size: 0.65em;
			height: 4em;
			line-height: 4em;
			width: 4em;
			cursor: pointer;
		}

/* Grid Demo */

	.grid-demo {
		display: block;
		margin: 0 0 2em 0;
	}

		.grid-demo span {
			background: #8d93a0;
			border-radius: 4px;
			color: rgba(0, 0, 0, 0.25);
			display: block;
			font-weight: 700;
			height: 2.75em;
			line-height: 2.75em;
			text-align: center;
		}

		.grid-demo .row.flush > div span {
			border-radius: 0;
		}

		.grid-demo .row.flush > div:first-child span {
			border-radius: 4px 0 0 4px;
		}

		.grid-demo .row.flush > div:last-child span {
			border-radius: 0 4px 4px 0;
		}
/* Footer */

	#footer {
		background:#343536;
		padding: 6em 0em 4em;
	}

		#footer h2, #footer h3, #footer h4 {
			color: #ffffff;
		}

		#footer p, #footer a, #footer li {
			color: #cdced0;
		}

		#footer .links {
			border-bottom: 1px solid rgba(144, 144, 144, 0.25);
			margin-bottom: 4em;
			padding-bottom: 1em;
		}

		#footer .copyright {
			margin-top: 0.65em;
			padding: 0;
		}

			#footer .copyright li {
				color: #FFF;
				display: inline-block;
				list-style: none;
				margin-left: 0.5em;
				padding-left: 0.5em;
			}

				#footer .copyright li:first-child {
					margin-left: 0;
					padding-left: 0;
				}

			#footer .copyright a {
				color: #858585;
			}

		#footer .icons {
			text-align: right;
		}

		#footer a.icon {
			color: #ffffff;
			font-size: 0.65em;
			height: 4em;
			line-height: 4em;
			width: 4em;
			cursor: pointer;
		}


.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background: rgba(4, 40, 68, 0.85);
}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #91010b;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.login input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
  outline: none;
  color: #444;
  border-color: #72020a;
  border-left-width: 35px;
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #72020a;
  text-decoration: none;
}
.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}
.login button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background: #72020a;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
}
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div class="wrapper" class="login">
  <form  method="post" action="login.php">
    <p class="title">Login</p>
    <input type="text" name="user"/>
    <i class="fa fa-user"></i>
    <input type="senha" name="senha" />
    <i class="fa fa-key"></i>
    <button type="submit" name="submit">
     
	
      Fazer login
	  
    </button>
  </form>
  <footer><a target="blank" href="cadastro.php"><a href="form.php">Ainda não tem uma conta? CADASTRE-SE</a></footer>
  </p>
</div>
 

  

    <script  src="js/index.js"></script>
<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<section class="links">
						<div class="row">
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Respeito</h3>
								<ul class="unstyled">
									<li><a >Tenha respeito pelo próximo, esse site é para ajudar pessoas que passam por dificuldades e nao conseguem estudar por conta disso.</a></li>
									
								</ul>
							</section>
							<section class="3u 6u$(medium) 12u$(small)">
								<h3>gg</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Reiciendis dicta laboriosam enim</a></li>
									<li><a href="#">Corporis, non aut rerum</a></li>
									<li><a href="#">Laboriosam nulla voluptas, harum</a></li>
									<li><a href="#">Facere eligendi, inventore dolor</a></li>
								</ul>
							</section>
							<section class="3u 6u(medium) 12u$(small)">
								<h3>Neque, dolore, facere</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Distinctio, inventore quidem nesciunt</a></li>
									<li><a href="#">Explicabo inventore itaque autem</a></li>
									<li><a href="#">Aperiam harum, sint quibusdam</a></li>
									<li><a href="#">Labore excepturi assumenda</a></li>
								</ul>
							</section>
							<section class="3u$ 6u$(medium) 12u$(small)">
								<h3>Illum, tempori, saepe</h3>
								<ul class="unstyled">
									<li><a href="#">Lorem ipsum dolor sit</a></li>
									<li><a href="#">Recusandae, culpa necessita nam</a></li>
									<li><a href="#">Cupiditate, debitis adipisci blandi</a></li>
									<li><a href="#">Tempore nam, enim quia</a></li>
									<li><a href="#">Explicabo molestiae dolor labore</a></li>
								</ul>
							</section>
						</div>
					</section>
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<h2><li>Nos siga nas redes sociais ao lado</li></h2>
								
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

	</body>
</html>



</body>

</html>
