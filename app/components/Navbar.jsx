import Link from 'next/link'
import React from 'react'

const Navbar = () => {
    return (
        <>
            <nav className='flex items-center justify-between p-6 bg-black text-white'>
                <div className='text-3xl'>
                    VERSA<span className='text-orange-500'>LINK</span>
                </div>
                <ul className='flex gap-4'>
                    <Link href="/about">About</Link>
                    <li>Versalink Development Initiative</li>
                    <li>Our Divisions</li>
                    <li className='text-orange-500'>Versalink Post</li>
                </ul>
            </nav>
        </>
    )
}

export default Navbar