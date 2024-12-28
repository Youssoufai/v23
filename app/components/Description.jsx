import React from 'react'

const Description = () => {
    return (
        <>
            <section className="bg-black text-white h-screen p-11 flex">
                <div className='flex-1 space-y-2 p-8'>
                    <h1 className='text-4xl text-[#FF6F0F] font-bold'>Our Vision</h1>
                    <p>To create a world where every community can achieve its full potential through inclusive and sustainable development.</p>
                </div>
                <div className='flex-1 p-8'>
                    <img className='w-[428px] h-[329px]' src="carousel-2.jpg" alt="carousel" />
                </div>
            </section>
        </>
    )
}

export default Description