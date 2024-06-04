	import * as THREE from 'three';
	import { OrbitControls } from '../jsm/controls/OrbitControls.js';
	let container, renderer;
	let camera, scene, light;
	let orbit;
	let geometry, texture, material, panorama;

	start();
	update();
	
	function start() {
	
		create_scene();
		create_camera();
		create_light();
		create_panorama();
	
		//********************************** ADD OBJECT

		scene.add( camera );
		scene.add( light );	
		scene.add( panorama );	

		//********************************** ADD OBJECT

		create_renderer();
		control_orbit();
	}
	
	function create_panorama()
	{
		geometry = new THREE.SphereGeometry( 500, 60, 40 );
		geometry.scale( - 1, 1, 1 );
		texture = new THREE.TextureLoader().load( 'textures/panorama.jpg' );
		material = new THREE.MeshBasicMaterial( { map: texture } );
		panorama = new THREE.Mesh( geometry, material );
	}	

	function control_orbit()
	{
		orbit = new OrbitControls( camera, renderer.domElement );
		orbit.damping = 0.2;
		orbit.addEventListener( 'change', update );
	}

	function create_scene()
	{
		scene = new THREE.Scene();
		scene.background = new THREE.Color( 0xf0f0f0 );
	}

	function create_camera()
	{
		camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 1, 10000 );
		camera.position.set( 0, 100, 100 );
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
		grid = new THREE.GridHelper( 1000, 10 );
		grid.position.y = -100;
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


