const About = () => {
    return (
        <>
            <section className="h-screen flex bg-black text-white space-x-6 overflow-hidden">
                <div className="flex-1">
                    <img src="4.png" className="bg-black h-full w-full" />
                </div>
                <div className="flex-1 space-y-8 h-full mt-12">
                    <h1 className="text-4xl">About <span className="text-orange-500">Us</span> </h1>
                    <p>Versalink Group is a Nigerian conglomerate committed to redefining excellence across multiple industries. Founded with a vision to be a leading force in the Nigerian business landscape.</p>
                    <button className="px-5 py-2 bg-orange-500 text-white">Explore More</button>
                </div>
            </section>
        </>
    )
}

export default About;