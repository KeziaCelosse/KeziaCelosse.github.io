	import * as THREE from 'three';
	import { OrbitControls } from '../jsm/controls/OrbitControls.js';
	import { DragControls } from '../jsm/controls/DragControls.js';
	let container, renderer;
	let camera, scene, light;
	let grid, cube;
	let invoke_drag;
	let mouse, raycaster;
	const array_objects = [];
	

	start();
	update();
	
	function start() {
	
		create_scene();
		create_camera();
		create_light();
		create_grid();
		create_mouse();
		create_raycaster();
		create_cube();
	
		//********************************** ADD OBJECT

		scene.add( camera );
		scene.add( light );	
		scene.add( grid );		
		scene.add( cube );

		//********************************** ADD OBJECT

		create_renderer();
		control_drag();
	}

	function control_drag()
	{
		invoke_drag = new DragControls( [ ... array_objects ], camera, renderer.domElement );
		invoke_drag.addEventListener( 'drag', render );
	}
	
	function create_mouse()
	{
		mouse = new THREE.Vector2();
	}
		
	function create_raycaster()
	{
		raycaster = new THREE.Raycaster();
	}

	function create_cube()
	{
		const geometry = new THREE.BoxGeometry( 1, 1, 1 );
		const material = new THREE.MeshPhongMaterial( { color: 0xff00000 } );
		cube = new THREE.Mesh( geometry, material );
		cube.position.set(0, 0, 0);
		cube.rotation.set(0, 0, 0);
		cube.scale.set(1, 1, 1);
	}
	
	function create_scene()
	{
		scene = new THREE.Scene();
		scene.background = new THREE.Color( 0xf0f0f0 );
	}

	function create_camera()
	{
		camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 1, 10000 );
		camera.position.set( 0, 5, 10 );
		camera.lookAt(scene.position);
	}
	
	function create_light()
	{
		light = new THREE.DirectionalLight( 0xffffff, 1.5 );
		light.position.set( 10, 4, 5 );
		light.angle = Math.PI * 0.2;
		light.castShadow = true;
		light.shadow.camera.near = 200;
		light.shadow.camera.far = 2000;
		light.shadow.bias = - 0.000222;
		light.shadow.mapSize.width = 1024;
		light.shadow.mapSize.height = 1024;
	}
	
	function create_grid()
	{
		grid = new THREE.GridHelper( 10, 10 );
		grid.material.opacity = 0.25;
		grid.material.transparent = true;
	}
	
	function create_renderer()
	{
		renderer = new THREE.WebGLRenderer( { antialias: true } );
		renderer.setPixelRatio( window.devicePixelRatio );
		renderer.setSize( window.innerWidth, window.innerHeight );
		renderer.shadowMap.enabled = true;
		container = document.getElementById( 'container' );
		container.appendChild( renderer.domElement );
		window.addEventListener( 'resize', onWindowResize );
	}
	
	function update() {
		renderer.render( scene, camera );
	}

	function onWindowResize() {
		camera.aspect = window.innerWidth / window.innerHeight;
		camera.updateProjectionMatrix();
		renderer.setSize( window.innerWidth, window.innerHeight );
		update();
	}


