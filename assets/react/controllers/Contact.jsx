import React from 'react';


const Contact = () =>{
    return(
        <div id="contact" className="text-white w-full py-16">
            <h1 className="text-center text-4xl font-semibold">Contact me</h1>
            <p className="text-center text-xl mt-8 font-medium">Get in touch with me</p>
            <div className="flex justify-center items-center mt-8">
                <form action="https://getform.io/f/7af92718-7ebf-4755-a195-44ecba903d3e" method="post" className="flex flex-col w-1/2 max-w-[800px]">
                    <input type="text" name="name" placeholder="Enter your name" className="p-2 bg-transparent border-2 rounded-md text-white focus:outline-none"/>
                    <input type="email" name="email" placeholder="Enter your email" className="p-2 bg-transparent border-2 rounded-md text-white focus:outline-none"/>
                    <textarea name="message" id=""  rows="10" placeholder="Enter your message" className="p-2 bg-transparent border-2 rounded-md text-white focus:outline-none"></textarea>
                    <button className="text-white bg-black px-6 py-3 my-8 mx-auto flex items-center">Let's Talk</button>
                </form>
            </div>

        </div>
    )
}

export default Contact;