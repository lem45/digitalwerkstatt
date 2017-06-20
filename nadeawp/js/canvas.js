

	var canvas;			//Main canvas
	var stage;			//Main display stage
	var messageField;		//Message display field
	var loadingInterval = 0;

    var preload;
	
	
	
	var bg;
	
	var bg_h= 150;
	var bg_w = window.innerWidth;
	
	
	var  Spritesheet_E_01;
	var  Spritesheet_P_01;
	
	var numPix;
	var maxPix = 5;
	var pixArray = [];
	var spritesheetArray = [];

	

	function init() {
	   

	   
		wrapper = document.getElementById("wrapper");
		canvas = document.getElementById("Canvas");
		stage = new createjs.Stage(canvas);
		
		
		
		messageField = new createjs.Text("Loading", "24px Maven Pro", "#FFFFFF");
		messageField.maxWidth = 1000;
		messageField.textAlign = "center";
		messageField.x = window.innerWidth / 2;
		messageField.y = bg_h / 2;
		stage.addChild(messageField);
		
		stage.update(); 	//update the stage to show text
		resize();
		
		 // enable touch interactions if supported on the current device:
		createjs.Touch.enable(stage);
		// enabled mouse over / out events
		stage.enableMouseOver(10);
		
		// begin loading content 
		var manifest = [
			//{id:"logo", src:"img/logo.png"},
			{src:"img/spritesheet_pix_01.png", id:"pix_01"},
			{src:"img/spritesheet_pix_02.png", id:"pix_02"},
			{src:"img/spritesheet_pix_03.png", id:"pix_03"},
			{src:"img/spritesheet_pix_04.png", id:"pix_04"},
			{src:"img/spritesheet_pix_05.png", id:"pix_05"}
			
		];

        preload = new createjs.LoadQueue(false);
        preload.installPlugin(createjs.Sound);
		preload.addEventListener("complete", doneLoading); // add an event listener for when load is completed
        preload.addEventListener("progress", updateLoading);
	    preload.loadManifest(manifest);
		
	}

	function stop() {
		if (preload != null) { preload.close(); }
		createjs.Sound.stop();
	}
	
	

	function updateLoading() {
		messageField.text = "Loading " + (preload.progress*100|0) + "%"
		stage.update();
	}


	function doneLoading(event) {
		stage.removeChild(messageField);
		clearInterval(loadingInterval);
		
		//spritesheet	
		Spritesheet_P_01 = new createjs.SpriteSheet({
			"images": [preload.getResult("pix_01")],
			"frames": {"regX": 40, "height": 128,  "regY": 115, "width": 128},
			"animations": {"run": [0, 14, "run", 1], "jump": [15, 29, "still"], "still": [30, 30], "idle": [31, 59, "still"]}
		});
		spritesheetArray.push(Spritesheet_P_01);
		
		//spritesheet	
		Spritesheet_P_02 = new createjs.SpriteSheet({
			"images": [preload.getResult("pix_02")],
			"frames": {"regX": 40, "height": 128,  "regY": 115, "width": 128},
			"animations": {"run": [0, 14, "run", 1], "jump": [15, 34, "still"], "still": [35, 35], "idle": [36, 64, "still"]}
		});
		spritesheetArray.push(Spritesheet_P_02);
		
		//spritesheet	
		Spritesheet_P_03 = new createjs.SpriteSheet({
			"images": [preload.getResult("pix_03")],
			"frames": {"regX": 40, "height": 128,  "regY": 115, "width": 128},
			"animations": {"run": [0, 14, "run", 1], "jump": [15, 29, "still"], "still": [30, 30], "idle": [31, 59, "still"]}
		});
		spritesheetArray.push(Spritesheet_P_03);
		
		//spritesheet	
		Spritesheet_P_04 = new createjs.SpriteSheet({
			"images": [preload.getResult("pix_04")],
			"frames": {"regX": 40, "height": 128,  "regY": 115, "width": 128},
			"animations": {"run": [0, 14, "run", 1], "jump": [15, 34, "still"], "still": [35, 35], "idle": [36, 64, "still"]}
		});
		spritesheetArray.push(Spritesheet_P_04);
		
		//spritesheet	
		Spritesheet_P_05 = new createjs.SpriteSheet({
			"images": [preload.getResult("pix_05")],
			"frames": {"regX": 40, "height": 128,  "regY": 115, "width": 128},
			"animations": {"run": [0, 14, "run", 1], "jump": [15, 29, "still"], "still": [30, 30], "idle": [31, 59, "still"]}
		});
		spritesheetArray.push(Spritesheet_P_05);
		
		
		
		
		for (i=0; i<numPix; i++){
			pixArray[i] = new Pix(spritesheetArray[i]);
			stage.addChild(pixArray[i]);
			}
		
		
	



		
		//start game timer   
		if (!createjs.Ticker.hasEventListener("tick")) { 
			createjs.Ticker.addEventListener("tick", tick);
			createjs.Ticker.setFPS(40);
		}
		createjs.Ticker.setPaused(false); 
		
	}
	
	function tick(event) {
		if (!createjs.Ticker.getPaused()){
		
			for (i=0; i<numPix; i++){
				pixArray[i].tick();
				}	
			stage.update();
		}
	}
	
	function resize() {

		
		var bg_w = window.innerWidth;
		numPix = Math.floor(bg_w/300);
		if (numPix > maxPix ){
			numPix = maxPix;
			}
		
		// Test-Rectangle Background
		/*stage.removeChild(bg);
		graphic = new createjs.Graphics();
        graphic.beginFill("#700");		
        graphic.drawRect(10,10,bg_w-20,bg_h-20);
       	bg= new createjs.Shape(graphic);
		bg.x= bg.y=0;
        stage.addChild(bg);
		bg.alpha= 0.5;*/
		
		canvas.width= bg_w;
	}