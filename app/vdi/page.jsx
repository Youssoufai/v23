import Upcoming from "../components/Upcoming";

const Page = () => {
    return (
        <>

            <section className="h-full">
                <section className="bg-vdi p-11 h-screen bg-center bg-cover relative" id="vdiBg">
                    <div className="h-full flex items-center">
                        <div className="flex-1 space-y-6">
                            <h1 className="text-7xl leading-snug text-[#FF6F0F]">Let's Save More Lives With Our Helping Hand</h1>
                            <p className="text-white">The Versalink Development Initiative (VDI) is the engine of our social impact efforts. This program goes beyond the bottom line, channeling our resources to create positive change.</p>
                            <button className="px-4 py-3 bg-orange-500 rounded text-white">
                                Ongoing Programs
                            </button>
                        </div>
                        <div className="flex-1">

                        </div>
                    </div>
                </section>
                <Upcoming />
            </section>
        </>
    )
}
export default Page;