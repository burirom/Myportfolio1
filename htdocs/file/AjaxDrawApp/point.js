//カラーコード
var color_code; //初期は白
//カラーパレット
$(function() {
    switch (color_id) {
        case "white":
            color_code = "#ffffff";
            break;
        case "blue":
            color_code = "#4169e1";
            break;
        case "green":
            color_code = "#2e8b57";
            break;
        case "red":
            color_code = "#dc143c";
            break;
        case "yellow":
            color_code = "#f0e68c";
            break;
        case "purple":
            color_code = "#9932cc";
            break;
            case "black":
            color_code = "#000000";
            break;
        default:
            color_code = "#000000"; //初期の色
            break;
    }
});

//図形描画
$(function() {
    if (shqpe_id == "square") {
        console.log("四角形  top:" + top_point + "left_point:" + left_point);
        create_squiar(left_point, top_point);
        shqpe_id = null;
    } else if (shqpe_id == "triangle") {
        console.log("三角形  top:" + top_point + "left_point:" + left_point);
        create_triangle(left_point, top_point);
        shqpe_id = null;
    } else if (shqpe_id == "circle") {
        console.log("円  top:" + top_point + "left_point:" + left_point);
        create_circle(left_point, top_point);
        shqpe_id = null;
    }
});

//線描画

$(function() {
    if ($(".line").hasClass("line_active")) {
        if (line_id == 'solidline') {
            create_solidline(posX1, posY1, posX2, posY2);
             console.log(
            "線形座標 px1:" +
                posX1 +
                "  pY1" +
                posY1 +
                "  pX2" +
                posX2 +
                "  pY2" +
                posY1
        );
        } else if (line_id == 'brokenline') {
            create_brokenline(posX1, posY1, posX2, posY2);
             console.log(
            "破線座標 px1:" +
                posX1 +
                "  pY1" +
                posY1 +
                "  pX2" +
                posX2 +
                "  pY2" +
                posY1
        );
        }else if(line_id == 'dottedline'){
            create_dottedline(posX1, posY1, posX2, posY2);
            console.log(
            "点線座標 px1:" +
                posX1 +
                "  pY1" +
                posY1 +
                "  pX2" +
                posX2 +
                "  pY2" +
                posY1
        );
            
        }

       
    }
});
//テキスト描画
$(function(){
	if($('#text').hasClass('text_active')){
        create_text(left_point, top_point);
        console.log('テキスト x:'+left_point+'y:'+top_point);
        $("#text").removeClass("text_active");
    }
	
});

//四角形をcreate
function create_squiar(posX, posY) {
    $("#sketch_canvas").drawPolygon({
        strokeStyle: "black",
        strokeWidth: 1,
        x: posX,
        y: posY,
        radius: 30,
        sides: 4,
        draggable: true,
        fillStyle: color_code
    });
}

//三角形をcreate
function create_triangle(posX, posY) {
    $("#sketch_canvas").drawPolygon({
        strokeStyle: "black",
        strokeWidth: 1,
        x: posX,
        y: posY,
        radius: 30,
        sides: 3,
        draggable: true,
        fillStyle: color_code
      
    });
}

//丸をcreate
function create_circle(posX, posY) {
    $("#sketch_canvas").drawArc({
        strokeStyle: "black",
        strokeWidth: 1,
        x: posX,
        y: posY,
        radius: 25,
        draggable: true,
        fillStyle: color_code
    });
}

//普通の線をcreate
function create_solidline(posX1, posY1, posX2, posY2) {
    $("#sketch_canvas").drawLine({
        strokeStyle: "black",
        strokeWidth: 1,
        x1: posX1,
        y1: posY1,
        x2: posX2,
        y2: posY2,
        draggable: true,
        strokeStyle: color_code
    });
}
//破線をcreate
function create_brokenline(posX1, posY1, posX2, posY2) {
    $("#sketch_canvas").drawLine({
        strokeStyle: "black",
        strokeWidth: 1,
        strokeDash: [5], //間隔
        x1: posX1,
        y1: posY1,
        x2: posX2,
        y2: posY2,
        draggable: true,
        strokeStyle: color_code
    });
}
//点線をcreate
function create_dottedline(posX1, posY1, posX2, posY2) {
    $("#sketch_canvas").drawLine({
        strokeStyle: "black",
        strokeWidth: 1,
        strokeDash: [2], //間隔
        x1: posX1,
        y1: posY1,
        x2: posX2,
        y2: posY2,
        draggable: true,
        strokeStyle: color_code
    });
}

//テキストをcreate
function create_text(posX1, posY1) {
    $("#sketch_canvas").drawText({
		fillStyle:color_code,
		strokeStyle: color_code,
        strokeWidth: 1,
		x: posX1,
		y: posY1,
        fontSize: fontsize,
        text:text,
        draggable: true
    });
}
