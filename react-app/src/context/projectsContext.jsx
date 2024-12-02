import { createContext, useState, useEffect } from "react";
import apiRoutes from "../utils/api";

export const projectsContext = createContext();

const getProjects = apiRoutes.getProjects;

const ProjectsProvider = ({children})=>{
    return  (
        <projectsContext.Provider>
            {children}
        </projectsContext.Provider>
    )
}
export default ProjectsProvider;