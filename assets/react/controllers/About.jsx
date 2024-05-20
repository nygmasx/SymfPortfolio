import React from "react";
import HeroImage from "../../HeroImage.jpg"

const About = () =>{
    return(
        <div id="about" className="w-full bg-emerald-700 text-white py-16 mt-[70px] md:mt-[120px] ">
            <h1 className="text-center text-4xl font-semibold ">About me</h1>
            <div className="max-w-[1240px] mx-auto grid md:grid-cols-2 mt-10 flex items-center">
                <img className="w-[65%] mx-auto rounded-2xl" src={HeroImage} alt=""/>
                <div className="mt-8 flex flex-col">
                    <p className="text-center md:text-justify text-2xl mx-auto mr-3 items-center font-medium md:mb-[50px]">
                        Hi i'm Sallak Imrane, i'm studying Computer Science at <a href="">Saint Vincent High School in Senlis</a>.
                       <br/> <br/> I'm actually learning in the way to be a Full-Stack Web Developer. <br/> <br/> Feel free to check out my resume and portfolio to learn more about my projects and skills.
                    </p>
                    <button className="bg-black w-[180px] rounded-md font-medium my-6 mx-auto py-3 hover:bg-opacity-80 duration-300 mb-6 items-center text-center justify-center">
                        <a href="">Resume</a>
                    </button>
                </div>
            </div>
        </div>
    );
}

export default About;