import { FaEnvelope } from "react-icons/fa";
const Contact = () => {
    return (
        <>
            <section className="h-screen flex">
                <div>
                    <h3 className="text-orange-500">CONTACT US</h3>
                    <h1 className="text-3xl">Get in touch today</h1>
                    <p>We love questions and feedback - and we're always happy to help! <br /> Here are some ways to contact us</p>
                    <div>
                        <div>
                            <FaEnvelope />
                        </div>
                        <div>
                            <h2>Email:</h2>
                            <h1>contact@email.com</h1>
                        </div>
                    </div>
                </div>
                <div>

                </div>
            </section>
        </>
    )
}

export default Contact