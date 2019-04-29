<?php  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eat cells smaller than you and don't get eaten by the bigger ones, as an MMO">
    <meta name="keywords" content="agario, agar, io, cell, cells, virus, bacteria, blob, game, games, web game, html5, fun, flash">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>Cigar2</title>

    <link id="favicon" rel="icon" type="image/png" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/gallery.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


    <script src="assets/js/quadtree.js"></script>
    <script src="assets/js/main_out.js"></script>
</head>

<body>
    <div id="gallery" onclick="if (event.target == this) this.hide()" style="display: none;">
        <div id="gallery-content">
            <div id="gallery-header">Skins</div>
            <div id="gallery-body"></div>
        </div>
    </div>
    <div id="overlays" style="display: none;">
        <div id="helloDialog">
            <div class="form-group">
                <h2 id="title">Cigar2</h2>
            </div>

            <div class="form-group">
                <input id="nick" class="form-control" placeholder="Nickname" maxlength="15">
                <input id="skin" class="form-control"  placeholder="Skin Name">
                <select id="gamemode" class="form-control" onchange="setserver(this.value)" required>
                    <option value="localhost:443" selected>Local</option>
                </select>
            </div>

            <button id="play-btn" class="btn btn-play btn-primary btn-needs-server">Play</button>
            <button id="spectate-btn" onclick="spectate()" class="btn btn-warning btn-spectate btn-needs-server glyphicon glyphicon-eye-open"></button>
            <button id="gallery-btn" onclick="openSkinsList()" class="btn btn-play btn-primary btn-needs-server btn-info">Skins Gallery</button>

            <div id="settings" class="checkbox">
                <div style="margin: 6px;">
                    <label><input id="showSkins" type="checkbox">Skins</label>
                    <label><input id="showNames" type="checkbox">Names</label>
                    <label><input id="darkTheme" type="checkbox">Dark</label>
                    <label><input id="showColor" type="checkbox">Color</label>
                    <label><input id="showMass" type="checkbox">Mass</label>
                    <label><input id="showChat" type="checkbox">Chat</label>
                    <label><input id="showMinimap" type="checkbox">Minimap</label>
                    <label><input id="showPosition" type="checkbox">Position</label>
                    <label><input id="showBorder" type="checkbox">Border</label>
                    <label><input id="showGrid" type="checkbox">Grid</label>
                    <label><input id="moreZoom" type="checkbox">Zoomout</label>
                    <label><input id="fillSkin" type="checkbox">Fill Skin</label>
                    <label><input id="backgroundSectors" type="checkbox">Background Sectors</label>
                    <label><input id="jellyPhysics" type="checkbox">Jelly Physics</label>
                    <label>
                        <input id="playSounds" type="checkbox">Sounds
                        <input id="soundsVolume" type="range" min="0" max="1" step="any">
                    </label>
                </div>
            </div>

            <div id="instructions">
                <hr>
                <center>
                    <span class="text-muted">
                        Move your mouse to control your cell<br>
                        Press <b>Space</b> to split<br>
                        Press <b>W</b> to eject some mass<br>
                    </span>
                </center>
            </div>

            <hr>
            <div id="footer">
                <span class="text-muted">Have fun!</span>
            </div>

        </div>
    </div>

    <div id="connecting">
        <div id="connecting-content">
            <h2>Connecting</h2>
            <p> If you cannot connect to the servers, check if you have some anti virus or firewall blocking the connection.</p>
        </div>
    </div>

    <div id="mobileStuff" style="display: none;">
        <div id="touchpad"></div>
        <div id="touchCircle" style="display: none;"></div>
        <img src="/assets/img/split.png" id="splitBtn">
        <img src="/assets/img/eject.png" id="ejectBtn">
    </div>

    <canvas id="canvas" width="800" height="600"></canvas>
    <input type="text" id="chat_textbox" placeholder="Press enter to chat" maxlength="200">
    <div style="font-family:'Ubuntu'">&nbsp;</div>
</body>
</html>
