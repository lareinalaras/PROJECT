import React from 'react'
import Sidebar from '../layouts/Sidebar'
import { NavLink } from 'react-router-dom';

export default function Dashboard() {
    return (
        <Sidebar>
            <div className="p-6 shadow-lg rounded-lg bg-gray-100 text-gray-700">
                <h2 className="font-semibold text-3xl mb-5">Welcome to Dashboard</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus tellus, auctor sit amet metus ut, auctor porttitor nisi. Suspendisse facilisis pulvinar tempus. Duis arcu augue, sagittis a lorem ut, suscipit viverra massa. Donec sodales velit eu facilisis vulputate. Nulla facilisi. Morbi sed urna vel augue fermentum lacinia. In accumsan elementum diam eu auctor. Praesent sodales vulputate dui. Mauris justo eros, hendrerit nec augue et, cursus faucibus orci. Donec dapibus est a nunc egestas volutpat ac in libero. Vivamus eget sapien ut erat cursus porta. Nulla eget porttitor orci. Aenean non consequat arcu, a sagittis eros. Vestibulum commodo convallis dapibus. Nullam faucibus, mi ut commodo egestas, lacus tortor dignissim nisl, eu convallis orci lectus vel odio.
                </p>
                <hr className="my-6 border-black-300" />
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacus tellus, auctor sit amet metus ut, auctor porttitor nisi. Suspendisse facilisis pulvinar tempus. Duis arcu augue, sagittis a lorem ut, suscipit viverra massa. Donec sodales velit eu facilisis vulputate. Nulla facilisi. Morbi sed urna vel augue fermentum lacinia. In accumsan elementum diam eu auctor. Praesent sodales vulputate dui. Mauris justo eros, hendrerit nec augue et, cursus faucibus orci. Donec dapibus est a nunc egestas volutpat ac in libero. Vivamus eget sapien ut erat cursus porta. Nulla eget porttitor orci. Aenean non consequat arcu, a sagittis eros. Vestibulum commodo convallis dapibus. Nullam faucibus, mi ut commodo egestas, lacus tortor dignissim nisl, eu convallis orci lectus vel odio.
                </p>
                <NavLink to="/dashboard/list-job-vacancy" className="inline-block px-6 py-2.5 mt-4 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                    List of Job
                </NavLink>
            </div>
        </Sidebar>
    )
}
