const Buisness = () => {
    return (
        <>
            <section className="h-screen w-full p-11 space-y-8">
                <div className="space-y-3">
                    <h1 className="text-3xl text-center">Our <span className="text-orange-500">Buisnesses</span></h1>
                    <p className="text-center">At Versalink Group, we are dedicated to driving innovation and excellence across various sectors in Nigeria.</p>
                </div>
                <div className="mt-16 flex items-center justify-center w-full space-x-4"> {/* Added space-x-4 for spacing */}
                    <div className="bg-white text-center flex items-center flex-col space-y-2">
                        <img src="real.jpeg" className="h-[157px] w-[287px] rounded-tr-md rounded-tl-md" alt="Versa Homes" /> {/* Added alt text */}
                        <h1 className="text-xl">Versa Homes</h1>
                    </div>
                    <div className="bg-white text-center flex items-center flex-col space-y-2">
                        <img src="logistics.avif" className="h-[157px] w-[287px] rounded-tr-md rounded-tl-md" alt="logistics" />
                        <h1 className="text-xl">Versalink Logistics</h1>
                    </div>
                    <div className="bg-white text-center flex items-center flex-col space-y-2">
                        <img src="homes.avif" className="h-[157px] w-[287px] rounded-tr-md rounded-tl-md" alt="homes" />
                        <h1 className="text-xl">Versa Estates</h1> {/* Changed to "Versa Estates" */}
                    </div>
                </div>
            </section>
        </>
    )
}

export default Buisness