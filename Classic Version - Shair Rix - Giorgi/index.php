<!DOCTYPE html>

<html>

<head>

	<link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" integrity="sha256-2pUeJf+y0ltRPSbKOeJh09ipQFYxUdct5nTY6GAXswA=" crossorigin="anonymous" />

	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="libs/css/main.css?v=<?php echo rand();?>">

	<link rel="stylesheet" type="text/css" href="assets/css/gallery.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<meta name="viewport" content="minimal-ui, user-scalable=no, initial-scale=1, maximum-scale=1, width=device-width" />

	<title>Classic Version - Shair Rix - Giorgi</title>

	<meta name="Description" content="Allwair.us is the best Private server experience you can have.">

    <meta name="Keywords" content="Private Servers, Allwair.us ,agario, skins, chat, minimap,nbkio">

    <meta name="robots" content="index, nofollow">

	<link id="favicon" rel="icon" type="image/png" href="favicon.jpg">
    
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />

	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>

	<script>

	var aiptag = aiptag || {};

	aiptag.cmd = aiptag.cmd || [];

	aiptag.cmd.display = aiptag.cmd.display || [];	

	// Show GDPR consent tool

	aiptag.gdprShowConsentTool = true;

	// If you use your own GDPR consent tool please set aiptag.gdprConsent = false; if an EU user has declined or not yet accepted marketing cookies, for users outside the EU or for users that accepted the GDPR please use aiptag.gdprConsent = true;



	</script>

	<script async src="//api.adinplay.com/libs/aiptag/pub/PPT/nefllo.io/tag.min.js"></script>

	<script>

	window.addEventListener("load", function() {

		window.cookieconsent.initialise({

	  		"palette": {

	    		"popup": {

	      			"background": "#252e39"

	    		},

	    		"button": {

	      			"background": "#14a7d0",

	      			"text": "#fff"

	    		}

	  		},

	  		"theme": "edgeless",

	  		"position": "bottom-right",

	  		"type": "opt-in"

		})

	});

	</script>

</head>

<body>

	<div class="app">


		
		<!--<div class="preloader">

			Preloader logo img

			<div class="logo"></div>

			<div class="loading-text has-text-grey">AllWair.us</div>

			 Loader arc

			<loader></loader>

		</div>-->
		



		<!-- Skins overlay!? -->

	    <div id="gallery" onclick="if (event.target == this) this.hide()" style="display: none;">

	        <div id="gallery-content">

	            <div id="gallery-header">Skins</div>

	            <div id="gallery-body"></div>

	        </div>

	    </div>

		<!-- Overlay Front -->

		<div class="overlay-front">

			<div class="advert-header-center">

			</div>

			<div id="preroll"></div>

			<div class="menu pane columns">

				<div class="column">

					<div class="pane">

						<div class="field has-addons">

							<p class="control">

								<a class="button is-dark go-facebook" data-tooltip="Facebook (Soon)">

									<span class="icon is-medium">

										<i class="fab fa-facebook-square"></i>

									</span>

								</a>

						  	</p>

							<p class="control">

						    	<a class="button is-dark go-settings" data-tooltip="Settings">

						      		<span class="icon is-medium">

						        		<i class="fas fa-cog"></i>

						      		</span>

						    	</a>

						  	</p>

						  	<p class="control">

						    	<a class="button is-dark go-hotkeys" data-tooltip="Hotkeys">

						      		<span class="icon is-medium">

						        		<i class="fas fa-keyboard"></i>

						      		</span>

						    	</a>

						  	</p>

						  	<p class="control">

						  		<a class="button is-dark go-language" data-tooltip="Language">

						  			<span class="icon is-medium">

						  				<i class="fas fa-globe-americas"></i>

						  			</span>

						  		</a>

						  	</p>

						</div>

						<div class="panels-content">

							<div class="facebook-panel">

							</div>

							<div class="settings-panel">

					            <div id="settings" class="columns">

					                <div class="column">

					                    <div class="field">

					                    	<input id="showSkins" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showSkins">Skins</label>

					                    </div>

					                    <div class="field">

					                    	<input id="showNames" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showNames">Names</label>

					                    </div>

					                    <div class="field">

					                    	<input id="darkTheme" class="is-checkradio is-white" type="checkbox">

					                    	<label for="darkTheme">Dark</label>

					                    </div>

					                    <div class="field">

					                    	<input id="showColor" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showColor">Color</label>

					                    </div>

					                    <div class="field">

					                    	<input id="showMass" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showMass">Mass</label>

					                    </div>

					                    <div class="field">

					                    	<input id="showChat" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showChat">Chat</label>

					                    </div>

					                    <div class="field">

					                    	<input id="showMinimap" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showMinimap">Minimap</label>

					                    </div>

					                    <div class="field">

					                    	<input id="autoRespawn" class="is-checkradio is-white" type="checkbox">

					                    	<label for="autoRespawn">Auto Respawn</label>

					                    </div>

					                    <div class="field">

					                    	<input id="showLeaderboard" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showLeaderboard">Show Leaderboard</label>

					                    </div>

					                </div>

					                <div class="column">

					                    <div class="field">

					                    	<input id="showBorder" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showBorder">Border</label>

					                    </div>

					                    <div class="field">

					                    	<input id="showGrid" class="is-checkradio is-white" type="checkbox">

					                    	<label for="showGrid">Grid</label>

					                    </div>

					                    <div class="field">

					                    	<input id="moreZoom" class="is-checkradio is-white" type="checkbox">

					                    	<label for="moreZoom">More Zoom</label>

					                    </div>

					                    <div class="field">

					                    	<input id="fillSkin" class="is-checkradio is-white" type="checkbox">

					                    	<label for="fillSkin">Fill Skin</label>

					                    </div>

					                    <div class="field">

					                    	<input id="backgroundSectors" class="is-checkradio is-white" type="checkbox">

					                    	<label for="backgroundSectors">Background Sectors</label>

					                    </div>

					                    <div class="field">

					                    	<input id="jellyPhysics" class="is-checkradio is-white" type="checkbox">

					                    	<label for="jellyPhysics">Jelly Physics</label>

					                    </div>

					                    <div class="field">

					                    	<input id="shortMass" class="is-checkradio is-white" type="checkbox"></input>

					                    	<label for="shortMass">Short Mass</label>

					                    </div>

					                    <div class="field">

					                        <input id="playSounds" class="is-checkradio is-white" type="checkbox">

					                        <label for="playSounds">Sounds</label>

					                    </div>

					                </div>

					            </div>

					            <div class="columns">

					            	<div class="column">

					            		<span class="has-size-7 has-text-info">Animation Delay</span>

					            		<input id="splitAnimation" type="range" min="100" max="500" step="any" value="120">

					            	</div>

					            	<div class="column">

					                    <span class="has-size-7 has-text-info">Sounds Volume</span>

					                    <input id="soundsVolume" type="range" min="0" max="1" step="any">

					            	</div>

					            </div>

							</div>

							<div class="hotkeys-panel">
								
							</div>

							<div class="language-panel">

								<div class="columns">

									<div class="has-quarter-padding has-text-centered is-width-100">

										<p class="is-size-4 has-text-info has-text-weight-bold">Selecciona tu idioma.</p>

										<span class="alert-reload-text">Requiere recargar el juego.</span>

										<div class="dropdown is-hoverable">

											<div class="dropdown-trigger">

												<button class="button is-dark" aria-haspopup="true" aria-controls="dropdown-menu1">

												    <span>Cambiar idioma</span>

												    <span class="icon is-small">

												    	<i class="fas fa-angle-down" aria-hidden="true"></i>

												    </span>

												</button>

											</div>

											<div class="dropdown-menu" id="dropdown-menu1" role="menu">

												<div class="dropdown-content">

											    	<a href="setLang.php?language=en" class="dropdown-item button-flag">

											    		<img src="flags/usa.png?w=20">

											    		<b>Ingles</b>

											    	</a>

											    	<a href="setLang.php?language=es" class="dropdown-item button-flag">

											    		<img src="flags/spain.png?w=20">

											    		<b>Espanol</b>

											    	</a>

											    	<a href="setLang.php?language=pt" class="dropdown-item button-flag">

											    		<img src="flags/brazil.png?w=20">

											    		<b>Portugues</b>

											    	</a>

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="column">

					<div class="pane">

						<div class="first-input is-spaced" style="margin-bottom: 0px">

							<div class="columns has-buttons">

								<div class="column is-one-quarter">

									<input class="input team-input" type="text" name="clan" placeholder="Team">

								</div>

								<div class="column">

									<input id="nick" class="input nick-input" type="text" name="name" placeholder="Nickname">

								</div>

								<input type="text" id="skin" placeholder="Skin Name" style="display: none!important;">

							</div>

						</div>

						<div class="columns is-variable is-1 has-buttons" style="margin-bottom: 0px!important;">

							<div class="column">

								<button class="button play-button is-link is-large is-spaced is-full-width">Play</button>

							</div>

							<div class="column is-one-quarter">

								<button class="button spectate-button is-success is-large is-spaced is-full-width"><i class="fas fa-search"></i></button>

							</div>

						</div>

						<a id="gallery-btn" class="button is-rounded is-info is-small is-fullwidth" onclick="openSkinsList()">Skins Gallery</a>

					</div>

					<div class="ad-main">

						<span class="is-block has-text-centered has-text-light">Advertisement</span>

						<!--Ads-->
					</div>

				</div>

				<div class="column">

					<div class="pane">

						<div class="servers"></div>

						<p class="players-total has-text-grey-lighter">Loading...</p>

					<!--Donate Paypal-->

						<!--Systems Operational-->
						<a href="https://discord.gg/p4v64Fq" target="_blank" class="current-status">
						<span class="color-dot none"></span>
						<span class="color-description" data-tooltip="Click here to go to support">All Systems Operational <i class="fab fa-discord"></i></span></a>

					</div>

				</div>

			</div>

			<div class="advert-bottom-center">

			</div>

		</div>

		<!-- Overlay End -->

		<div class="overlay-end">

			<div class="minion-control">

				<div class="control-toggle">

					<span>You're Controlling your Bot</span>

					<span>Press Q to switch back.</span>

				</div>

			</div>

			<div class="chat">

				<div class="chat-content">

					<div class="chat-messages"></div>

				</div>

				<input class="chat-input" maxlength="200" placeholder="Press enter to chat...">

			</div>

			<div class="stats">

				<div class="stats-column">

					<li class="stats-row stats-pid">ID: 111</li>

					<li class="stats-row stats-mass"></li>

					<li class="stats-row stats-position"></li>

					<li class="stats-row stats-fps"></li>

					<li class="stats-row stats-latency"></li>

					<br>

					<li class="stats-row stats-players small"></li>

					<li class="stats-row stats-playing small"></li>

					<li class="stats-row stats-spectating small"></li>

					<li class="stats-row stats-load small"></li>

				</div>

			</div>

			<div class="leaderboard">

				<div class="leaderboard-players">

					<span class="leaderboard-header">Leaderboard</span>

				</div>

			</div>

			<!-- Mobile Stuff -->

		    <div id="mobileStuff" style="display: none;">

		        <div id="touchpad"></div>

		        <div id="touchCircle" style="display: none;"></div>

		        <img src="./assets/img/split.png" id="splitBtn">

		        <img src="./assets/img/eject.png" id="ejectBtn">

		    </div>
		</div>
		<!-- Canvas Overlay -->
		<canvas class="canvas" moz-opaque></canvas>
	</div>
	<script type="text/javascript" src="assets/js/quadtree.js?v=<?php echo rand();?>"></script>
	<script type="text/javascript" src="assets/js/main_out______________________________.js?v=<?php echo rand();?>"></script>
	<script type="text/javascript" src="server.js?v=<?php echo rand();?>"></script>

</body>

</html>