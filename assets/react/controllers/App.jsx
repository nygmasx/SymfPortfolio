import React from 'react';
import Navbar from './Navbar'
import TechnoSlider from "./TechnoSlider";
import MyModal from "./Modal";
import Hero from "./Hero";
import About from "./About";
import Projects from "./Projects";
import Contact from "./Contact";
import Footer from "./Footer";
import Certif from "./Certif";


function App(){
    return(
        <>
            <Navbar/>
            <Hero/>
            <About/>
            <Projects/>
            <Certif/>
            <Contact/>
            <Footer/>
        </>

    );
}

export default App;