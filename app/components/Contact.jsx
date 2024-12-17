import { FaEnvelope, FaFacebook, FaInstagram, FaLinkedinIn, FaPhone, FaTwitter } from "react-icons/fa";
const Contact = () => {
    return (
        <>
            <section className="h-screen flex justify-between p-8 bg-gray-100"> {/* Added background color */}
                <div className="flex flex-col items-start space-y-8 flex-1">
                    <h3 className="text-orange-500 text-lg font-semibold">CONTACT US</h3> {/* Increased font size and weight */}
                    <h1 className="text-4xl font-bold">Get in touch today</h1> {/* Increased font size and weight */}
                    <p className="text-gray-600">We love questions and feedback - and we're always happy to help! <br /> Here are some ways to contact us</p> {/* Darkened text color */}
                    <div className="flex items-center justify-between space-x-16 rounded-sm px-12 py-2 bg-orange-50 shadow-md"> {/* Added shadow */}
                        <div>
                            <FaEnvelope className="text-orange-300 text-3xl" /> {/* Increased icon size */}
                        </div>
                        <div>
                            <h2 className="text-lg">Email:</h2> {/* Increased font size */}
                            <h1 className="font-bold text-xl">contact@email.com</h1> {/* Increased font size */}
                        </div>
                    </div>
                    <div className="flex items-center justify-between space-x-16 rounded-sm px-12 py-2 bg-orange-50 shadow-md"> {/* Added shadow */}
                        <div>
                            <FaPhone className="text-orange-300 text-3xl" /> {/* Increased icon size */}
                        </div>
                        <div>
                            <h2 className="text-lg">Phone:</h2> {/* Added colon for consistency */}
                            <h1 className="font-bold text-xl">+1 (234) 567-8901</h1> {/* Updated phone number format */}
                        </div>
                    </div>
                    <div className="space-y-3">
                        <h2 className="text-lg font-semibold">Reach out to us on:</h2> {/* Increased font size and weight */}
                        <div className="flex space-x-4"> {/* Increased space between icons */}
                            <FaFacebook className="text-2xl text-black" /> {/* Added color to icons */}
                            <FaTwitter className="text-2xl text-black" />
                            <FaInstagram className="text-2xl text-black" />
                            <FaLinkedinIn className="text-2xl text-black" />
                        </div>
                    </div>
                </div>
                <div className="rounded-sm flex-1"> {/* Added shadow */}
                    <form action="#" className="p-9 space-y-5 bg-white shadow-md rounded-lg">
                        <div className="flex flex-col space-y-3">
                            <label htmlFor="full_name" className="text-orange-400 font-semibold">Full Name</label>
                            <input type="text" className="rounded-sm p-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Your name" />
                        </div>
                        <div className="flex flex-col space-y-3">
                            <label htmlFor="email" className="text-orange-400 font-semibold">Email</label>
                            <input type="email" className="rounded-sm p-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Your email address" />
                        </div>
                        <div className="flex flex-col space-y-3">
                            <label htmlFor="company" className="text-orange-400 font-semibold">Company (optional)</label>
                            <input type="text" className="rounded-sm p-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Company name" />
                        </div>
                        <div className="flex flex-col space-y-3">
                            <label htmlFor="message" className="text-orange-400 font-semibold">Leave us a message</label>
                            <textarea className="rounded-sm p-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="Write your message here..." />
                        </div>
                        <button type="submit" className="w-full bg-orange-500 text-white font-bold py-2 rounded hover:bg-orange-600 transition duration-200">Send Message</button>
                    </form>
                </div>
            </section>
        </>
    )
}

export default Contact