import React from 'react';
import Navbar from './Navbar'
import TechnoSlider from "./TechnoSlider";
import MyModal from "./Modal";
import Hero from "./Hero";
import About from "./About";
import Projects from "./Projects";


function App(){
    return(
        <>
            <Navbar/>
            <Hero/>
            <About/>
            <Projects/>
        </>

    );
}

export default App;