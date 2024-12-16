import { FaEnvelope, FaPhone } from "react-icons/fa";
const Contact = () => {
    return (
        <>
            <section className="h-screen flex justify-between p-8">
                <div className="flex flex-col items-start space-y-8 flex-1">
                    <h3 className="text-orange-500">CONTACT US</h3>
                    <h1 className="text-3xl">Get in touch today</h1>
                    <p className="text-gray-400">We love questions and feedback - and we're always happy to help! <br /> Here are some ways to contact us</p>
                    <div className="flex items-center justify-between space-x-16 rounded-sm px-12 py-2 bg-orange-50">
                        <div>
                            <FaEnvelope className="text-orange-300 text-2xl" />
                        </div>
                        <div>
                            <h2>Email:</h2>
                            <h1 className="font-bold">contact@email.com</h1>
                        </div>
                    </div>
                    <div className="flex items-center justify-between space-x-16 rounded-sm px-12 py-2 bg-orange-50">
                        <div>
                            <FaPhone className="text-orange-300 text-2xl" />
                        </div>
                        <div>
                            <h2>Phone</h2>
                            <h1 className="font-bold">contact@email.com</h1>
                        </div>
                    </div>
                </div>
                <div className="bg-slate-400 rounded-sm flex-1">
                    <form action="#" className="p-9">
                        <div className="flex flex-col space-y-3">
                            <label for="full_name" className="text-orange-100">Full Name</label>
                            <input type="text" className="rounded-sm p-2" placeholder="Your name" />
                        </div>
                    </form>
                </div>
            </section>
        </>
    )
}

export default Contact