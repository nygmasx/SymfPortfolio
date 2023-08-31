import React, {useState, useEffect} from "react";
import {
    FaGithub,
    FaLinkedin,
    FaPhp,
    FaCss3Alt,
    FaGitAlt,
    FaHtml5,
    FaSymfony,
    FaReact,
    FaJsSquare
} from "react-icons/fa";
import axios from "axios";
import TechnoSlider from "./TechnoSlider";
const Hero = () =>{
    return(
        <div className="text-white" id="home">
            <div className="max-w-[800px] mt-[96px] lg:mt-[120px] w-full h-full mx-auto flex flex-col text-center">
                <h1 className="font-bold p-2 mb-8 md:text-6xl md:py-4 sm:text-5xl text-4xl  ">Hi there, I'm <span className="text-emerald-700">Imrane</span>.</h1>
                <div className="">
                    <p className="md:text-4xl sm:text-3xl text-2xl font-bold mb-8">A Fullstack Web Developer</p>
                </div>
                <p className=" text-xl font-medium text-gray-500 sm:text-center mb-6">
                    I'm ready to contribute to exciting projects and learn more about Web Dev.
                </p>
                <button className="bg-emerald-700 w-[180px] rounded-md font-medium my-6 mx-auto py-3 hover:bg-opacity-80 duration-300 mb-6">
                    <a href="#about">Learn More</a></button>
                <ul className="flex flex-row mx-auto">
                    <li className="p-2">
                        <a href="https://github.com/nygmasx"><FaGithub size={25}/></a>
                    </li>
                    <li className="p-2">
                        <a href="https://www.linkedin.com/in/imrane-sallak-115801230/"><FaLinkedin size={25}/></a>
                    </li>
                </ul>
                    <TechnoSlider/>
            </div>
        </div>
    )
}

export default Hero;