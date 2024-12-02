import { createContext } from "react";

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