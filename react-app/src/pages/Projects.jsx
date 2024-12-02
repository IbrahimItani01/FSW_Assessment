import React, { useContext } from "react";
import Project from "../components/Project";
import { projectsContext } from "../context/projectsContext";

const Projects = () => {
  const { projects } = useContext(projectsContext); // Access projects from the context

  return (
    <div className="projects-container">
      {projects.map((p) => (
        <Project project={p} key={p.id} />
      ))}
    </div>
  );
};

export default Projects;
