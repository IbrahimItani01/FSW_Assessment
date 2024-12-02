import { createContext, useState, useEffect } from "react";
import apiRoutes from "../utils/api";

export const projectsContext = createContext();

const getProjects = apiRoutes.getProjects;

const ProjectsProvider = ({ children }) => {
  const [projects, setProjects] = useState([]);

  const fetchProjects = async () => {
    try {
      const response = await fetch(getProjects);

      if (!response.ok) {
        throw new Error(`Error fetching projects: ${response.statusText}`);
      }

      const data = await response.json();
      setProjects(data.projects); 
    } catch (err) {
      console.log(err.message);
    }
  };
  useEffect(() => {
    fetchProjects();
  }, []);

  return (
    <projectsContext.Provider value={{ projects}}>
      {children}
    </projectsContext.Provider>
  );
};

export default ProjectsProvider;
