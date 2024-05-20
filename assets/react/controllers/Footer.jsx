import React from "react";
import {FaCopyright} from "react-icons/fa";

const Footer = () =>{
    return(
        <div className="mx-auto bg-emerald-700">
            <div className="flex flex-row mx-auto justify-center p-4">
                <p className="text-xl text-center text-white">All Rights to Imrane Sallak</p>
                <FaCopyright className="text-white ml-2 mt-1" size={20}/>
            </div>
        </div>
    )
}

export default Footer;