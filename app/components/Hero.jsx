'use server'
import Link from "next/link"

const Hero = () => {
    return (
        <>
            <section className="h-screen flex items-center">
                <div className="flex-1 flex space-y-8 flex-col items-start h-2/4 m-7">
                    <h1 className="text-8xl font-bold">Welcome to <span className="text-orange-500">Versalink</span></h1>
                    <h3 className="">Versalink Group is a Nigerian conglomerate committed to redefining excellence across multiple industries. Founded with a vision to be a leading force in the Nigerian business landscape.</h3>
                    <button className="px-5 py-2 bg-orange-500 text-white">Learn More</button>
                </div>
                <div className="flex-1">

                </div>
            </section>
        </>
    )
}

export default Hero;