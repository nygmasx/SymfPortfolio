import React, {Component} from "react";
import Slider from "react-slick"
import "slick-carousel/slick/slick.css"
import "slick-carousel/slick/slick-theme.css"
import "../../styles/app.css"
import {FaSymfony, FaReact, FaGitAlt, FaHtml5, FaCss3Alt, FaPhp, FaJsSquare} from "react-icons/fa";

const TechnoSlider = () =>{
        return(
            <div
                className="border border-emerald-700 border-l-0 border-r-0 container flex items-center mt-6 overflow-hidden p-12 relative"
            >
                <div className="flex animate absolute left-0">
                    <div className="flex w-50 justify-between items-center logo">
                        <FaSymfony size={60} className="px-4"/>
                        <FaReact size={60} className="px-4"/>
                        <FaPhp size={60} className="px-4"/>
                        <FaJsSquare size={60} className="px-4"/>
                        <FaGitAlt size={60} className="px-4"/>
                        <FaHtml5 size={60} className="px-4"/>
                        <FaCss3Alt size={60} className="px-4"/>
                    </div>
                    <div className="flex w-50 justify-between items-center logo">
                        <FaSymfony size={60} className="px-4"/>
                        <FaReact size={60} className="px-4"/>
                        <FaPhp size={60} className="px-4"/>
                        <FaJsSquare size={60} className="px-4"/>
                        <FaGitAlt size={60} className="px-4"/>
                        <FaHtml5 size={60} className="px-4"/>
                        <FaCss3Alt size={60} className="px-4"/>
                    </div>
                    <div className="flex w-50 justify-between items-center logo">
                        <FaSymfony size={60} className="px-4"/>
                        <FaReact size={60} className="px-4"/>
                        <FaPhp size={60} className="px-4"/>
                        <FaJsSquare size={60} className="px-4"/>
                        <FaGitAlt size={60} className="px-4"/>
                        <FaHtml5 size={60} className="px-4"/>
                        <FaCss3Alt size={60} className="px-4"/>
                    </div>
                </div>
            </div>

        );
}
export default TechnoSlider;