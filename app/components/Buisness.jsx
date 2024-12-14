const Buisness = () => {
    return (
        <>
            <section className="h-screen p-9">
                <h1 className="text-3xl text-center">Our <span className="text-orange-500">Buisnesses</span></h1>
                <p className="text-center">At Versalink Group, we are dedicated to driving innovation and excellence across various sectors in Nigeria.</p>
                <section className="mt-16">
                    <div className="flex items-center justice-between">
                        <div className="bg-white text-center flex items-center flex-col space-y-2">
                            <img src="real.jpeg" className=" rounded-tr-md rounded-tl-md " />
                            <h1 className="text-xl">Versa Homes</h1>
                        </div>
                        <div className="bg-white text-center flex items-center flex-col space-y-2">
                            <img src="logistics.avif" className="h-[157px] w-[287px] rounded-tr-md rounded-tl-md" alt="logistics" />
                            <h1 className="text-xl">Versalink Logistics</h1>
                        </div>
                        <div className="bg-white text-center flex items-center flex-col space-y-2">
                            <img src="homes.avif" className="h-[157px] w-[287px] rounded-tr-md rounded-tl-md" alt="homes" />
                            <h1 className="text-xl">Versa Homes</h1>
                        </div>

                    </div>
                    <div></div>
                </section>
            </section>
        </>
    )
}

export default Buisness