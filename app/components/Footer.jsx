import { FaFacebook, FaInstagram, FaTiktok, FaTwitter } from "react-icons/fa"

const Footer = () => {
    return (
        <>
            <section className="h-screen bg-black p-9 text-white flex flex-wrap justify-around">
                <div className="mb-6 w-1/4 space-y-3">
                    <h1 className="text-left font-bold text-xl text-orange-400">Company</h1>
                    <ul className="list-disc pl-5 space-y-3">
                        <li className="hover:text-orange-300">About</li>
                        <li className="hover:text-orange-300">VDI</li>
                        <li className="hover:text-orange-300">Our Divisions</li>
                        <li className="hover:text-orange-300">Our Businesses</li>
                        <li className="hover:text-orange-300">Versalink Post</li>
                    </ul>
                </div>
                <div className="mb-6 w-1/4 space-y-3">
                    <h1 className="text-left font-bold text-xl text-orange-400">Businesses</h1>
                    <ul className="list-disc pl-5 space-y-3">
                        <li className="hover:text-orange-300">Versa Estate</li>
                        <li className="hover:text-orange-300">Versalink Post</li>
                        <li className="hover:text-orange-300">Versalink Logistics</li>
                    </ul>
                </div>
                <div className="mb-6 w-1/4 space-y-3">
                    <h1 className="text-xl text-orange-400 font-bold">General Inquiries</h1>
                    <ul className="space-y-3">
                        <li><span className="font-bold text-xl">Call:</span> +2348034752</li>
                        <li><span className="font-bold text-xl">Fax:</span> +2348034752</li>
                        <li><span className="font-bold text-xl">Email:</span> versalink@gmail.com</li>
                        <li className="flex space-x-4">
                            <FaFacebook className="hover:text-orange-300" />
                            <FaTiktok className="hover:text-orange-300" />
                            <FaInstagram className="hover:text-orange-300" />
                            <FaTwitter className="hover:text-orange-300" />
                        </li>
                    </ul>
                </div>
                <div className="mb-6 w-1/4 space-y-3">
                    <h1 className="text-xl text-orange-400 font-bold">Our Newsletter</h1>
                    <p className="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quas earum temporibus voluptas asperiores ea blanditiis cupiditate impedit nam voluptates dolor repellendus quae, quia repellat veniam corporis nihil sapiente adipisci.</p>
                    <input type="text" placeholder="Enter your email..." className="p-2 rounded-md" />
                    <button className="ml-2 p-2 bg-orange-400 text-black rounded-md hover:bg-orange-500">Subscribe</button>
                </div>
            </section>
        </>
    )
}

export default Footer