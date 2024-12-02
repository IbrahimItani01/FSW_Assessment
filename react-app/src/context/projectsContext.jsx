import { createContext, useState, useEffect } from "react";
import apiRoutes from "../utils/api";

export const projectsContext = createContext();

const getProjects = apiRoutes.getProjects;

  const [projects, setProjects] = useState([]);

export default ProjectsProvider;