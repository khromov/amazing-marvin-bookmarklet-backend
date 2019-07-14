<?php $config = json_decode(file_get_contents('../config.json')); ?>
<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Amazing Marvin Bookmarklet</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<div class="inner">
					<!-- <span class="icon solid major fa-cloud"></span> -->
					<img class="top-image" src="images/amazing-marvin-logo.png" alt="Amazing Marvin logo" />
					<h1>Save anything from the web<br /> with the <strong>Amazing Marvin Bookmarklet</strong></h1>
					<p>With the Amazing Marvin Bookmarklet, you can save a website from your browser into an Amazing Marvin list. <br> You can for example use it to save articles you want to read later.</p>
					<ul class="actions special">
						<li><a href="#generate-bookmarklet" class="button scrolly">Generate your bookmarklet</a></li>
					</ul>
				</div>
			</section>

		<!-- Generate -->
		<section id="generate-bookmarklet" class="main style1 special">
			<div class="container">
				<header class="major">
					<h2>Generate your bookmarklet</h2>
				</header>
				<p>This uses the same endpoint as Zapier.<br>Note: You <strong>don't</strong> need a Zapier account! </p>

				<form method="post" action="#">
					<div class="row gtr-uniform gtr-50">

						<div class="col-12">
							<input class="marvin-input" type="text" name="marvin-token" id="marvin-token" value="" placeholder="Your Marvin Zapier key" />
							<header>
								<h4></h4>
								<p>
									<a href="https://app.amazingmarvin.com/?zapier" target="_blank">Click here to get the key from Amazing Marvin</a>
								</p>
							</header>
						</div>

						<div class="col-12">
							<input class="marvin-input" type="text" name="marvin-list" id="marvin-list" value="" placeholder="Marvin list name" />
							<header>
								<h4></h4>
								<p>
									For example "Reading"
								</p>
							</header>
						</div>

						<div class="col-12">
							<p>
								<a id="marvin-bookmarklet" href="" class="button primary solid marvin-button">Save to AM</a>
							</p>
							<p>
								Drag the link above to your bookmark toolbar!
							</p>
						</div>
					</div>
				</form>
			</div>
            <div class="container">
                <header class="major">
                    <h2>How to add the bookmarklet</h2>
                </header>
                <p>Ante nunc accumsan et aclacus nascetur ac ante amet sapien sed.</p>
                <div class="row gtr-150">
                    <div class="col-4 col-12-medium">
                        <span class="image fit"><img src="images/am-1.png" alt="" /></span>
                        <h3>Add the bookmarklet</h3>
                        <p>Drag the "Save to AM" button to your web browser bookmarks toolbar.</p>
                    </div>
                    <div class="col-4 col-12-medium">
                        <span class="image fit"><img src="images/am-2.png" alt="" /></span>
                        <h3>Save links</h3>
                        <p>Press the toolbar on any website to save it to Marvin.</p>
                    </div>
                    <div class="col-4 col-12-medium">
                        <span class="image fit"><img src="images/am-3.png" alt="" /></span>
                        <h3>Read it</h3>
                        <p>Your link will show up in the list you specified when configuring the bookmarklet.</p>
                    </div>
                </div>
            </div>
		</section>

		<!-- Footer -->
        <section id="footer">
            <ul class="copyright">
                <li>Made with &#10084; by <a href="https://khromov.se">Stanislav Khromov</a></li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </section>

        <!-- Fork me on GitHub: https://github.com/tholman/github-corners -->
        <a href="https://github.com/khromov/amazing-marvin-bookmarklet-backend" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>

		<!-- Scripts -->
        <script>
            var bookmarkletTemplate = "javascript:(function () {var baseUrl = '<?php echo $config->bookmarkletUrl; ?>';var token = '%TOKEN%';var list = '%LIST%';var scriptElement = document.createElement('scr' + 'ipt');try {if (!document.body) {throw 0;}document.title = '(Saving...) ' + document.title;scriptElement.setAttribute('src', baseUrl + '?url=' + encodeURIComponent(window.location.href) + '&token=' + encodeURIComponent(token) + '&list=' + encodeURIComponent(list));document.body.appendChild(scriptElement);} catch (e) {alert('Please wait until the page has loaded.');}})();void 0;";
        </script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/custom.js"></script>
	</body>
</html>