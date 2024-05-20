import React, {useRef, useState} from 'react';
// Import Swiper React components
import {Swiper, SwiperSlide} from 'swiper/react';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/effect-cards';
import 'swiper/css/pagination';

// import required modules
import {EffectCards, Pagination} from 'swiper/modules';

export default function App() {
    const pagination = {
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
    };
    return (
        <>
            <div id="certif" className="text-white w-full py-16 bg-emerald-700 mt-[70px] md:mt-[120px]">
                <h1 className="text-center text-4xl font-semibold">Certifications</h1>
                <p className="text-center text-xl mt-8 font-medium">Some of my accomplishment</p>
                <div className="flex justify-center items-center mt-8">
                    <Swiper
                        effect={'cards'}
                        grabCursor={true}
                        modules={[EffectCards, Pagination]}
                        className="mySwiper"
                        pagination={pagination}
                    >
                        <SwiperSlide><img src="images/certifications/css-course.jpg" alt=""/></SwiperSlide>
                        <SwiperSlide><img src="images/certifications/react-ustariz.jpg" alt=""/></SwiperSlide>
                        <SwiperSlide><img src="images/certifications/js-ultime.jpg" alt=""/></SwiperSlide>
                        <SwiperSlide><img src="images/certifications/js.jpg" alt=""/></SwiperSlide>
                        <SwiperSlide><img src="images/certifications/wp-firas.jpg" alt=""/></SwiperSlide>
                        <SwiperSlide><img src="images/certifications/wp-seo.jpg" alt=""/></SwiperSlide>
                        <SwiperSlide><img src="images/certifications/react-lannoy.jpg" alt=""/></SwiperSlide>
                        <SwiperSlide><img src="images/certifications/wp-seo.jpg" alt=""/></SwiperSlide>
                    </Swiper>
                </div>
            </div>
        </>
    );
}
