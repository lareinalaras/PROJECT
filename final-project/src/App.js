import React from 'react'
import { BrowserRouter, Routes, Route } from 'react-router-dom'
import Home from './components/pages/Home'
import CreateJob from './components/vacancy-job/Create'
import EditJob from './components/vacancy-job/Edit'
import JobDetail from './components/pages/JobDetail'
import Dashboard from './components/pages/Sidebar2'
import ListJob from './components/vacancy-job/List'


function App() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<Home />}></Route>
                <Route path="/job/:id" element={<JobDetail />}></Route>
                <Route path="/dashboard" element={<Dashboard />}></Route>
                <Route path="/dashboard/list-job-vacancy" element={<ListJob />}></Route>
                <Route path="/dashboard/list-job-vacancy/create" element={<CreateJob />}></Route>
                <Route path="/dashboard/list-job-vacancy/edit/:id" element={<EditJob />}></Route>
            </Routes>
        </BrowserRouter>
    )
}

export default App