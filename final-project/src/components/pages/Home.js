import React, { useState, useEffect } from 'react'
import Layout from '../layouts/Layout'
import axios from 'axios'
import { NavLink } from 'react-router-dom';




export default function Home() {
    const [jobs, setJobs] = useState([]);

    useEffect(() => {
        getJobs()
    }, [])


    const getJobs = async () => {
        try {
            const { data } = await axios.get('https://dev-example.sanbercloud.com/api/job-vacancy')
            setJobs(data.data)
        } catch (err) {
            return err
        }
    }

    return (
        <Layout>
            <div className="p-6 bg-gray-50 text-gray-700">
                <h2 className="font-bold text-3xl mb-5">Get Job Here!</h2>
                <p align="justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus tellus, auctor sit amet metus ut, auctor porttitor nisi. Suspendisse facilisis pulvinar tempus. Duis arcu augue, sagittis a lorem ut, suscipit viverra massa. Donec sodales velit eu facilisis vulputate. Nulla facilisi. Morbi sed urna vel augue fermentum lacinia. In accumsan elementum diam eu auctor. Praesent sodales vulputate dui. Mauris justo eros, hendrerit nec augue et, cursus faucibus orci. Donec dapibus est a nunc egestas volutpat ac in libero. Vivamus eget sapien ut erat cursus porta. Nulla eget porttitor orci. Aenean non consequat arcu, a sagittis eros. Vestibulum commodo convallis dapibus. Nullam faucibus, mi ut commodo egestas, lacus tortor dignissim nisl, eu convallis orci lectus vel odio.
                </p>
                <hr className="my-6 border-gray-500" />
                <p align="justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus tellus, auctor sit amet metus ut, auctor porttitor nisi. Suspendisse facilisis pulvinar tempus. Duis arcu augue, sagittis a lorem ut, suscipit viverra massa. Donec sodales velit eu facilisis vulputate. Nulla facilisi. Morbi sed urna vel augue fermentum lacinia. In accumsan elementum diam eu auctor. Praesent sodales vulputate dui. Mauris justo eros, hendrerit nec augue et, cursus faucibus orci. Donec dapibus est a nunc egestas volutpat ac in libero. Vivamus eget sapien ut erat cursus porta. Nulla eget porttitor orci. Aenean non consequat arcu, a sagittis eros. Vestibulum commodo convallis dapibus. Nullam faucibus, mi ut commodo egestas, lacus tortor dignissim nisl, eu convallis orci lectus vel odio.
                </p>
                <NavLink to="/dashboard/list-job-vacancy" className="inline-block px-6 py-2.5 mt-4 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                    Job List
                    <br></br>
                </NavLink>
            </div>



            <div className="container py-5 xl:px-14 sm:py-3 sm:px-2">
                <div className="jobs grid grid-cols-3 gap-4">
                    {
                        jobs != null && jobs.length !== 0 && jobs.map((job, index) => (
                            <div className="shadow p-3" key={job.id}>
                                <div className="flex justify-center">
                                    <img src={job.company_image_url} alt={job.company_name} className="w-32 rounded drop-shadow-md" />
                                </div>
                                <h2 className='text-1xl font-bold'>{job.title}</h2>
                                <span className='block text-slate-400'>{job.company_name}</span>
                                <span className='block'>{`${job.job_type} - ${job.job_tenure}`}</span>

                                <br />
                                <NavLink to={`/job/${job.id}`} className="py-2 px-10 rounded-md bg-purple-200 text-white">Open</NavLink>
                            </div>
                        ))}
                    {
                        jobs === null && (
                            <>

                                {jobs === null ? '' :
                                    <p>There is no data</p>
                                }
                            </>
                        )
                    }
                </div>
            </div>
        </Layout>
    )

    
}
