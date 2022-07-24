$(function() {
    let canvasBg = $('#background-color-input').val();

    const CANVAS = new fabric.Canvas('canvas');

    CANVAS.fillStyle = 'blue';

    let rect = new fabric.Rect({
    left: 120,
    top: 120,
    fill: canvasBg,
    width: 300,
    height: 300
    });

    CANVAS.add(rect);
});

// $(function() {
//     const ASSETS = {};
//     const OUTPUT_SETTINGS = {};
//     const IMAGE_SETTINGS = {};
//     const CANVAS_WRAPPER = $('#section-canvas');
//     const CANVAS = document.querySelector('canvas');
//     const CTX = CANVAS.getContext('2d');

//     ASSETS.mainInput = $('#main-caracter-input');
//     ASSETS.mainPosition = $('#main-caracter-position');

//     CTX.fillStyle = '#727272';
//     CTX.fillRect(0, 0, CANVAS_WRAPPER.outerWidth(), (CANVAS_WRAPPER.outerWidth() / 3840 ) * 2160);

//     ASSETS.mainInput.on('change', addMainImage);
//     ASSETS.mainPosition.on('change', setMainImagePosition);

//     function addMainImage() {
//         ASSETS.main = new Image();
//         ASSETS.main.src = URL.createObjectURL(ASSETS.mainInput[0].files[0]);

//         ASSETS.main.onload = () => {
//             ASSETS.main.height = CANVAS.height / 2;
//             ASSETS.main.ratio = ASSETS.main.naturalHeight / ASSETS.main.height;
//             ASSETS.main.width = ASSETS.main.naturalWidth / ASSETS.main.ratio;
//             $('#main-caracter-width').val(ASSETS.main.width);
//             $('#main-caracter-height').val(ASSETS.main.height);

//             setMainImagePosition();
//             drawMainImage();
//         }
//     }

//     function setMainImagePosition() {
//         console.log(ASSETS.main);
//         ASSETS.main.position = {x: 0, y: 0};

//         switch (ASSETS.mainPosition.val()) {
//             case '1':
//                 ASSETS.main.position.x = 0;
//                 ASSETS.main.position.y = 0;
//             break;
//             case '2':
//                 ASSETS.main.position.x = (CANVAS.width / 2) - (ASSETS.main.width / 2);
//                 ASSETS.main.position.y = 0;
//             break;
//             case '3':
//                 ASSETS.main.position.x = CANVAS.width - ASSETS.main.width;
//                 ASSETS.main.position.y = 0;
//             break;
//             case '4':
//                 ASSETS.main.position.x = 0;
//                 ASSETS.main.position.y = (CANVAS.height / 2) - (ASSETS.main.height / 2);
//             break;
//             case '5':
//                 ASSETS.main.position.x = (CANVAS.width / 2) - (ASSETS.main.width / 2);
//                 ASSETS.main.position.y = (CANVAS.height / 2) - (ASSETS.main.height / 2);
//             break;
//             case '6':
//                 ASSETS.main.position.x = CANVAS.width - ASSETS.main.width;
//                 ASSETS.main.position.y = (CANVAS.height / 2) - (ASSETS.main.height / 2);
//             break;
//             case '7':
//                 ASSETS.main.position.x = 0;
//                 ASSETS.main.position.y = CANVAS.height - ASSETS.main.height;
//             break;
//             case '8':
//                 ASSETS.main.position.x = (CANVAS.width / 2) - (ASSETS.main.width / 2);
//                 ASSETS.main.position.y = CANVAS.height - ASSETS.main.height;
//             break;
//             case '9':
//                 ASSETS.main.position.x = CANVAS.width - ASSETS.main.width;
//                 ASSETS.main.position.y = CANVAS.height - ASSETS.main.height;
//             break;
//             default:
//                 ASSETS.main.position.x = 0;
//                 ASSETS.main.position.y = 0;
//             break;
//         }

//         drawMainImage();
//     }

//     function drawMainImage() {
//         CTX.drawImage(ASSETS.main, ASSETS.main.position.x, ASSETS.main.position.y, ASSETS.main.width, ASSETS.main.height);
//     }

//     $('#download').on('click', function(e) {
//         let canvasUrl = CANVAS.toDataURL("image/jpeg", 1);
//         console.log(canvasUrl);
//         const createEl = document.createElement('a');
//         createEl.href = canvasUrl;
//         createEl.download = "download-this-canvas";
//         createEl.click();
//         createEl.remove();
//     });
// });