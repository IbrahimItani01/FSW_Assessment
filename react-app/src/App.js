import { BrowserRouter, Route, Routes } from "react-router-dom";
import "./App.css";
import Projects from "./pages/Projects";
import ProjectsProvider from "./context/projectsContext";

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <ProjectsProvider>
            <Route path="/projects" element={<Projects />} />
          </ProjectsProvider>
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
