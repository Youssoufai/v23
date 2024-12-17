import About from "./components/About";
import Buisness from "./components/Buisness";
import Contact from "./components/Contact";
import Footer from "./components/Footer";
import Hero from "./components/Hero";
import Mission from "./components/Mission";
import Navbar from "./components/Navbar";
import Team from "./components/Team";

export default function Home() {
  return (
    <>
      <Navbar />
      <Hero />
      <About />
      <Mission />
      <Team />
      <Buisness />
      <Contact />
      <Footer />
    </>
  );
}
