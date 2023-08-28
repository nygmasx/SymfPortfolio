import React, {useState} from "react";
import {AiOutlineClose, AiOutlineMenu} from "react-icons/ai";

const Navbar = () =>{
    const links = [
        {
        id: 1,
        link: 'home'
        },
        {
            id: 2,
            link: 'about'
        },
        {
            id: 3,
            link: 'projects'
        },
        {
            id: 4,
            link: 'contact'
        },
    ]

    const [nav, setNav] = useState(true)
    const handleNav = () =>{
        setNav(!nav)
    }
    return (
        <div className="flex justify-between items-center h-24 max-w-[1240px] px-4 mx-auto">
            <h1 className="w-full text-5xl font-bold text-white ">IS.<span className="text-emerald-700">_</span> </h1>
            <ul className="md:flex hidden">
                {links.map(({id, link}) => (
                    <li key={id} className="p-4 cursor-pointer font-medium hover:scale-105 duration-300 text-gray-500 capitalize ">
                        {link}
                    </li>
                ))}
            </ul>
            <div className="text-white md:hidden cursor-pointer" onClick={handleNav}>
                {!nav ? <AiOutlineClose size={25} /> : <AiOutlineMenu size={25}/>}
            </div>
            <div className={!nav ? "fixed left-0 top-0 h-full w-[60%] border-r border-r-gray-900 ease-in-out duration-500" : "fixed left-[-100%]"}>
                <ul className="pt-24">
                    {links.map(({id, link}) => (
                        <li key={id} className="p-4 text-gray-500 capitalize border-b border-gray-600">
                            {link}
                        </li>
                    ))}
                </ul>
            </div>
        </div>
    );
}

export default Navbar;