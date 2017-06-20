(function (window) {

	function Pix(spritesheet) {
		this.initialize(spritesheet);
	}

	var p = Pix.prototype = new createjs.Container();

// static properties:

	var speed = 0.1;
	var maxSpeed = 10;
	


		
		
// public properties:

	p.bounds;	//visual radial size
	p.hit;		//average radial disparity
	p.active;	//is it active
	p.offset;
	p.dist;
	p.state;
	
		
		

// constructor:
	p.Container_initialize = p.initialize;	//unique to avoid overiding base class
	
	p.initialize = function ( spritesheet, speed) {
		this.Container_initialize(); // super call
		
		this.spritesheet=spritesheet;
		
		this.sprite = new createjs.Sprite(this.spritesheet, "run");
		this.state = "run";
		this.sprite.framerate = 30;
		
		this.addChild(this.sprite);
		
		
		
		this.graphic = new createjs.Graphics();
        this.graphic.beginFill("#700");		
        this.graphic.drawRect(-64,-128,128,128);
        this.rectangle= new createjs.Shape(this.graphic);
		this.rectangle.x=this.rectangle.y=0;
       // this.addChild(this.rectangle);
		//this.rectangle.alpha= 0.5;
		this.hitArea = this.rectangle;
		
		
		this.activate( spritesheet, speed);
		
		this.on("mousedown", function(evt) {
			
			  
			  this.offset = {x:this.x-evt.stageX, y:this.y-evt.stageY};
			  });
			  
		// the pressmove event is dispatched when the mouse moves after a mousedown on the target until the mouse is released.
		
		
		this.on("mousedown", function(evt) {
			
			if (this.state != "jump"){
				this.sprite.gotoAndPlay("jump");
				this.state = "jump";
			}
				
		});
		this.on("pressmove", function(evt) {
			
				this.xTarget = (evt.stageX + this.offset.x);
				
				if (this.state != "run"){
					this.sprite.gotoAndPlay("run");
					this.state = "run";
				}
				
		});
		this.on("pressup", function(evt) {
			
			  //this.xTarget = bg_w*0.8;
			  
			  if (this.state != "run"){
					this.sprite.gotoAndPlay("run");
					this.state = "run";
				}
			  });
	}


	p.activate = function ( spritesheet, speed) {
		
		var radius = 10;
		this.hit = 10;

		this.x =  bg_w + Math.random()*(bg_w*0.5);
		this.y =  150 ;
		
		this.xTarget = bg_w*0.3 + Math.random()*(bg_w*0.7);
		
		
		
		
		this.text = new createjs.Text("Hallo", "bold 26px Courier","#FF0");
        this.text.textAlign ="left";
        this.text.y = 0;
        this.text.x = 0;
        //this.addChild(this.text);
		
		this.active = true;
		
		this.bounds = this.getBounds();
		
	}

	//handle what a pix does to itself every frame
	p.tick = function (event) {
		
		
		
		this.dist =   this.xTarget - this.x;		
		vx= this.dist * speed;
		
		
		
		if (this.dist < 0){
			if (Math.abs(vx) > maxSpeed){ vx = -maxSpeed}
			this.scaleX = -1;
			this.x += vx;
			}
		else{
			if (Math.abs(vx) > maxSpeed){ vx = maxSpeed}
			this.scaleX = 1;
			this.x += vx;
			
			}
			
		if (Math.abs(this.dist) > 10){
			this.sprite.play("run");
			this.state = "run";
			}
		else if (this.state != "jump"){
				this.sprite.gotoAndPlay("jump");
				this.state = "jump";
			}
		else if (Math.floor((Math.random() * 500) + 1) == 1){
			this.sprite.gotoAndPlay("idle");
			
			}
		
		
		//this.x += (this.xTarget - this.x) * speed;
		
		this.text.text = stage.getChildIndex(this);
		
		/* this.filters = [
    		 new createjs.ColorFilter(1,1,1,1, 196,31,120,0)
			 ];
 		this.cache(-133, -174, 624, 633);*/
		
		
		
	}
	
		
		
		



	p.hitPoint = function (tX, tY) {
		return this.hitRadius(tX, tY, 0);
	}

	p.hitRadius = function (tX, tY, tHit) {
		//early returns speed it up
		if (tX - tHit > this.x + this.hit) {
			return;
		}
		if (tX + tHit < this.x - this.hit) {
			return;
		}

		if (tY - tHit > this.y + this.hit) {
			return;
		}

		if (tY + tHit < this.y - this.hit) {
			return;
		}

		//now do the circle distance test
		return this.hit + tHit > Math.sqrt(Math.pow(Math.abs(this.x - tX), 2) + Math.pow(Math.abs(this.y - tY), 2));
	}


	window.Pix = Pix;

}(window));
