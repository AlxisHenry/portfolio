import * as THREE from "three";

let scene;
let camera;
let renderer;
let clock;
let holder;
let particles = [];
let totalTargets = 3;
let speed = 0.01;

export const myScene = () => {
    scene=new THREE.Scene();
    let width = window.innerWidth;
    let height = window.innerHeight;
    camera = new THREE.PerspectiveCamera(120, width/height, 0.1, 1000);
    camera.position.z = 30;
    renderer = new THREE.WebGLRenderer( { antialias: true, alpha: true } );
    renderer.setSize( width, height );
    document.getElementById("webgl-container").appendChild(renderer.domElement);
    clock = new THREE.Clock();
    let sLight = new THREE.SpotLight( 0xffffff );
    sLight.position.set( -100, 100, 100 );
    scene.add( sLight );
    let aLight = new THREE.AmbientLight( 0xffffff );
    scene.add( aLight );
}

export const addHolder = () => {
    holder = new THREE.Object3D();
    holder.name = "holder"
    for (let i = 0; i < totalTargets; i++) {
        let ranCol = new THREE.Color();
        ranCol.setRGB( Math.random(), Math.random(), Math.random() );
        let geometry = new THREE.BoxGeometry(2,2,2);
        let material = new THREE.MeshPhongMaterial( {color: ranCol, ambient: ranCol } );
        let cube = new THREE.Mesh(geometry, material);
        cube.position.x = i * 5;
        cube.name = "cubeName" + i;
        let spinner = new THREE.Object3D();
        spinner.rotation.x = i*2.5*Math.PI;
        spinner.name = "spinnerName" + i;
        spinner.add(cube);
        holder.add(spinner);
    }
    scene.add(holder);
}

export const animate = () => {
    requestAnimationFrame( animate );
    render();
}

export const render = () => {
    holder.children.forEach(function (elem, index, array) {
        elem.rotation.y += (speed * (6-index));
        elem.children[0].rotation.x += 0.01;
        elem.children[0].rotation.y += 0.01;
    });
    if (particles.length > 0) {
        particles.forEach(function (elem, index, array) {
            switch (elem.name) {
                case "part0":
                    elem.position.x += 1;
                    break;
                case "part1":
                    elem.position.x -= 1;
                    break;
                case "part2":
                    elem.position.y += 1;
                    break;
                case "part3":
                    elem.position.y -= 1;
                    break;
                default:
                    break;
            }
            if (elem.birthDay - clock.getElapsedTime() < -1 ) {
                scene.remove(elem);
                particles.splice(index, 1);
            }
        })
    }
    renderer.render(scene, camera);
}

export const onWindowResize = () => {
    // Object Responsive
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize( window.innerWidth, window.innerHeight );
    render();
}

export const RemoveLoader = () => {
    // Hide loader
    const loader = document.querySelector('.loader')
    const body = document.querySelector('body')
    loader.style.display = 'none'
    body.classList.remove('loader-body')
}
