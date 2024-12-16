import About from "./components/About";
import Buisness from "./components/Buisness";
import Contact from "./components/Contact";
import Hero from "./components/Hero";
import Mission from "./components/Mission";
import Navbar from "./components/Navbar";

export default function Home() {
  return (
    <>
      <Navbar />
      <Hero />
      <About />
      <Mission />
      <Buisness />
      <Contact />
    </>
  );
}
