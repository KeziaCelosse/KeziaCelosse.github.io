	import * as THREE from 'three';
	import Stats from '../jsm/libs/stats.module.js';
	import { OrbitControls } from '../jsm/controls/OrbitControls.js';
	import { FBXLoader } from '../jsm/loaders/FBXLoader.js';
	let container, renderer;
	let camera, scene, light;
	let hemiLight, mesh;
	let orbit;

	start();
	animate();

	function start() {
		//-A1. configure container
		container = document.getElementById( 'container' );
		
		//-A2. configure scene
		scene = new THREE.Scene();
		scene.background = new THREE.Color( 0xa0a0a0 );

		//-A3. configure camera
		camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 2000 );
		camera.position.set( 100, 200, 300 );

		//-A4. configure light
		light = new THREE.DirectionalLight( 0xffffff );
		light.position.set( 0, 200, 100 );
		light.castShadow = true;
		light.shadow.camera.top = 180;
		light.shadow.camera.bottom = - 100;
		light.shadow.camera.left = - 120;
		light.shadow.camera.right = 120;
		hemiLight = new THREE.HemisphereLight( 0xffffff, 0x444444 );
		hemiLight.position.set( 0, 200, 0 );

		//-A5. configure plane
		mesh = new THREE.Mesh( new THREE.PlaneGeometry( 2000, 2000 ), new THREE.MeshPhongMaterial( { color: 0x111111, depthWrite: false } ) );
		mesh.rotation.x = - Math.PI / 2;
		mesh.receiveShadow = true;
		
		//-A6. add object
		scene.add( mesh );
		scene.add( light );
		scene.add( hemiLight );

		//********************************** BEGIN CUSTOMIZATION
		
		//-- B1. Customization
		const loader = new FBXLoader();
		loader.load( 'models/fbx/ybot.fbx', function ( object1 ) {
			object1.traverse( function ( child ) {
				if ( child.isMesh ) {
					child.castShadow = true;
					child.receiveShadow = true;
				}
			});
			object1.position.set(-100,0,0);
			object1.rotation.set(0,0,0);
			scene.add( object1 );
		});
		
		const texture = new THREE.TextureLoader().load( 'textures/green.jpg' );
		loader.load( 'models/fbx/ybot.fbx', function ( object2 ) {
			object2.traverse( function ( child ) {
				if ( child.isMesh ) {
					child.castShadow = true;
					child.receiveShadow = true;
					child.material.map = texture;
				}
			});
			object2.position.set(100,0,0);
			object2.rotation.set(0,0,0);
			scene.add( object2 );
		});		
		
		//********************************** END CUSTOMIZATION

		//-C1. prepare rendering
		renderer = new THREE.WebGLRenderer( { antialias: true } );
		renderer.setPixelRatio( window.devicePixelRatio );
		renderer.setSize( window.innerWidth, window.innerHeight );
		renderer.shadowMap.enabled = true;
		container.appendChild( renderer.domElement );

		//-C2. orbit controller
		orbit = new OrbitControls( camera, renderer.domElement );
		orbit.target.set( 0, 100, 0 );
		orbit.update();
		render();
	}

	//-C3. final render
	function render() {
		requestAnimationFrame( animate );
		renderer.render( scene, camera );
	}

	function onWindowResize() {
		camera.aspect = window.innerWidth / window.innerHeight;
		camera.updateProjectionMatrix();
		renderer.setSize( window.innerWidth, window.innerHeight );
		render();
	}
	
	function animate(){
		requestAnimationFrame( animate );
		renderer.render( scene, camera );
	}


	

