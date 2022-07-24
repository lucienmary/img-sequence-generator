<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200&display=swap" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <title>Image sequence generator</title>
</head>
<body>
    <header>
        <h1>Image sequence generator</h1>
    </header>

    <section id="section-canvas">
            <canvas width="540" height="540" id="canvas">Your browser do not support canvas. Please use an another browser.</canvas>
    </section>

    <main id="panel">
        <section id="section-assets">
            <header>
                <h2>Assets</h2>
            </header>
            <section id="main-caracter">
                <h3>Main caracter</h3>
                <div>
                    <label for="main-caracter">Main caracter</label>
                    <input type="file" name="main-caracter" id="main-caracter-input">
                    <span>Preview ?</span>
                </div>

                <div>
                    <label for="main-caracter-position">Position</label>
                    <select name="main-caracter-position" id="main-caracter-position">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>

                <div>
                    <label for="main-caracter-width">Width</label>
                    <input type="number" name="main-caracter-width" id="main-caracter-width">
                </div>

                <div>
                    <label for="main-caracter-height">Height</label>
                    <input type="number" name="main-caracter-height" id="main-caracter-height">
                </div>

                <div>
                    <label for="main-caracter-locked">Locked position</label>
                    <input type="checkbox" name="main-caracter-locked" id="">
                </div>
            </section>

            <section>
                <h3>Other assets</h3>

                <div>
                    <label for="asset-1">Assets 1</label>
                    <input type="file" name="asset-1" id="">
                    <span>Preview ?</span>
                </div>

                <div>
                    <label for="asset-1-position">Starting position</label>
                    <select name="asset-1-position" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>

                <div>
                    <button>More fields</button>
                </div>
            </section>

            <section>
                <h3>Background</h3>
                
                <div>
                    <label for="background-color">Background color</label>
                    <input type="color" name="background-color" id="background-color-input" value="#727272">
                </div>

                <div>
                    <label for="background-opacity">Background opacity (only for .png output)</label>
                    <input type="range" name="background-opacity" id="" min="0" max="100" value="100" step="5">
                </div>
            </section>
        </section>

        <hr />

        <section id="section-img-settings">
            <header>
                <h2>Image settings</h2>
            </header>
            <section>
                <div>
                    <label for="aspect-ratio">Aspect ratio</label>
                    <select name="aspect-ratio" id="">
                        <option value="3840:2160">3 840 x 2 160 (2160p)</option>
                        <option value="2560:1440">2 560 x 1 440 (1440p)</option>
                        <option value="1920:1080">1 920 x 1 080 (1080p)</option>
                        <option value="1280:720">1 280 x 720 (720p)</option>
                        <option value="854:480">854 x 480 (480p)</option>
                        <option value="640:360">640 x 360 (360p)</option>
                        <option value="426:240">426 x 240 (240p)</option>
                        <option value="1:1">1 080 x 1 080 (Instagram)</option>
                        <option value="1200:627">1 200 x 627 (Opengraph Facebook)</option>
                    </select>
                </div>
            </section>

            <section>
                <div>
                    <label for="img-extension">Image extension</label>
                    <select name="img-extension" id="">
                        <option value="jpg">.jpg</option>
                        <option value="png">.png</option>
                        <option value="webp" disabled>.webp</option>
                        <option value="gif" disabled>.gif</option>
                    </select>
                </div>
            </section>
        </section>

        <hr />

        <section>
            <header>
                <h2>Output settings</h2>
            </header>

            <section>
                <div>
                    <label for="number-of-frames">Number of frames</label>
                    <input type="number" name="number-of-frames" id="" value="6" min="1" max="36">
                </div>
                
                <div>
                    <label for="difference-level">Difference level</label>
                    <input type="number" name="difference-level" id="" value="0" min="0" max="8">
                </div>
            </section>
        </section>

        <button id="download">Generate X images</button>
    </main>
    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/librairies/fabric.js"></script>
    <script src="js/canvas.js"></script>
</body>
</html>