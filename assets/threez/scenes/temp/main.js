	import * as THREE from 'three';
	import { OrbitControls } from '../jsm/controls/OrbitControls.js';
	let container, renderer;
	let camera, scene, light;
	let grid;
	let orbit;

	start();

	function start() {
		//-A1. configure container
		container = document.getElementById( 'container' );
	
		//-A2. configure scene
		scene = new THREE.Scene();
		scene.background = new THREE.Color( 0xf0f0f0 );

		//-A3. configure camera
		camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 1, 10000 );
		camera.position.set( 0, 500, 1000 );
	
		//-A4. configure light
		light = new THREE.DirectionalLight( 0xffffff, 1.5 );
		light.position.set( 10, 4, 5 );
		light.angle = Math.PI * 0.2;
		light.castShadow = true;
		light.shadow.camera.near = 200;
		light.shadow.camera.far = 2000;
		light.shadow.bias = - 0.000222;
		light.shadow.mapSize.width = 1024;
		light.shadow.mapSize.height = 1024;

		//-A5. configure grid
		grid = new THREE.GridHelper( 1000, 10 );
		grid.position.y = -100;
		grid.material.opacity = 0.25;
		grid.material.transparent = true;
	
		//-A6. add object
		scene.add( camera );
		scene.add( light );				
		scene.add( grid );
	
		//********************************** BEGIN CUSTOMIZATION
		
		//-- B1. Customization
		const geometry = new THREE.BoxGeometry( 100, 100, 100 );
		const material = new THREE.MeshPhongMaterial( { color: 0xdddddd } );
		const cube = new THREE.Mesh( geometry, material );
		cube.position.set(0, 0, 0);
		cube.rotation.set(0, 0, 0);
		cube.scale.set(1, 1, 1);
		scene.add( cube );
		
		//********************************** END CUSTOMIZATION
	
		//-C1. prepare rendering
		renderer = new THREE.WebGLRenderer( { antialias: true } );
		renderer.setPixelRatio( window.devicePixelRatio );
		renderer.setSize( window.innerWidth, window.innerHeight );
		renderer.shadowMap.enabled = true;
		container.appendChild( renderer.domElement );
		window.addEventListener( 'resize', onWindowResize );
	
		//-C2. orbit controller
		orbit = new OrbitControls( camera, renderer.domElement );
		orbit.damping = 0.2;
		orbit.addEventListener( 'change', render );
		render();
	}

	//-C3. final render
	function render() {
		renderer.render( scene, camera );
	}

	function onWindowResize() {
		camera.aspect = window.innerWidth / window.innerHeight;
		camera.updateProjectionMatrix();
		renderer.setSize( window.innerWidth, window.innerHeight );
		render();
	}

