import React, { useEffect, useState } from "react";
import Slider from "react-slick";

const Projects = () => {
    const [projects, setProjects] = useState([]);
    const [selectedProject, setSelectedProject] = useState(null);

    useEffect(() => {
        fetch('api/projets')
            .then(response => response.json())
            .then(data => {
                setProjects(data);
            })
            .catch(error => {
                console.error('Error fetching projects:', error);
            });
    }, []);

    const openModal = (project) => {
        setSelectedProject(project);
        window.my_modal_3.showModal();
    }

    const ProjectSlider = ({ project }) => {
        const [images, setImages] = useState([]);

        useEffect(() => {
            if (project.image) {
                setImages(project.image);
            }
        }, [project]);

        const settings = {
            dots: true,
            infinite: true,
            speed: 2000,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true
        };

        return (
            <div>
                <Slider {...settings}>
                    {images.map((image, index) => (
                        <div key={index}>
                            <img className="max-h-[80%]" src={"images/projet/" + image.nom} alt={project.titre} />
                        </div>
                    ))}
                </Slider>
            </div>
        );
    };


    return (
        <div id="projects" className="text-white w-full py-16 mt-[70px] md:mt-[120px] flex flex-col">
            <h1 className="text-center text-4xl font-semibold">My Projects</h1>
            <p className="text-center text-xl mt-8 text-gray-500 font-medium">Few projects that i've done through my learning.</p>
            <div className="max-w-[1240px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 justify-center mt-16">
                {projects.map(project => (
                    <div key={project.id} className="card bg-emerald-700 shadow-xl w-2/3 md:w-full mx-auto">
                        <figure>
                            <img className="max-h-full" src={"images/projet/" + project.image[0].nom} alt={project.titre} />
                        </figure>
                        <div className="card-body">
                            <h2 className="card-title">{project.titre}</h2>
                            <h3 className="text-xl">{project.date}</h3>
                            <div className="card-actions justify-end">
                                <button onClick={() => openModal(project)} className="btn btn-primary bg-black border-black">More</button>
                            </div>
                        </div>
                    </div>
                ))}
                {selectedProject && (
                    <dialog id="my_modal_3" className="modal text-black">
                        <form method="dialog" className="modal-box">
                            <button onClick={() => setSelectedProject(null)} className="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            <h3 className="font-bold text-2xl text-black">{selectedProject.titre}</h3>
                            <h4>{selectedProject.date}</h4>
                            <ProjectSlider project={selectedProject} />
                            <br/>
                            <p className="mt-4 text-xl font-medium" dangerouslySetInnerHTML={{__html: selectedProject.description}}></p>
                            <p className="mb-5"> Stack: {selectedProject.technos.map(techno => techno.nom).join(" / ")}</p>
                            <button className="btn items-center mx-auto"><a href={selectedProject.lien}>Link</a></button>


                        </form>
                    </dialog>
                )}
            </div>
        </div>
    );
}

export default Projects;
